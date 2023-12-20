<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VISITE\Praticien;

class VisitePraticienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batchSize = 1000; // Adjust the batch size as needed
        $totalRecords = 50000;

        $this->command->getOutput()->progressStart($totalRecords);

        for ($i = 0; $i < $totalRecords; $i += $batchSize) {
            $count = min($batchSize, $totalRecords - $i);
            Praticien::factory()->count($count)->create();

            // Additional processing if needed
            $this->command->getOutput()->progressAdvance($count);
        }

        $this->command->getOutput()->progressFinish();
    }
}
