<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalleMaterielTypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('salle__materiel_type')->delete();
        
        \DB::table('salle__materiel_type')->insert(array (
            0 => 
            array (
                'id_materiel' => 1,
                'nom_materiel' => 'Table de réunion',
                'created_at' => '2023-12-30 18:05:58',
                'updated_at' => '2023-12-30 18:05:58',
            ),
            1 => 
            array (
                'id_materiel' => 2,
                'nom_materiel' => 'Chaises',
                'created_at' => '2023-12-30 18:05:58',
                'updated_at' => '2023-12-30 18:05:58',
            ),
            2 => 
            array (
                'id_materiel' => 3,
                'nom_materiel' => 'Tableau blanc',
                'created_at' => '2023-12-30 18:05:58',
                'updated_at' => '2023-12-30 18:05:58',
            ),
            3 => 
            array (
                'id_materiel' => 4,
                'nom_materiel' => 'Vidioprojecteur',
                'created_at' => '2023-12-30 18:05:58',
                'updated_at' => '2023-12-30 18:05:58',
            ),
            4 => 
            array (
                'id_materiel' => 5,
                'nom_materiel' => 'Télévision',
                'created_at' => '2023-12-30 18:05:58',
                'updated_at' => '2023-12-30 18:05:58',
            ),
            5 => 
            array (
                'id_materiel' => 6,
                'nom_materiel' => 'Système de visioconférence',
                'created_at' => '2023-12-30 18:05:58',
                'updated_at' => '2023-12-30 18:05:58',
            ),
            6 => 
            array (
                'id_materiel' => 7,
                'nom_materiel' => 'Ordinateur portable',
                'created_at' => '2023-12-30 18:05:58',
                'updated_at' => '2023-12-30 18:05:58',
            ),
            7 => 
            array (
                'id_materiel' => 8,
                'nom_materiel' => 'Prises électriques',
                'created_at' => '2023-12-30 18:05:58',
                'updated_at' => '2023-12-30 18:05:58',
            ),
            8 => 
            array (
                'id_materiel' => 9,
                'nom_materiel' => 'Wi-Fi',
                'created_at' => '2023-12-30 18:05:58',
                'updated_at' => '2023-12-30 18:05:58',
            ),
            9 => 
            array (
                'id_materiel' => 10,
                'nom_materiel' => 'Lampes de bureau',
                'created_at' => '2023-12-30 18:05:58',
                'updated_at' => '2023-12-30 18:05:58',
            ),
        ));
        
        
    }
}