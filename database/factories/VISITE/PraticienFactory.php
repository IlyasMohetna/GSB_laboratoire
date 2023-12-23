<?php

namespace Database\Factories\VISITE;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\VISITE\Praticien;
use App\Models\PARAMETRAGE\Ville;
use Illuminate\Support\Str;


class PraticienFactory extends Factory
{
    protected $model = Praticien::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create('fr_FR');

        $ville = Ville::inRandomOrder()->first();

        $uniqueRaisonSociale = null;
        $maxAttempts = 10; // You can adjust this value based on your needs
        $attempts = 0;

        do {
            $companyName = $faker->company;
            $randomString = Str::random(2); // Adjust the length of the random string as needed
            $uniqueRaisonSociale = $companyName . '-' . $randomString;
            $attempts++;
        } while (Praticien::where('raison_sociale', $uniqueRaisonSociale)->exists() && $attempts < $maxAttempts);

        return [
            'raison_sociale' => $uniqueRaisonSociale,
            'prenom' => $faker->firstName,
            'nom' => $faker->lastName,
            'adresse' => $faker->streetAddress,
            'id_ville' => $ville->id_ville,
        ];
    }
}
