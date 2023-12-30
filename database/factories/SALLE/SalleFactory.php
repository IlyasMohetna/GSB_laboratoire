<?php

namespace Database\Factories\SALLE;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\SALLE\Salle;
use App\Models\SALLE\Batiment;

class SalleFactory extends Factory
{
    public function definition(): array
    {
        $this->faker->locale('fr_FR');
        $batiment = Batiment::inRandomOrder()->first();

        $letter = $this->generateRandomLetter();
        $number = $this->faker->numberBetween(1, 999);
        $nomSalle = $this->generateRoomName($letter, $number);

        return [
            'nom_salle' => $nomSalle,
            'id_batiment' => $batiment->id_batiment,
        ];
    }

    private function generateRandomLetter(): string
    {
        return $this->faker->randomLetter;
    }

    private function generateRoomName(string $letter, int $number): string
    {
        return $letter . ' ' . $number;
    }
}
