<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FraisSituationValidationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frais__situation_validation')->delete();
        
        \DB::table('frais__situation_validation')->insert(array (
            0 => 
            array (
                'code_situation' => 1,
                'libelle_situation' => 'Déclaré',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'code_situation' => 2,
                'libelle_situation' => 'Traitement en cours',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'code_situation' => 3,
                'libelle_situation' => 'Refusé',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'code_situation' => 4,
                'libelle_situation' => 'Remboursé',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}