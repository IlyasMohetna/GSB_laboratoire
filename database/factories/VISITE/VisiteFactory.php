<?php 

namespace Database\Factories\VISITE;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\VISITE\Visite;
use App\Models\VISITE\Praticien;

class VisiteFactory extends Factory
{
    public function definition(): array
    {
        $this->faker->locale('fr_FR');
        $praticien = Praticien::inRandomOrder()->first();
        $date_debut_visite = $this->faker->date();
        $date_fin_visite = $this->faker->optional()->date();
        $rapport = $date_fin_visite !== null ? '<p></p>' : null;

        return [
            'date_debut_visite' => $date_debut_visite,
            'date_fin_visite' => $date_fin_visite,
            'rapport' => $rapport,
            'id_praticien' => $praticien->id_praticien,
            'code_employe' => 2
        ];
    }
}
