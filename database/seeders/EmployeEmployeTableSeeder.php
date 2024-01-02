<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeEmployeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employe__employe')->delete();
        
        \DB::table('employe__employe')->insert(array (
            0 => 
            array (
                'code_employe' => 1,
                'prenom' => 'Ilyas',
                'nom' => 'Mohetna',
                'utilisateur' => 'admin',
                'mot_de_passe' => '$2y$10$j6banzcJrbm5/pKcQWMSKu5Z5GUhoijTEICk3bHWyQeA2YK23hUUe',
                'email' => 'ilyas.mohetna@hotmail.com',
                'date_naissance' => '2023-12-08',
                'date_embauche' => '2023-12-08',
                'derniere_connexion' => NULL,
                'id_agence' => 1,
                'code_fonction' => 1,
                'created_at' => '2023-12-09 10:35:19',
                'updated_at' => '2023-12-09 10:35:19',
            ),
            1 => 
            array (
                'code_employe' => 2,
                'prenom' => 'Alonzo',
                'nom' => 'Perrey',
                'utilisateur' => 'alonzo',
                'mot_de_passe' => '$2y$10$j6banzcJrbm5/pKcQWMSKu5Z5GUhoijTEICk3bHWyQeA2YK23hUUe',
                'email' => 'alonzo.perrey@gsb.com',
                'date_naissance' => '2023-12-24',
                'date_embauche' => '2023-12-24',
                'derniere_connexion' => NULL,
                'id_agence' => 7,
                'code_fonction' => 2,
                'created_at' => '2023-12-24 11:02:22',
                'updated_at' => '2023-12-24 11:02:22',
            ),
            2 => 
            array (
                'code_employe' => 3,
                'prenom' => 'James',
                'nom' => 'Joey',
                'utilisateur' => 'james',
                'mot_de_passe' => '$2y$10$j6banzcJrbm5/pKcQWMSKu5Z5GUhoijTEICk3bHWyQeA2YK23hUUe',
                'email' => 'james@gsb.com',
                'date_naissance' => '2023-12-24',
                'date_embauche' => '2023-12-24',
                'derniere_connexion' => NULL,
                'id_agence' => 12,
                'code_fonction' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}