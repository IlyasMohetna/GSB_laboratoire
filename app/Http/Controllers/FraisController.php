<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FRAIS\Frais;
use App\Models\FRAIS\Justificative;
use App\Models\FRAIS\Nature;
use App\Models\FRAIS\SituationValidation;
use thiagoalessio\TesseractOCR\TesseractOCR;
use HelgeSverre\ReceiptScanner\Facades\ReceiptScanner;
use HelgeSverre\ReceiptScanner\Enums\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;
use Carbon\Carbon;

class FraisController extends Controller
{
    public function visiteurs_show()
    {
        $visiteurs = User::where('code_fonction', 2)->get();
        return view('frais.visiteurs', ['visiteurs' => $visiteurs]);
    }

    public function recap_show($id_visiteur = NULL)
    {
        Carbon::setLocale('fr');
        $startMonth = Carbon::createFromDate(2024, 1, 1)->startOfYear();
        $months = [];
        for ($i = 0; $i < 12; $i++) {
            $months[] = $startMonth->copy()->addMonths($i);
        }

        $visiteur = User::where('code_employe', $id_visiteur ?? auth()->user()->code_employe)->first();

        return view('frais.recap', ['months' => $months, 'visiteur' => $visiteur]);
    }

    public function frais_create_show()
    {
        $forfaits = Nature::all();
        return view('frais.create', ['forfaits' => $forfaits]);
    }

    public function frais_justificative_IA(Request $request)
    {
        try {
            $user = auth()->user(); // Assuming you have a user authentication system

            $file = $request->file('file');
            $originalFilename = $file->getClientOriginalName();
            
            // Generate a dynamic and unique filename
            $uniqueFilename = $user->code_employe . '_' . time() . '_' . $originalFilename;
            
            // Store the file in the "temp_uploads" directory with the unique filename
            $originalTempPath = $file->storeAs('temp_uploads', $uniqueFilename);
            
            // Continue with the rest of your code
            $originalImage = InterventionImage::make(storage_path('app/' . $originalTempPath));
            // Apply resizing and greyscale
            $resizedGreyscaleImage = $originalImage
                ->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->greyscale();
            
            // Save the manipulated image as a new temporary file with quality set to 90 (adjust as needed)
            $resizedGreyscaleTempPath = $resizedGreyscaleImage->encode('jpg', 90)
                ->save(storage_path('app/temp_uploads/resized_greyscale_' . $uniqueFilename))
                ->basename;
            
            // Perform OCR using Laravel Tesseract with additional settings
            $imagePath = storage_path('app/temp_uploads/resized_greyscale_' . $uniqueFilename);
            
            $text = (new TesseractOCR($imagePath))
                ->lang('fra', 'eng')
                ->psm(6) // Experiment with different PSM values
                ->oem(3) // Experiment with different OCR engine modes
                ->run();
                
            Storage::delete($originalTempPath);
            Storage::delete($imagePath);

            // $scan = ReceiptScanner::scan($text,asArray: true);
            $scan = [
                "orderRef" => "R1301425407841 100323",
                "date" => "2021-03-23",
                "taxAmount" => 4.88,
                "totalAmount" => 29.3,
                "currency" => "euros",
                "merchant" => [
                    "name" => "ECHANGEUR 33 A10",
                    "vatId" => null,
                    "address" => "ASF 79360 GRANZAY-GRIPT",
                ],
                "lineItems" => [
                    [
                        "text" => "Revel 3. oi. 5. WO/OoalS",
                        "qty" => 1,
                        "price" => 24.42,
                        "sku" => null,
                    ],
                    [
                        "text" => "Biri e 2, cae) + gee Ob Ze",
                        "qty" => 1,
                        "price" => 4.88,
                        "sku" => null,
                    ],
                ],
                "categorie" => "toll",
            ];

            if($scan){
                return response()->json(['success' => 'scan completed', 'content' => $scan], 200);
            }else{
                return false;
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
