<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use App\Models\FRAIS\Justificative;

class DocumentController extends Controller
{
    public function viewer($justificativeId)
    {
        $justificative = Justificative::find($justificativeId);

        if (!$justificative) {
            abort(404);
        }

        $filePath = storage_path('app/'.$justificative->justif_chemin);
        $mimeType = $justificative->justif_mime;

        if (!File::exists($filePath)) {
            dd('uere');

            abort(404);
        }

        $supportedMimeTypes = ['image/png', 'image/jpeg', 'application/pdf'];
        if (!in_array($mimeType, $supportedMimeTypes)) {
            abort(403, 'Unsupported file type');
        }

        $fileContent = File::get($filePath);

        $response = Response::make($fileContent, 200);
        $response->header('Content-Type', $mimeType);

        return $response;
    }

    public function downloader($justificativeId)
    {
        $justificative = Justificative::find($justificativeId);

        if (!$justificative) {
            abort(404);
        }

        $filePath = storage_path('app/'.$justificative->justif_chemin);
        $mimeType = $justificative->justif_mime;

        if (!File::exists($filePath)) {
            abort(404);
        }

        $fileName = $justificative->justif_nom;
        return response()->download($filePath, $fileName, ['Content-Type' => $mimeType]);
    }
}
