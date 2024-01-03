<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FraisNatureTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frais__nature')->delete();
        
        \DB::table('frais__nature')->insert(array (
            0 => 
            array (
                'id_nature' => 1,
                'intitule_frais' => 'Déjeuner',
                'intitule_quantite' => 'Quantité',
                'montant_forfait' => '25.00',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_nature' => 2,
                'intitule_frais' => 'Déjeuner - Invitation',
                'intitule_quantite' => 'Nombre d\'invités',
                'montant_forfait' => '25.00',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_nature' => 3,
                'intitule_frais' => 'Déjeuner - Formation',
                'intitule_quantite' => 'Quantité',
                'montant_forfait' => '25.00',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_nature' => 4,
                'intitule_frais' => 'Diner',
                'intitule_quantite' => 'Quantité',
                'montant_forfait' => '20.00',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id_nature' => 5,
                'intitule_frais' => 'Hotel',
                'intitule_quantite' => 'Nombre de nuitées',
                'montant_forfait' => '90.00',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id_nature' => 6,
                'intitule_frais' => 'Frais kilométrique',
                'intitule_quantite' => 'Nombre de kilomètres',
                'montant_forfait' => '0.25',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id_nature' => 7,
                'intitule_frais' => 'Péage',
                'intitule_quantite' => 'Quantité',
                'montant_forfait' => '100.00',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}