<?php

namespace App\Imports;

use App\Models\PARAMETRAGE\Departement;
use App\Models\PARAMETRAGE\Region;
use App\Models\PARAMETRAGE\Ville;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Events\BeforeSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Illuminate\Support\Facades\DB;

class VilleImport implements ToModel,WithHeadingRow,WithEvents
{
    /**
     * @param array $row
     *
     * @return User|null
     */

    public function LookupOrCreateRegion(string $region_name)
    {
        return Region::firstOrCreate([
            'nom_region' => $region_name 
        ],
        [
            'nom_region' => $region_name
        ]);
    }

    public function LookupOrCreateDepartement(string $departement_name, Region $region)
    {
        return Departement::firstOrCreate([
            'nom_departement' => $departement_name 
        ],
        [
            'nom_departement' => $departement_name,
            'region_id' => $region->region_id
        ]);
    }

    public function LookupOrCreateVille($row, Departement $departement)
    {
        return Ville::firstOrCreate([
            'nom' => $row['label'] 
        ],
        [
            'nom' => $row['label'],
            'code_postal' => $row['zip_code'],
            'ville_longitude' => $row['longitude'],
            'ville_latitude' => $row['latitude'],
            'departement_id' => $departement->departement_id
        ]);
    }

    public function model(array $row)
    {
        $region = $this->LookupOrCreateRegion($row['region_name']);
        $departement = $this->LookupOrCreateDepartement($row['department_name'], $region);
        $ville = $this->LookupOrCreateVille($row, $departement);
    }

    public function registerEvents(): array
    {
        return [
            BeforeImport::class => function(BeforeImport $event) {
                DB::statement('SET FOREIGN_KEY_CHECKS=0');
                Ville::truncate();
                Departement::truncate();
                Region::truncate();
                DB::statement('SET FOREIGN_KEY_CHECKS=1');
            },
        ];
    }

}