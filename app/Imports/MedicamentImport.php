<?php

namespace App\Imports;

use App\Models\VISITE\Medicament;
use App\Models\VISITE\FamilleMedicament;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use DevDojo\GoogleImageSearch\ImageSearch;
use Illuminate\Support\Facades\DB;

class MedicamentImport implements ToModel,WithHeadingRow,WithEvents
{
    /**
     * @param array $row
     *
     * @return User|null
     */

    public function LookupOrCreateFamille($nom_famille)
    {
        return FamilleMedicament::firstOrCreate([
            'nom_famille' => $nom_famille
        ],
        [
            'nom_famille' => $nom_famille
        ]);
    }

    public function model(array $row)
    {
        $famillemedicament = $this->LookupOrCreateFamille($row['column3']);
        Medicament::create([
            'nom_medicament' => $row['column2'],
            'photo_medicament' => '',
            'id_famille' => $famillemedicament->id_famille
        ]);
    }

    public function registerEvents(): array
    {
        return [
            BeforeImport::class => function(BeforeImport $event) {
                DB::statement('SET FOREIGN_KEY_CHECKS=0');
                Medicament::truncate();
                FamilleMedicament::truncate();
                DB::statement('SET FOREIGN_KEY_CHECKS=1');
            },
        ];
    }

}