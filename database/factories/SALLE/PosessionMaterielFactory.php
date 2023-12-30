<?php

namespace Database\Factories\SALLE;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SALLE\PosessionMateriel;
use App\Models\SALLE\Salle;
use App\Models\SALLE\MaterielType;

class PosessionMaterielFactory extends Factory
{
    public function definition(): array
    {
        $this->faker->locale('fr_FR');
        $salle = Salle::inRandomOrder()->first();

        if ($salle->materielTypes->count() >= 6) {
            return [];
        }

        $materielTypes = MaterielType::inRandomOrder()->limit(5)->get();
        $data = [
            'id_salle' => $salle->id_salle,
        ];

        foreach ($materielTypes as $materielType) {
            $data['id_materiel'] = $materielType->id_materiel;
            $duplicate = PosessionMateriel::where('id_salle', $salle->id_salle)->where('id_materiel', $data['id_materiel'])->exists();

            if ($duplicate) {
                return [];
            }
        }

        return $data;
    }
}
