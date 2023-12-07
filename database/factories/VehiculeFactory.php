<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\COVOITURAGE\Vehicule;

class VehiculeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $letters = $this->faker->randomLetter . $this->faker->randomLetter;
        $numbers = $this->faker->randomNumber(3);
        $suffix = $this->faker->randomLetter . $this->faker->randomLetter;

        // Use real car makes and models
        $carMakes = ['Toyota', 'Honda', 'Ford', 'Chevrolet', 'BMW', 'Mercedes-Benz', 'Volkswagen', 'Audi', 'Nissan', 'Hyundai'];
        $carModels = ['Camry', 'Accord', 'F-150', 'Civic', 'Corvette', '3 Series', 'E-Class', 'Golf', 'A4', 'Altima', 'Sonata'];

        return [
            'immatriculation' => strtoupper("$letters-$numbers-$suffix"),
            'marque' => $this->faker->randomElement($carMakes),
            'model' => $this->faker->randomElement($carModels),
            'annee_model' => $this->faker->year,
            'type_vehicule' => $this->faker->randomElement(['perso', 'service']),
            'id_agence' => $this->faker->randomNumber(),
            'code_employe' => $this->faker->randomNumber(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
