<?php 

namespace Database\Factories\SALLE;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\SALLE\Batiment;
use App\Models\SALLE\Agence;
use App\Models\PARAMETRAGE\Ville;

class BatimentFactory extends Factory
{
    public function definition(): array
    {
        $this->faker->locale('fr_FR');
        $agence = Agence::inRandomOrder()->first();
        return [
            'nom_batiment' => 'Batiment '.$this->faker->unique()->company,
            'id_agence' => $agence->id_agence,
        ];
    }
}
