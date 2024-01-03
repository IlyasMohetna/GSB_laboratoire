<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalleExtraTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('salle__extra')->delete();
        
        \DB::table('salle__extra')->insert(array (
            0 => 
            array (
                'id_extra' => 1,
                'libelle_extra' => 'Café',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_extra' => 2,
                'libelle_extra' => 'Repas déjeuner',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_extra' => 3,
                'libelle_extra' => 'Repas dinner',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}