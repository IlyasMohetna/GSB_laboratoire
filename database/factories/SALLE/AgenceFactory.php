<?php 

namespace Database\Factories\SALLE;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\SALLE\Agence;
use App\Models\PARAMETRAGE\Ville;

class AgenceFactory extends Factory
{
    public function definition(): array
    {
        $this->faker->locale('fr_FR');
        $ville = Ville::inRandomOrder()->first();
        return [
            'nom_agence' => $this->faker->unique()->company,
            'id_ville' => $ville->id_ville,
        ];
    }
}
