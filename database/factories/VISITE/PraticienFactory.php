<?php

namespace Database\Factories\VISITE;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\VISITE\Praticien;
use App\Models\PARAMETRAGE\Ville;

class PraticienFactory extends Factory
{
    protected $model = Praticien::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create('fr_FR');

        $ville = Ville::inRandomOrder()->first();

        return [
            'raison_sociale' => $faker->unique()->company,
            'prenom' => $faker->firstName,
            'nom' => $faker->lastName,
            'adresse' => $faker->address,
            'id_ville' => $ville->id_ville,
        ];
    }
}
