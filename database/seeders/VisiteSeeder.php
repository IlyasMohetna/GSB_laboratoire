<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VISITE\Visite;
use Database\Factories\VISITE\VisiteFactory;

class VisiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Visite::factory()->count(100)->create();
    }
}
