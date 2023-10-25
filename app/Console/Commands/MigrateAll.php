<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class MigrateAll extends Command
{
    protected $signature = 'migrate:all';
    protected $description = 'Run all migrations in subfolders and clear the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Clear the database from the root directory
        // $processClear = new Process(['php', 'artisan', 'migrate:refresh']);
        // $processClear->setWorkingDirectory(base_path()); // Set the working directory to the root of the Laravel project
        // $processClear->run();

        // $this->info("Running: " . $processClear->getCommandLine()); // Display the command line
        // $this->info($processClear->getOutput()); // Display the output

        // if (!$processClear->isSuccessful()) {
        //     $this->error('Error clearing the database.');
        // } else {
        //     $this->info('Database cleared.');
        // }

        // Run the migrations in subfolders
        $migrationFolders = glob('database/migrations/*', GLOB_ONLYDIR);

        foreach ($migrationFolders as $folder) {
            $path = str_replace(base_path(), '', $folder);
            $path = trim($path, '"'); // Remove double quotes
            $process = new Process(['php', 'artisan', 'migrate', "--path={$path}"]);
            $process->setWorkingDirectory(base_path()); // Set the working directory to the root of the Laravel project
            $process->run();

            $this->info("Running: " . $process->getCommandLine()); // Display the command line
            $this->info($process->getOutput()); // Display the output

            if (!$process->isSuccessful()) {
                $this->error("Error running migrations in folder: {$folder}");
            } else {
                $this->info("Migrations in folder {$folder} have been run.");
            }
        }
    }
}
