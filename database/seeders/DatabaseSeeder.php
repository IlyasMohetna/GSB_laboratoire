<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CovoiturageVehiculeTableSeeder::class);
        $this->call(ParametrageVilleTableSeeder::class);
        $this->call(VisiteMedicamentTableSeeder::class);
        $this->call(VisiteFamilleMedicamentTableSeeder::class);
        $this->call(SalleMaterielTypeTableSeeder::class);
    }
}
