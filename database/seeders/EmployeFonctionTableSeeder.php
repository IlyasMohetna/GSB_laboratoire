<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeFonctionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employe__fonction')->delete();
        
        \DB::table('employe__fonction')->insert(array (
            0 => 
            array (
                'code_fonction' => 1,
                'nom_fonction' => 'Admin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'code_fonction' => 2,
                'nom_fonction' => 'Visiteur commercial',
                'created_at' => '2023-12-24 11:01:45',
                'updated_at' => '2023-12-24 11:01:45',
            ),
            2 => 
            array (
                'code_fonction' => 3,
                'nom_fonction' => 'Comptable',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}