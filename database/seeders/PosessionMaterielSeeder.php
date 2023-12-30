<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SALLE\PosessionMateriel;
use App\Models\SALLE\Salle;
use App\Models\SALLE\MaterielType;
use Database\Factories\SALLE\PosessionMaterielFactory;

class PosessionMaterielSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $salles = Salle::all();
        foreach($salles as $salle){
            $materielTypes = MaterielType::inRandomOrder()->limit(4)->get();
            foreach ($materielTypes as $materielType) {
                PosessionMateriel::create([
                    'id_salle' => $salle->id_salle,
                    'id_materiel' => $materielType->id_materiel
                ]);
            }
        }
    }
}
