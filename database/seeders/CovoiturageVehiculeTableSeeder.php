<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CovoiturageVehiculeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('covoiturage__vehicule')->delete();
        
        \DB::table('covoiturage__vehicule')->insert(array (
            0 => 
            array (
                'id_vehicule' => 1,
                'immatriculation' => 'AA-111-BB',
                'marque' => 'Volkswagen',
                'model' => 'Scirocco',
                'annee_model' => '2014',
                'type_vehicule' => 'perso',
                'photo' => 'https://pngimg.com/d/volkswagen_PNG1775.png',
                'id_agence' => NULL,
                'code_employe' => 2,
                'created_at' => '2023-12-16 15:13:57',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_vehicule' => 2,
                'immatriculation' => 'AA-111-BB',
                'marque' => 'Peugeot',
                'model' => '3008',
                'annee_model' => '2020',
                'type_vehicule' => 'perso',
                'photo' => 'https://image.elite-auto.fr/visuel/PEUGEOT/peintures/600x400/peugeot_213008gtpackhybrid4su2fb_peinturenacreeblancnacre.png',
                'id_agence' => 1,
                'code_employe' => NULL,
                'created_at' => '2023-12-16 15:16:08',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_vehicule' => 13,
                'immatriculation' => 'BB-222-CC',
                'marque' => 'Renault',
                'model' => 'Clio',
                'annee_model' => '2018',
                'type_vehicule' => 'perso',
                'photo' => 'https://images.elite-auto.fr/visuel/RENAULT/renault_20clioeditiononehb5b_angularfront.png',
                'id_agence' => 1,
                'code_employe' => NULL,
                'created_at' => '2023-12-17 10:00:00',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_vehicule' => 14,
                'immatriculation' => 'CC-333-DD',
                'marque' => 'Ford',
                'model' => 'Focus',
                'annee_model' => '2019',
                'type_vehicule' => 'perso',
                'photo' => 'https://cdn.bipicar.com/specificvehicleplans/5f2a656b50b30600a9d42a20/vehicle-images/625d6ef84eb077eb1d032b20_2022_04_18_16_00_24.png',
                'id_agence' => 1,
                'code_employe' => NULL,
                'created_at' => '2023-12-17 10:30:00',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id_vehicule' => 15,
                'immatriculation' => 'DD-444-EE',
                'marque' => 'Toyota',
                'model' => 'Corolla',
                'annee_model' => '2017',
                'type_vehicule' => 'perso',
                'photo' => 'https://di-uploads-pod3.dealerinspire.com/riversidetoyota/uploads/2018/12/2019-Toyota-Corolla-L-123118-copy.png',
                'id_agence' => 1,
                'code_employe' => NULL,
                'created_at' => '2023-12-17 11:00:00',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id_vehicule' => 16,
                'immatriculation' => 'EE-555-FF',
                'marque' => 'Honda',
                'model' => 'Civic',
                'annee_model' => '2016',
                'type_vehicule' => 'perso',
                'photo' => 'https://freepngimg.com/save/31954-honda-civic-transparent-image/500x256',
                'id_agence' => 1,
                'code_employe' => NULL,
                'created_at' => '2023-12-17 11:30:00',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id_vehicule' => 17,
                'immatriculation' => 'FF-666-GG',
                'marque' => 'BMW',
                'model' => '3 Series',
                'annee_model' => '2020',
                'type_vehicule' => 'perso',
                'photo' => 'https://www.bmw.fr/content/dam/bmw/common/all-models/3-series/sedan/2022/navigation/bmw-3-series-sedan-lci-modelfinder.png',
                'id_agence' => 1,
                'code_employe' => NULL,
                'created_at' => '2023-12-17 12:00:00',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id_vehicule' => 18,
                'immatriculation' => 'GG-777-HH',
                'marque' => 'Audi',
                'model' => 'A4',
                'annee_model' => '2021',
                'type_vehicule' => 'perso',
                'photo' => 'https://www.cars.com/i/large/in/v2/stock_photos/ef0a3b68-6f47-4b45-9d52-c2f6663f1d62/4bbb6e91-7b39-4ed3-8bcd-609148931558.png',
                'id_agence' => 1,
                'code_employe' => NULL,
                'created_at' => '2023-12-17 12:30:00',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id_vehicule' => 19,
                'immatriculation' => 'HH-888-II',
                'marque' => 'Mercedes',
                'model' => 'C Class',
                'annee_model' => '2015',
                'type_vehicule' => 'perso',
                'photo' => 'https://carsguide-res.cloudinary.com/image/upload/f_auto,fl_lossy,q_auto,t_default/v1/editorial/mercedes-benz-c-class-my22-index-1.png',
                'id_agence' => 1,
                'code_employe' => NULL,
                'created_at' => '2023-12-17 13:00:00',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id_vehicule' => 20,
                'immatriculation' => 'II-999-JJ',
                'marque' => 'Nissan',
                'model' => 'Qashqai',
                'annee_model' => '2016',
                'type_vehicule' => 'perso',
                'photo' => 'https://images.elite-auto.fr/visuel/NISSAN/nissan_22qashqaihevnconnectasu3b_angularfront.png',
                'id_agence' => 1,
                'code_employe' => NULL,
                'created_at' => '2023-12-17 13:30:00',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id_vehicule' => 21,
                'immatriculation' => 'JJ-101-KK',
                'marque' => 'Kia',
                'model' => 'Sportage',
                'annee_model' => '2018',
                'type_vehicule' => 'perso',
                'photo' => 'https://pngimg.com/d/kia_PNG23.png',
                'id_agence' => 2,
                'code_employe' => NULL,
                'created_at' => '2023-12-17 14:00:00',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id_vehicule' => 22,
                'immatriculation' => 'KK-202-LL',
                'marque' => 'Hyundai',
                'model' => 'Tucson',
                'annee_model' => '2019',
                'type_vehicule' => 'perso',
                'photo' => 'https://s7g10.scene7.com/is/image/hyundaiautoever/DE-NC17AGTW51JC5XH384WRTNNB-TG1-NNB-52910N9300.0034?wid=1280&hei=720&fmt=png-alpha&fit=wrap,1',
                'id_agence' => NULL,
                'code_employe' => 2,
                'created_at' => '2023-12-17 14:30:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}