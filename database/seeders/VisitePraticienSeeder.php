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
        \DB::disableQueryLog();
        $count = 100000;
        $batchSize = 100; // Adjust the batch size as needed
        $batches = ceil($count / $batchSize);

        $this->command->getOutput()->progressStart($count);

        \DB::beginTransaction();

        try {
            for ($i = 0; $i < $batches; $i++) {
                $this->seedBatch($batchSize);
                $this->command->getOutput()->progressAdvance($batchSize);
            }

            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollBack();
            $this->command->getOutput()->progressFinish();
            // Log the exception or handle it in a way that suits your needs
            // logger()->error($e);
            // You can also output the exception message if needed
            $this->command->error("Error: {$e->getMessage()}");
            // Continue with the next batch
        }

        $this->command->getOutput()->progressFinish();
    }

    /**
     * Seed a batch of records.
     *
     * @param int $batchSize
     * @return void
     */
    protected function seedBatch(int $batchSize): void
    {
        try {
            Praticien::factory()->count($batchSize)->create();
        } catch (\Exception $e) {
            // Log the exception or handle it in a way that suits your needs
            // logger()->error($e);
            // You can also output the exception message if needed
            $this->command->error("Error in batch: {$e->getMessage()}");
        }
    }
}
