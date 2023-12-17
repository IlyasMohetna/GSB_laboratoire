<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VisiteFamilleMedicamentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('visite__famille_medicament')->delete();
        
        \DB::table('visite__famille_medicament')->insert(array (
            0 => 
            array (
                'id_famille' => 1,
                'nom_famille' => 'pommade',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            1 => 
            array (
                'id_famille' => 2,
                'nom_famille' => 'capsule molle',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            2 => 
            array (
                'id_famille' => 3,
                'nom_famille' => 'comprimé pelliculé sécable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            3 => 
            array (
                'id_famille' => 4,
                'nom_famille' => 'comprimé pelliculé',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            4 => 
            array (
                'id_famille' => 5,
                'nom_famille' => 'solution injectable en cartouche',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            5 => 
            array (
                'id_famille' => 6,
                'nom_famille' => 'solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            6 => 
            array (
                'id_famille' => 7,
                'nom_famille' => 'dispersion pour perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            7 => 
            array (
                'id_famille' => 8,
                'nom_famille' => 'suspension à diluer pour perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            8 => 
            array (
                'id_famille' => 9,
                'nom_famille' => 'degré de dilution compris entre 4CH et 30CH ou entre 7DH et 60DH',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            9 => 
            array (
                'id_famille' => 10,
                'nom_famille' => 'solution à diluer pour perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            10 => 
            array (
                'id_famille' => 11,
                'nom_famille' => 'degré de dilution compris entre 2CH et 30CH ou entre 4DH et 60DH',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            11 => 
            array (
                'id_famille' => 12,
                'nom_famille' => 'degré de dilution compris entre 2CH à 30CH et 4DH à 60DH',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            12 => 
            array (
                'id_famille' => 13,
                'nom_famille' => 'solution buvable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            13 => 
            array (
                'id_famille' => 14,
                'nom_famille' => 'comprimé',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            14 => 
            array (
                'id_famille' => 15,
                'nom_famille' => 'comprimé orodispersible',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            15 => 
            array (
                'id_famille' => 16,
                'nom_famille' => '5 mg/ml, solution injectable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            16 => 
            array (
                'id_famille' => 17,
                'nom_famille' => 'poudre et solvant pour suspension injectable à libération prolongée',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            17 => 
            array (
                'id_famille' => 18,
                'nom_famille' => 'poudre et solvant pour suspension injectable à libération prolongée en seringue préremplie',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            18 => 
            array (
                'id_famille' => 19,
                'nom_famille' => 'poudre pour dispersion injectable pour perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            19 => 
            array (
                'id_famille' => 20,
                'nom_famille' => 'comprimé sublingual',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            20 => 
            array (
                'id_famille' => 21,
                'nom_famille' => 'comprimé pelliculé gastro-résistant',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            21 => 
            array (
                'id_famille' => 22,
                'nom_famille' => 'comprimé enrobé gastro-résistant',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            22 => 
            array (
                'id_famille' => 23,
                'nom_famille' => 'comprimé sécable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            23 => 
            array (
                'id_famille' => 24,
                'nom_famille' => 'lyophilisat sublingual',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            24 => 
            array (
                'id_famille' => 25,
                'nom_famille' => '2 ml, solution injectable ou pour perfusion en seringue préremplie',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            25 => 
            array (
                'id_famille' => 26,
                'nom_famille' => '5 ml, solution injectable ou pour perfusion en seringue préremplie',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            26 => 
            array (
                'id_famille' => 27,
                'nom_famille' => '73 ml, solution injectable ou pour perfusion en seringue préremplie',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            27 => 
            array (
                'id_famille' => 28,
                'nom_famille' => 'solution pour hémofiltration, hémodialyse et hémodiafiltration',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            28 => 
            array (
                'id_famille' => 29,
                'nom_famille' => 'comprimé enrobé',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            29 => 
            array (
                'id_famille' => 30,
                'nom_famille' => 'degré de dilution compris entre 3CH et 30CH ou entre 6DH et 60DH',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            30 => 
            array (
                'id_famille' => 31,
                'nom_famille' => '2 mg/ml, solution injectable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            31 => 
            array (
                'id_famille' => 32,
                'nom_famille' => 'comprimé effervescent',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            32 => 
            array (
                'id_famille' => 33,
                'nom_famille' => 'poudre pour solution buvable en sachet-dose',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            33 => 
            array (
                'id_famille' => 34,
                'nom_famille' => 'poudre pour solution buvable en sachet',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            34 => 
            array (
                'id_famille' => 35,
                'nom_famille' => 'granulés pour solution buvable en sachet-dose',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            35 => 
            array (
                'id_famille' => 36,
                'nom_famille' => 'pommade ophtalmique',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            36 => 
            array (
                'id_famille' => 37,
                'nom_famille' => 'crème',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            37 => 
            array (
                'id_famille' => 38,
                'nom_famille' => 'poudre pour solution pour perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            38 => 
            array (
                'id_famille' => 39,
            'nom_famille' => 'poudre pour solution injectable (IV)',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            39 => 
            array (
                'id_famille' => 40,
                'nom_famille' => 'comprimé gastro-résistant',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            40 => 
            array (
                'id_famille' => 41,
                'nom_famille' => 'comprimé dispersible',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            41 => 
            array (
                'id_famille' => 42,
                'nom_famille' => '4 mg, comprimé',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            42 => 
            array (
                'id_famille' => 43,
                'nom_famille' => '5 mmol/mL, solution injectable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            43 => 
            array (
                'id_famille' => 44,
                'nom_famille' => '5 mmol/mL, solution injectable en seringue pré-remplie',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            44 => 
            array (
                'id_famille' => 45,
                'nom_famille' => '5 g/5 mL, solution injectable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            45 => 
            array (
                'id_famille' => 46,
                'nom_famille' => '5 g/5 ml I.V., solution injectable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            46 => 
            array (
                'id_famille' => 47,
                'nom_famille' => 'c omprimé pelliculé sécable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            47 => 
            array (
                'id_famille' => 48,
                'nom_famille' => 'solution pour perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            48 => 
            array (
                'id_famille' => 49,
                'nom_famille' => 'comprimé à croquer',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            49 => 
            array (
                'id_famille' => 50,
                'nom_famille' => 'solution buvable en gouttes',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            50 => 
            array (
                'id_famille' => 51,
                'nom_famille' => 'granules et  solution',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            51 => 
            array (
                'id_famille' => 52,
                'nom_famille' => 'poudre et solvant pour solution injectable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            52 => 
            array (
                'id_famille' => 53,
                'nom_famille' => 'solution injectable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            53 => 
            array (
                'id_famille' => 54,
                'nom_famille' => 'solution pour inhalation en flacon pressurisé',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            54 => 
            array (
                'id_famille' => 55,
                'nom_famille' => '5 mL, poudre et solvant pour solution injectable en seringue préremplie. Vaccin conjugué de l\'Haemophilus type b',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            55 => 
            array (
                'id_famille' => 56,
                'nom_famille' => 'poudre pour suspension buvable en sachet',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            56 => 
            array (
                'id_famille' => 57,
                'nom_famille' => 'comprimé pelliculé à libération prolongée',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            57 => 
            array (
                'id_famille' => 58,
                'nom_famille' => 'poudre pour solution injectable et perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            58 => 
            array (
                'id_famille' => 59,
                'nom_famille' => 'poudre et solvant pour solution injectable et perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            59 => 
            array (
                'id_famille' => 60,
                'nom_famille' => 'comprimé avec applicateur buccal',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            60 => 
            array (
                'id_famille' => 61,
                'nom_famille' => 'gélule',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            61 => 
            array (
                'id_famille' => 62,
                'nom_famille' => '5 mg, comprimé orodispersible',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            62 => 
            array (
                'id_famille' => 63,
                'nom_famille' => 'suspension buvable ou pour instillation nasale',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            63 => 
            array (
                'id_famille' => 64,
                'nom_famille' => 'solution pour pulvérisation nasale/buccale en flacon pressurisé',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            64 => 
            array (
                'id_famille' => 65,
                'nom_famille' => 'comprimé pelliculé et granulés effervescents',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            65 => 
            array (
                'id_famille' => 66,
                'nom_famille' => 'poudre pour solution injectable/pour perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            66 => 
            array (
                'id_famille' => 67,
                'nom_famille' => 'gaz médicinal comprimé',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            67 => 
            array (
                'id_famille' => 68,
                'nom_famille' => '5 mg, comprimé pelliculé sécable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            68 => 
            array (
                'id_famille' => 69,
                'nom_famille' => 'comprimé enrobé sécable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            69 => 
            array (
                'id_famille' => 70,
                'nom_famille' => '5 %, collyre en solution',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            70 => 
            array (
                'id_famille' => 71,
                'nom_famille' => 'gel',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            71 => 
            array (
                'id_famille' => 72,
                'nom_famille' => 'capsule',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            72 => 
            array (
                'id_famille' => 73,
                'nom_famille' => '1 POUR CENT, crème',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            73 => 
            array (
                'id_famille' => 74,
                'nom_famille' => '1 %, crème',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            74 => 
            array (
                'id_famille' => 75,
                'nom_famille' => '1 %, gel',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            75 => 
            array (
                'id_famille' => 76,
                'nom_famille' => '25 mg, comprimé pelliculé',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            76 => 
            array (
                'id_famille' => 77,
                'nom_famille' => '50 mg, comprimé pelliculé',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            77 => 
            array (
                'id_famille' => 78,
                'nom_famille' => 'poudre pour solution à diluer pour perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            78 => 
            array (
                'id_famille' => 79,
                'nom_famille' => '5 mg, comprimé pelliculé',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            79 => 
            array (
                'id_famille' => 80,
                'nom_famille' => '12 %, solution pour bain de bouche',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            80 => 
            array (
                'id_famille' => 81,
                'nom_famille' => '5 mg, gélule',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            81 => 
            array (
                'id_famille' => 82,
                'nom_famille' => '1 mg/mL sans sulfite, solution injectable en seringue pré-remplie',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            82 => 
            array (
                'id_famille' => 83,
                'nom_famille' => 'solution injectable en seringue pré-remplie',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            83 => 
            array (
                'id_famille' => 84,
                'nom_famille' => 'solution injectable en ampoule',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            84 => 
            array (
                'id_famille' => 85,
                'nom_famille' => '25 mg/ml, solution injectable en ampoule',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            85 => 
            array (
                'id_famille' => 86,
                'nom_famille' => '50 mg/ml, solution injectable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            86 => 
            array (
                'id_famille' => 87,
                'nom_famille' => 'poudre pour solution injectable en flacon',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            87 => 
            array (
                'id_famille' => 88,
                'nom_famille' => 'solution injectable pour perfusion en flacon',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            88 => 
            array (
                'id_famille' => 89,
                'nom_famille' => 'solution injectable en seringue préremplie',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            89 => 
            array (
                'id_famille' => 90,
                'nom_famille' => '5 mg, gélule à libération prolongée',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            90 => 
            array (
                'id_famille' => 91,
                'nom_famille' => 'gélule à libération prolongée',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            91 => 
            array (
                'id_famille' => 92,
                'nom_famille' => 'suspension buvable en flacon',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            92 => 
            array (
                'id_famille' => 93,
                'nom_famille' => '5 mg/ml, solution buvable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            93 => 
            array (
                'id_famille' => 94,
                'nom_famille' => 'liquide pour inhalation par vapeur',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            94 => 
            array (
                'id_famille' => 95,
                'nom_famille' => 'granules',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            95 => 
            array (
                'id_famille' => 96,
                'nom_famille' => 'degré de dilution compris entre 4DH et 6DH',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            96 => 
            array (
                'id_famille' => 97,
                'nom_famille' => 'décocté WELEDA, degré de dilution compris entre 2CH et 30CH ou entre 4DH et 60DH',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            97 => 
            array (
                'id_famille' => 98,
                'nom_famille' => 'degré de dilution compris entre 4CH et 30CH ou entre 8DH et 60DH',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            98 => 
            array (
                'id_famille' => 99,
            'nom_famille' => '25% (5 mg/2 ml), solution injectable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            99 => 
            array (
                'id_famille' => 100,
            'nom_famille' => '5% (10 mg/2 ml), solution injectable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            100 => 
            array (
                'id_famille' => 101,
                'nom_famille' => '5 mg, comprimé',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            101 => 
            array (
                'id_famille' => 102,
                'nom_famille' => 'collyre en solution',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            102 => 
            array (
                'id_famille' => 103,
                'nom_famille' => 'gel buccal',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            103 => 
            array (
                'id_famille' => 104,
                'nom_famille' => 'liquide oral',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            104 => 
            array (
                'id_famille' => 105,
                'nom_famille' => 'degré de dilution compris entre 3CH et 30CH ou entre 5DH et 60DH',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            105 => 
            array (
                'id_famille' => 106,
                'nom_famille' => 'suspension pour inhalation en flacon pressurisé',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            106 => 
            array (
                'id_famille' => 107,
                'nom_famille' => 'comprimé enrobé à libération prolongée',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            107 => 
            array (
                'id_famille' => 108,
                'nom_famille' => 'comprimé à sucer sécable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            108 => 
            array (
                'id_famille' => 109,
                'nom_famille' => 'solution pour pulvérisation nasale',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            109 => 
            array (
                'id_famille' => 110,
                'nom_famille' => '200 g/l, solution pour perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            110 => 
            array (
                'id_famille' => 111,
                'nom_famille' => '40 g/l, solution pour perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            111 => 
            array (
                'id_famille' => 112,
                'nom_famille' => '50 g/l, solution pour perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            112 => 
            array (
                'id_famille' => 113,
                'nom_famille' => '5 ml, compresse imprégnée',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            113 => 
            array (
                'id_famille' => 114,
                'nom_famille' => 'solution pour application locale',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            114 => 
            array (
                'id_famille' => 115,
                'nom_famille' => 'solution pour application cutanée',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            115 => 
            array (
                'id_famille' => 116,
                'nom_famille' => 'sirop',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            116 => 
            array (
                'id_famille' => 117,
                'nom_famille' => '25 microgramme, capsule molle',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            117 => 
            array (
                'id_famille' => 118,
                'nom_famille' => '33 mg/mL, poudre et solvant pour solution injectable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            118 => 
            array (
                'id_famille' => 119,
                'nom_famille' => 'poudre pour suspension buvable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            119 => 
            array (
                'id_famille' => 120,
                'nom_famille' => '5 mg/mL, solution injectable/pour perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            120 => 
            array (
                'id_famille' => 121,
                'nom_famille' => 'comprimé à libération prolongée',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            121 => 
            array (
                'id_famille' => 122,
                'nom_famille' => '5 mg pour 5 ml, suspension buvable en flacon',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            122 => 
            array (
                'id_famille' => 123,
                'nom_famille' => 'suspension buvable en sachet',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            123 => 
            array (
                'id_famille' => 124,
                'nom_famille' => 'suspension buvable en sachet édulcorée à la saccharine sodique',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            124 => 
            array (
                'id_famille' => 125,
            'nom_famille' => 'lyophilisat et solution pour usage parentéral (I.V.)',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            125 => 
            array (
                'id_famille' => 126,
                'nom_famille' => '05 %, collyre en solution',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            126 => 
            array (
                'id_famille' => 127,
                'nom_famille' => '05 %, collyre en solution en récipient unidose',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            127 => 
            array (
                'id_famille' => 128,
                'nom_famille' => '05 POUR CENT, collyre en solution',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            128 => 
            array (
                'id_famille' => 129,
                'nom_famille' => '127 mg/dose, solution pour pulvérisation nasale',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            129 => 
            array (
                'id_famille' => 130,
                'nom_famille' => 'solution pour bain de bouche',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            130 => 
            array (
                'id_famille' => 131,
                'nom_famille' => 'suspension injectable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            131 => 
            array (
                'id_famille' => 132,
                'nom_famille' => '5 mg/mL, solution pour pulvérisation nasale',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            132 => 
            array (
                'id_famille' => 133,
                'nom_famille' => 'pâte pour application locale',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            133 => 
            array (
                'id_famille' => 134,
                'nom_famille' => 'mousse pour application cutanée en flacon pressurisé',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            134 => 
            array (
                'id_famille' => 135,
                'nom_famille' => 'crème vaginale',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            135 => 
            array (
                'id_famille' => 136,
                'nom_famille' => 'solution injectable à usage dentaire',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            136 => 
            array (
                'id_famille' => 137,
            'nom_famille' => '2 % (2mg/ml), collyre en solution',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            137 => 
            array (
                'id_famille' => 138,
                'nom_famille' => '25 mg, comprimé sécable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            138 => 
            array (
                'id_famille' => 139,
                'nom_famille' => '50 mg, comprimé sécable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            139 => 
            array (
                'id_famille' => 140,
                'nom_famille' => '25 mg, comprimé',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            140 => 
            array (
                'id_famille' => 141,
                'nom_famille' => '5 mg, comprimé osmotique à libération prolongée',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            141 => 
            array (
                'id_famille' => 142,
                'nom_famille' => 'comprimé osmotique à libération prolongée',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            142 => 
            array (
                'id_famille' => 143,
                'nom_famille' => 'solution pour prick-test cutané',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            143 => 
            array (
                'id_famille' => 144,
                'nom_famille' => 'poudre pour dispersion pour perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            144 => 
            array (
                'id_famille' => 145,
                'nom_famille' => '6 % SANS SUCRE, solution buvable édulcorée au sorbitol',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            145 => 
            array (
                'id_famille' => 146,
                'nom_famille' => '3 POUR CENT SANS SUCRE, solution buvable édulcorée au cyclamate de sodium et au sorbitol',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            146 => 
            array (
                'id_famille' => 147,
                'nom_famille' => '6 %, solution buvable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            147 => 
            array (
                'id_famille' => 148,
                'nom_famille' => '3 %, solution buvable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            148 => 
            array (
                'id_famille' => 149,
                'nom_famille' => 'poudre pour solution injectable',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            149 => 
            array (
                'id_famille' => 150,
                'nom_famille' => 'poudre pour solution pour irrigation vésicale',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            150 => 
            array (
                'id_famille' => 151,
                'nom_famille' => '5 mg/ml, solution pour perfusion',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            151 => 
            array (
                'id_famille' => 152,
                'nom_famille' => '3 mg/mL, collyre en solution',
                'created_at' => '2023-12-17 07:48:59',
                'updated_at' => '2023-12-17 07:48:59',
            ),
            152 => 
            array (
                'id_famille' => 153,
                'nom_famille' => 'vernis à ongles médicamenteux',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            153 => 
            array (
                'id_famille' => 154,
            'nom_famille' => '5 mg ADULTES, comprimé pelliculé (rapport amoxicilline/acide clavulanique : 8/1)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            154 => 
            array (
                'id_famille' => 155,
            'nom_famille' => '5 mg par mL ENFANTS, poudre pour suspension buvable (rapport amoxicilline/acide clavulanique : 8/1)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            155 => 
            array (
                'id_famille' => 156,
            'nom_famille' => '5 mg par mL NOURRISSONS, poudre pour suspension buvable (rapport amoxicilline/acide clavulanique : 8/1)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            156 => 
            array (
                'id_famille' => 157,
            'nom_famille' => '5 mg par ml ENFANTS, poudre pour suspension buvable en flacon (rapport amoxicilline/acide clavulanique : 8/1)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            157 => 
            array (
                'id_famille' => 158,
            'nom_famille' => '5 mg par ml NOURRISSONS, poudre pour suspension buvable en flacon (rapport amoxicilline/acide clavulanique : 8/1)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            158 => 
            array (
                'id_famille' => 159,
                'nom_famille' => 'comprimé pelliculé dispersible',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            159 => 
            array (
                'id_famille' => 160,
                'nom_famille' => 'comprimé dispersible sécable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            160 => 
            array (
                'id_famille' => 161,
            'nom_famille' => 'poudre et solution pour solution injectable (IM)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            161 => 
            array (
                'id_famille' => 162,
            'nom_famille' => 'poudre pour suspension buvable en sachet-dose (rapport amoxicilline/acide clavulanique : 8/1)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            162 => 
            array (
                'id_famille' => 163,
            'nom_famille' => '50 mg par ml ENFANTS, poudre pour suspension buvable en flacon (Rapport Amoxicilline/Acide clavulanique : 8/1)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            163 => 
            array (
                'id_famille' => 164,
            'nom_famille' => '50 mg par ml NOURRISSONS, poudre pour suspension buvable en flacon (Rapport Amoxicilline/Acide clavulanique : 8/1)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            164 => 
            array (
                'id_famille' => 165,
            'nom_famille' => '5 mg, comprimé pelliculé (rapport amoxicilline/acide clavulanique : 8/1)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            165 => 
            array (
                'id_famille' => 166,
            'nom_famille' => 'enfants, poudre pour solution injectable (I.V.)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            166 => 
            array (
                'id_famille' => 167,
            'nom_famille' => 'poudre pour solution injectable (I.V.)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            167 => 
            array (
                'id_famille' => 168,
            'nom_famille' => 'poudre pour solution injectable/pour perfusion (I.V.)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            168 => 
            array (
                'id_famille' => 169,
            'nom_famille' => 'poudre pour solution injectable / pour perfusion (IV)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            169 => 
            array (
                'id_famille' => 170,
            'nom_famille' => '5 mg par ml ENFANTS, poudre pour suspension buvable en flacon (rapport amoxicilline/acide clavulanique: 8/1)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            170 => 
            array (
                'id_famille' => 171,
            'nom_famille' => '5 mg par ml NOURRISSONS, poudre pour suspension buvable en flacon (rapport amoxicilline/acide clavulanique: 8/1)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            171 => 
            array (
                'id_famille' => 172,
            'nom_famille' => '5 mg ADULTES, comprimé pelliculé (rapport amoxicilline/acide clavulanique: 8/1)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            172 => 
            array (
                'id_famille' => 173,
            'nom_famille' => '50 mg ADULTES, comprimé pelliculé (rapport amoxicilline/acide clavulanique : 8/1)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            173 => 
            array (
                'id_famille' => 174,
                'nom_famille' => 'poudre et solution pour préparation injectable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            174 => 
            array (
                'id_famille' => 175,
                'nom_famille' => '06 %, solution pour application cutanée',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            175 => 
            array (
                'id_famille' => 176,
                'nom_famille' => 'crème pour application',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            176 => 
            array (
                'id_famille' => 177,
                'nom_famille' => 'poudre pour application locale en flacon poudreur',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            177 => 
            array (
                'id_famille' => 178,
                'nom_famille' => '6 mg/1,2 mg MIEL ET CITRON, pastille édulcorée à la saccharine sodique, au maltitol et à l\'isomalt',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            178 => 
            array (
                'id_famille' => 179,
                'nom_famille' => '6 mg/1,2 mg MIEL CITRON, pastille édulcorée à la saccharine sodique, au maltitol et à l\'isomalt',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            179 => 
            array (
                'id_famille' => 180,
                'nom_famille' => 'solution pour pulvérisation buccale',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            180 => 
            array (
                'id_famille' => 181,
                'nom_famille' => '3 ml, solution injectable en seringue préremplie',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            181 => 
            array (
                'id_famille' => 182,
                'nom_famille' => 'gel pour application locale',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            182 => 
            array (
                'id_famille' => 183,
                'nom_famille' => '2 mg/g, gel',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            183 => 
            array (
                'id_famille' => 184,
                'nom_famille' => 'gel transdermique en sachet-dose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            184 => 
            array (
                'id_famille' => 185,
                'nom_famille' => 'solution injectable intramusculaire',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            185 => 
            array (
                'id_famille' => 186,
                'nom_famille' => 'collutoire',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            186 => 
            array (
                'id_famille' => 187,
                'nom_famille' => 'poudre pour inhalation en récipient unidose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            187 => 
            array (
                'id_famille' => 188,
                'nom_famille' => 'emplâtre médicamenteux',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            188 => 
            array (
                'id_famille' => 189,
                'nom_famille' => 'collyre en solution en récipient unidose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            189 => 
            array (
                'id_famille' => 190,
                'nom_famille' => 'suspension buvable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            190 => 
            array (
                'id_famille' => 191,
                'nom_famille' => 'gaz pour inhalation, en bouteille',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            191 => 
            array (
                'id_famille' => 192,
                'nom_famille' => 'solution pour instillation auriculaire',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            192 => 
            array (
                'id_famille' => 193,
                'nom_famille' => 'degré de dilution compris entre 3CH à 30CH et 5DH à 60DH',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            193 => 
            array (
                'id_famille' => 194,
                'nom_famille' => '75 %, gel pour application cutanée',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            194 => 
            array (
                'id_famille' => 195,
                'nom_famille' => 'solution injectable en flacon',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            195 => 
            array (
                'id_famille' => 196,
                'nom_famille' => 'degré de dilution compris entre 7CH et 30CH ou entre 14DH et 60DH',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            196 => 
            array (
                'id_famille' => 197,
                'nom_famille' => 'solution injectable en stylo pré-rempli',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            197 => 
            array (
                'id_famille' => 198,
                'nom_famille' => 'gélule et APREPITANT ARROW 80 mg, gélule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            198 => 
            array (
                'id_famille' => 199,
                'nom_famille' => 'gélule et APREPITANT BIOGARAN 80 mg, gélule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            199 => 
            array (
                'id_famille' => 200,
                'nom_famille' => 'gélule et APREPITANT CRISTERS 80 mg, gélule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            200 => 
            array (
                'id_famille' => 201,
                'nom_famille' => 'gélule et APREPITANT EVOLUGEN 80 mg, gélule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            201 => 
            array (
                'id_famille' => 202,
                'nom_famille' => 'gélule et APREPITANT REDDY PHARMA 80 mg, gélule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            202 => 
            array (
                'id_famille' => 203,
                'nom_famille' => 'gélule et APREPITANT SANDOZ 80 mg, gélule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            203 => 
            array (
                'id_famille' => 204,
                'nom_famille' => 'gélule et APREPITANT TEVA 80 mg, gélule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            204 => 
            array (
                'id_famille' => 205,
                'nom_famille' => 'gélule et APREPITANT VIATRIS 80 mg, gélule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            205 => 
            array (
                'id_famille' => 206,
                'nom_famille' => 'gélule et APREPITANT ZENTIVA 80 mg, gélule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            206 => 
            array (
                'id_famille' => 207,
                'nom_famille' => '2 %, gel opthalmique en récipient unidose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            207 => 
            array (
                'id_famille' => 208,
            'nom_famille' => 'poudre pour solution pour perfusion (I.V.)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            208 => 
            array (
                'id_famille' => 209,
            'nom_famille' => 'poudre et suspension pour suspension injectable. Vaccin du Virus Respiratoire Syncytial (VRS) (recombinant, avec adjuvant)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            209 => 
            array (
                'id_famille' => 210,
                'nom_famille' => 'solution à diluer pour perfusion en multidose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            210 => 
            array (
                'id_famille' => 211,
                'nom_famille' => 'solution buvable en ampoule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            211 => 
            array (
                'id_famille' => 212,
                'nom_famille' => 'solution buvable en flacon',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            212 => 
            array (
                'id_famille' => 213,
                'nom_famille' => 'dispersion pour inhalation par nébuliseur',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            213 => 
            array (
                'id_famille' => 214,
                'nom_famille' => 'degré de dilution compris entre 13CH et 30CH ou entre 26DH et 60DH',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            214 => 
            array (
                'id_famille' => 215,
                'nom_famille' => '8 ml, solution injectable en seringue pré-remplie',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            215 => 
            array (
                'id_famille' => 216,
                'nom_famille' => '5 mg/0,5 ml, solution injectable en seringue pré-remplie',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            216 => 
            array (
                'id_famille' => 217,
                'nom_famille' => '4 ml, solution injectable en seringue pré-remplie',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            217 => 
            array (
                'id_famille' => 218,
                'nom_famille' => '5 mg/0,6 ml, solution injectable en seringue pré-remplie',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            218 => 
            array (
                'id_famille' => 219,
                'nom_famille' => '625 mg, comprimé sécable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            219 => 
            array (
                'id_famille' => 220,
                'nom_famille' => 'liquide pour application cutanée',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            220 => 
            array (
                'id_famille' => 221,
                'nom_famille' => 'comprmé enrobé',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            221 => 
            array (
                'id_famille' => 222,
                'nom_famille' => 'solution pour inhalation par fumigation',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            222 => 
            array (
                'id_famille' => 223,
                'nom_famille' => '4 POUR CENT, solution buvable en gouttes',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            223 => 
            array (
                'id_famille' => 224,
                'nom_famille' => '6 mg/0,5 mL, collyre en récipient unidose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            224 => 
            array (
                'id_famille' => 225,
                'nom_famille' => 'pâte gingivale',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            225 => 
            array (
                'id_famille' => 226,
                'nom_famille' => '0025 mmol/mL, solution injectable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            226 => 
            array (
                'id_famille' => 227,
                'nom_famille' => '0025 mmol/mL, solution injectable en seringue préremplie',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            227 => 
            array (
                'id_famille' => 228,
                'nom_famille' => 'solution pour pulvérisation endo-buccale',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            228 => 
            array (
                'id_famille' => 229,
                'nom_famille' => 'solutions pour colle',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            229 => 
            array (
                'id_famille' => 230,
                'nom_famille' => 'émulsion pour application cutanée',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            230 => 
            array (
                'id_famille' => 231,
                'nom_famille' => 'poudre pour inhalation',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            231 => 
            array (
                'id_famille' => 232,
                'nom_famille' => 'poudre et solution pour usage parentéral',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            232 => 
            array (
                'id_famille' => 233,
                'nom_famille' => 'comprimé effervescent sécable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            233 => 
            array (
                'id_famille' => 234,
                'nom_famille' => '5 microgrammes, poudre pour inhalation en gélule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            234 => 
            array (
                'id_famille' => 235,
                'nom_famille' => 'poudre pour inhalation en gélule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            235 => 
            array (
                'id_famille' => 236,
                'nom_famille' => 'poudre et solvant pour solution pour perfusion',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            236 => 
            array (
                'id_famille' => 237,
                'nom_famille' => 'comprimé pelliculé quadrisécable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            237 => 
            array (
                'id_famille' => 238,
                'nom_famille' => '5 mg/5 ml, solution à diluer pour perfusion',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            238 => 
            array (
                'id_famille' => 239,
                'nom_famille' => '75 mg/0,9 ml, solution injectable en seringue préremplie',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            239 => 
            array (
                'id_famille' => 240,
                'nom_famille' => '75 mg/0,9 mL, solution injectable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            240 => 
            array (
                'id_famille' => 241,
                'nom_famille' => '5 mg/25 mg ENFANTS, comprimé pelliculé',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            241 => 
            array (
                'id_famille' => 242,
                'nom_famille' => 'solution injectable/pour perfusion',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            242 => 
            array (
                'id_famille' => 243,
                'nom_famille' => '25 mg/mL, solution injectable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            243 => 
            array (
                'id_famille' => 244,
                'nom_famille' => '50 mg/1 mL, solution injectable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            244 => 
            array (
                'id_famille' => 245,
                'nom_famille' => '25 mg/1 ml, solution injectable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            245 => 
            array (
                'id_famille' => 246,
                'nom_famille' => '3 POUR CENT, collyre',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            246 => 
            array (
                'id_famille' => 247,
                'nom_famille' => '5 POUR CENT, collyre',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            247 => 
            array (
                'id_famille' => 248,
                'nom_famille' => 'collyre',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            248 => 
            array (
                'id_famille' => 249,
                'nom_famille' => '1 mg/mL solution injectable en seringue préremplie',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            249 => 
            array (
                'id_famille' => 250,
                'nom_famille' => '1 mg/mL, solution injectable en seringue préremplie',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            250 => 
            array (
                'id_famille' => 251,
                'nom_famille' => '2 mg/mL, solution injectable en seringue préremplie',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            251 => 
            array (
                'id_famille' => 252,
                'nom_famille' => '5 mg/ml, solution injectable en ampoule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            252 => 
            array (
                'id_famille' => 253,
                'nom_famille' => '25 mg/1 ml ENFANTS, solution pour inhalation par nébuliseur en récipient unidose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            253 => 
            array (
                'id_famille' => 254,
                'nom_famille' => '50 mg/1 ml ADULTES, solution pour inhalation par nébuliseur en récipient unidose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            254 => 
            array (
                'id_famille' => 255,
                'nom_famille' => '5 mg/2 ml, solution pour inhalation par nébuliseur en récipient unidose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            255 => 
            array (
                'id_famille' => 256,
                'nom_famille' => '25 mg/2 ml, solution pour inhalation par nébuliseur en récipient unidose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            256 => 
            array (
                'id_famille' => 257,
                'nom_famille' => '03 POUR CENT, solution nasale en flacon pulvérisateur',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            257 => 
            array (
                'id_famille' => 258,
                'nom_famille' => '05 POUR CENT, solution pour pulvérisation nasale',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            258 => 
            array (
                'id_famille' => 259,
                'nom_famille' => 'poudre et solvant pour suspension pour instillation auriculaire',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            259 => 
            array (
                'id_famille' => 260,
                'nom_famille' => 'gouttes auriculaires',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            260 => 
            array (
                'id_famille' => 261,
                'nom_famille' => '5 microgrammes/pulvérisation, suspension pour pulvérisation nasale',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            261 => 
            array (
                'id_famille' => 262,
            'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin de l\'hépatite A (inactivé, adsorbé)',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            262 => 
            array (
                'id_famille' => 263,
                'nom_famille' => 'suppositoire',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            263 => 
            array (
                'id_famille' => 264,
                'nom_famille' => '5 mg, capsule molle',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            264 => 
            array (
                'id_famille' => 265,
                'nom_famille' => '5 ml, solution injectable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            265 => 
            array (
                'id_famille' => 266,
                'nom_famille' => '5 ml, solution injectable, en stylo prérempli',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            266 => 
            array (
                'id_famille' => 267,
                'nom_famille' => '5 g, poudre pour solution injectable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            267 => 
            array (
                'id_famille' => 268,
                'nom_famille' => 'poudre pour suspension injectable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            268 => 
            array (
                'id_famille' => 269,
                'nom_famille' => 'collyre en suspension',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            269 => 
            array (
                'id_famille' => 270,
                'nom_famille' => '125 unités Speywood, poudre pour solution injectable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            270 => 
            array (
                'id_famille' => 271,
                'nom_famille' => 'CIS bio international, solution injectable. [Réf : SERALB-125]',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            271 => 
            array (
                'id_famille' => 272,
                'nom_famille' => 'solution injectable I.M.',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            272 => 
            array (
                'id_famille' => 273,
                'nom_famille' => '05 mg/ml, solution injectable pour voie intrathécale en ampoule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            273 => 
            array (
                'id_famille' => 274,
                'nom_famille' => '5 mg/ml, solution pour perfusion pour voie intrathécale en ampoule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            274 => 
            array (
                'id_famille' => 275,
                'nom_famille' => 'solution pour perfusion pour voie intrathécale en ampoule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            275 => 
            array (
                'id_famille' => 276,
                'nom_famille' => '05 mg/ml, solution injectable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            276 => 
            array (
                'id_famille' => 277,
                'nom_famille' => 'solution injectable pour perfusion',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            277 => 
            array (
                'id_famille' => 278,
                'nom_famille' => 'pommade nasale',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            278 => 
            array (
                'id_famille' => 279,
                'nom_famille' => 'solution pour instillation nasale',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            279 => 
            array (
                'id_famille' => 280,
                'nom_famille' => 'poudre nasale en récipient unidose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            280 => 
            array (
                'id_famille' => 281,
                'nom_famille' => '05 mg/ml, solution buvable',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            281 => 
            array (
                'id_famille' => 282,
                'nom_famille' => 'degré de dilution compris entre 4CH à 30CH et 8DH à 60DH',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            282 => 
            array (
                'id_famille' => 283,
                'nom_famille' => 'poudre et solvant pour suspension intravésicale',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            283 => 
            array (
                'id_famille' => 284,
                'nom_famille' => 'gel rectal en récipient unidose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            284 => 
            array (
                'id_famille' => 285,
                'nom_famille' => 'suspension pour pulvérisation nasale en flacon',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            285 => 
            array (
                'id_famille' => 286,
                'nom_famille' => 'suspension pour inhalation par nébuliseur',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            286 => 
            array (
                'id_famille' => 287,
                'nom_famille' => 'suspension pour inhalation par nébuliseur en récipient unidose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            287 => 
            array (
                'id_famille' => 288,
                'nom_famille' => 'suspension pour pulvérisation nasale en flacon pulvérisateur',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            288 => 
            array (
                'id_famille' => 289,
                'nom_famille' => '02 mg/3 mg, comprimé pelliculé',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            289 => 
            array (
                'id_famille' => 290,
                'nom_famille' => '03 mg/2 mg, comprimé pelliculé',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            290 => 
            array (
                'id_famille' => 291,
                'nom_famille' => '25 ml, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            291 => 
            array (
                'id_famille' => 292,
                'nom_famille' => '375 ml, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            292 => 
            array (
                'id_famille' => 293,
                'nom_famille' => '50 ml, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            293 => 
            array (
                'id_famille' => 294,
                'nom_famille' => '75 ml, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            294 => 
            array (
                'id_famille' => 295,
                'nom_famille' => '125 ml, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            295 => 
            array (
                'id_famille' => 296,
                'nom_famille' => '5 mg/mL, poudre pour solution à diluer pour perfusion',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            296 => 
            array (
                'id_famille' => 297,
                'nom_famille' => 'solution concentrée à diluer pour solution pour perfusion',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            297 => 
            array (
                'id_famille' => 298,
                'nom_famille' => 'solution injectable I.M. en ampoule',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            298 => 
            array (
                'id_famille' => 299,
                'nom_famille' => 'degré de dilution compris entre 12CH et 30CH ou entre 24DH et 60DH',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            299 => 
            array (
                'id_famille' => 300,
                'nom_famille' => 'pastille',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            300 => 
            array (
                'id_famille' => 301,
                'nom_famille' => 'poudre et solvant pour solution injectable/perfusion',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            301 => 
            array (
                'id_famille' => 302,
                'nom_famille' => 'comprimé effervescent édulcoré à l\'aspartam et à l\'acésulfame de potassium',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            302 => 
            array (
                'id_famille' => 303,
                'nom_famille' => 'solution vaginale en récipient unidose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            303 => 
            array (
                'id_famille' => 304,
                'nom_famille' => 'solution pour gargarisme ou solution pour bain de bouche en récipient unidose',
                'created_at' => '2023-12-17 07:49:00',
                'updated_at' => '2023-12-17 07:49:00',
            ),
            304 => 
            array (
                'id_famille' => 305,
                'nom_famille' => 'solution vaginale',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            305 => 
            array (
                'id_famille' => 306,
                'nom_famille' => 'ovule',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            306 => 
            array (
                'id_famille' => 307,
                'nom_famille' => 'compresse imprégnée',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            307 => 
            array (
                'id_famille' => 308,
                'nom_famille' => 'solution pour irrigation oculaire en recipient unidose',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            308 => 
            array (
                'id_famille' => 309,
                'nom_famille' => 'solution pour application cutanée en récipient unidose',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            309 => 
            array (
                'id_famille' => 310,
            'nom_famille' => 'solution pour application cutanée (moussante)',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            310 => 
            array (
                'id_famille' => 311,
                'nom_famille' => 'pansement médicamenteux',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            311 => 
            array (
                'id_famille' => 312,
                'nom_famille' => '5 % , collyre en solution en récipient unidose',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            312 => 
            array (
                'id_famille' => 313,
                'nom_famille' => '05 %, solution buvable en gouttes',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            313 => 
            array (
                'id_famille' => 314,
                'nom_famille' => '05 %, crème',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            314 => 
            array (
                'id_famille' => 315,
                'nom_famille' => '05 POUR CENT, solution buvable en gouttes',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            315 => 
            array (
                'id_famille' => 316,
                'nom_famille' => '250 mg, emplâtre médicamenteux',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            316 => 
            array (
                'id_famille' => 317,
                'nom_famille' => '50 mg, comprimé effervescent',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            317 => 
            array (
                'id_famille' => 318,
                'nom_famille' => 'solution rectale en poche',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            318 => 
            array (
                'id_famille' => 319,
                'nom_famille' => '1 %, pommade',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            319 => 
            array (
                'id_famille' => 320,
                'nom_famille' => '1 %, émulsion pour application cutanée',
                'created_at' => '2023-12-17 07:49:01',
                'updated_at' => '2023-12-17 07:49:01',
            ),
            320 => 
            array (
                'id_famille' => 321,
            'nom_famille' => 'composant, adsorbé)',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        321 => 
        array (
            'id_famille' => 322,
            'nom_famille' => '5 M.U.I./250 mg, comprimé pelliculé',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        322 => 
        array (
            'id_famille' => 323,
            'nom_famille' => 'comprimé sécable à libération prolongée',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        323 => 
        array (
            'id_famille' => 324,
            'nom_famille' => '4 % B.BRAUN, solution pour perfusion',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        324 => 
        array (
            'id_famille' => 325,
            'nom_famille' => '4 %, RENAUDIN, solution injectable',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        325 => 
        array (
            'id_famille' => 326,
            'nom_famille' => '2 % B. BRAUN, solution pour perfusion',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        326 => 
        array (
            'id_famille' => 327,
            'nom_famille' => '2 % RENAUDIN, solution injectable',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        327 => 
        array (
            'id_famille' => 328,
            'nom_famille' => '4 % BIOSEDRA, solution pour perfusion',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        328 => 
        array (
            'id_famille' => 329,
            'nom_famille' => '4 POUR CENT, solution pour perfusion',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        329 => 
        array (
            'id_famille' => 330,
            'nom_famille' => '4 %, solution injectable pour perfusion en poche',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        330 => 
        array (
            'id_famille' => 331,
            'nom_famille' => '4 %, solution pour perfusion en flacon',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        331 => 
        array (
            'id_famille' => 332,
        'nom_famille' => '4 POUR CENT (0,14 g/10 ml), solution pour perfusion en ampoule',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        332 => 
        array (
            'id_famille' => 333,
            'nom_famille' => '4 %, solution pour perfusion',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        333 => 
        array (
            'id_famille' => 334,
        'nom_famille' => '4 % (84 mg/mL), solution injectable en ampoule',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        334 => 
        array (
            'id_famille' => 335,
            'nom_famille' => '5 % GLUCOSE, 1,25 mmol/L calcium, solution pour dialyse péritonéale',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        335 => 
        array (
            'id_famille' => 336,
            'nom_famille' => '5 % GLUCOSE, 1,75 mmol/l calcium, solution pour dialyse péritonéale',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        336 => 
        array (
            'id_famille' => 337,
            'nom_famille' => '3 % GLUCOSE, 1,25 mmol/L calcium, solution pour dialyse péritonéale',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        337 => 
        array (
            'id_famille' => 338,
            'nom_famille' => '3 % GLUCOSE, 1,75 mmol/l calcium, solution pour dialyse péritonéale',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        338 => 
        array (
            'id_famille' => 339,
            'nom_famille' => '25 % GLUCOSE, 1,75 mmol/l calcium, solution pour dialyse péritonéale',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        339 => 
        array (
            'id_famille' => 340,
            'nom_famille' => 'suspension pour usage dentaire',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        340 => 
        array (
            'id_famille' => 341,
            'nom_famille' => '1 mg/mL, collyre en solution',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        341 => 
        array (
            'id_famille' => 342,
            'nom_famille' => '3 mg/mL + 5 mg/mL, collyre en solution',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        342 => 
        array (
            'id_famille' => 343,
            'nom_famille' => '3 mg/5 mg par mL, collyre en solution',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        343 => 
        array (
            'id_famille' => 344,
            'nom_famille' => '5 mL, solution injectable en seringue préremplie',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        344 => 
        array (
            'id_famille' => 345,
            'nom_famille' => '75 mL, solution injectable en seringue préremplie',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        345 => 
        array (
            'id_famille' => 346,
            'nom_famille' => '4 mL, solution injectable en seringue préremplie',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        346 => 
        array (
            'id_famille' => 347,
            'nom_famille' => '6 mL, solution injectable en seringue préremplie',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        347 => 
        array (
            'id_famille' => 348,
            'nom_famille' => '8 mL, solution injectable en seringue préremplie',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        348 => 
        array (
            'id_famille' => 349,
            'nom_famille' => '55 mg/5 ml SANS SUCRE, sirop édulcoré à la saccharine sodique et au maltitol liquide',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        349 => 
        array (
            'id_famille' => 350,
            'nom_famille' => '1 mg/0,4 ml, collyre en récipient unidose',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        350 => 
        array (
            'id_famille' => 351,
            'nom_famille' => '25 POUR MILLE, collyre',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        351 => 
        array (
            'id_famille' => 352,
            'nom_famille' => '5 %, solution pour application cutanée',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        352 => 
        array (
            'id_famille' => 353,
            'nom_famille' => '5 %, solution injectable I.M.',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        353 => 
        array (
            'id_famille' => 354,
            'nom_famille' => 'pâte pour application cutanée',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        354 => 
        array (
            'id_famille' => 355,
            'nom_famille' => 'solution pour hémodialyse/hémofiltration',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        355 => 
        array (
            'id_famille' => 356,
            'nom_famille' => '75 mg, comprimé pelliculé sécable',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        356 => 
        array (
            'id_famille' => 357,
            'nom_famille' => '5 mg, comprimé sécable',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        357 => 
        array (
            'id_famille' => 358,
            'nom_famille' => '75 mg, comprimé',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        358 => 
        array (
            'id_famille' => 359,
            'nom_famille' => '5 mg/6,25 mg, comprimé pelliculé',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        359 => 
        array (
            'id_famille' => 360,
            'nom_famille' => 'poudre pour solution à diluer pour solution injectable/pour perfusion',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        360 => 
        array (
            'id_famille' => 361,
            'nom_famille' => 'poudre pour solution injectable / pour perfusion',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        361 => 
        array (
            'id_famille' => 362,
            'nom_famille' => '5 POUR CENT, solution injectable',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        362 => 
        array (
            'id_famille' => 363,
            'nom_famille' => '5 microgrammes, poudre pour solution à diluer et solution pour solution pour perfusion',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        363 => 
        array (
            'id_famille' => 364,
            'nom_famille' => 'gel vaginal',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        364 => 
        array (
            'id_famille' => 365,
            'nom_famille' => 'mélange de plantes pour tisane en sachet-dose',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        365 => 
        array (
            'id_famille' => 366,
        'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin diphtérique, tétanique, coquelucheux (acellulaire multicomposé) et poliomyélitique (inactivé), (adsorbé, à teneur réduite en antigènes)',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        366 => 
        array (
            'id_famille' => 367,
            'nom_famille' => 'solution pour lavage ophtalmique en récipient unidose',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        367 => 
        array (
            'id_famille' => 368,
            'nom_famille' => 'solution pour lavage ophtalmique en récipient-unidose',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        368 => 
        array (
            'id_famille' => 369,
            'nom_famille' => '5 mg, poudre pour solution injectable',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        369 => 
        array (
            'id_famille' => 370,
            'nom_famille' => 'g gélule',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        370 => 
        array (
            'id_famille' => 371,
            'nom_famille' => 'film orodispersible',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        371 => 
        array (
            'id_famille' => 372,
            'nom_famille' => '1 à 70 × 1 000 000 cellules/ml / 1,1 à 70 × 1 000 000 cellules/ml, dispersion pour perfusion',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        372 => 
        array (
            'id_famille' => 373,
            'nom_famille' => '5 mg/1 ml, solution injectable en ampoule',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        373 => 
        array (
            'id_famille' => 374,
            'nom_famille' => 'solution pour inhalation par nébuliseur en récipient unidose',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        374 => 
        array (
            'id_famille' => 375,
        'nom_famille' => '2 % (2 mg/ml), collyre en solution',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        375 => 
        array (
            'id_famille' => 376,
            'nom_famille' => 'comprimé quadrisécable',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        376 => 
        array (
            'id_famille' => 377,
            'nom_famille' => '025 %, solution injectable',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        377 => 
        array (
            'id_famille' => 378,
            'nom_famille' => 'solution buvable en sachet édulcorée à la saccharine sodique et au maltitol liquide',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        378 => 
        array (
            'id_famille' => 379,
            'nom_famille' => 'solution buvable en sachet-dose édulcorée à la saccharine sodique, au sorbitol et au maltitol liquide',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        379 => 
        array (
            'id_famille' => 380,
            'nom_famille' => 'solution buvable édulcorée à la saccharine sodique et au maltitol liquide',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        380 => 
        array (
            'id_famille' => 381,
            'nom_famille' => 'solution buvable édulcorée à la saccharine sodique',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        381 => 
        array (
            'id_famille' => 382,
            'nom_famille' => '1 mg, comprimé à sucer',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        382 => 
        array (
            'id_famille' => 383,
            'nom_famille' => 'solution buccale',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        383 => 
        array (
            'id_famille' => 384,
            'nom_famille' => '5 mg, solution buccale',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        384 => 
        array (
            'id_famille' => 385,
            'nom_famille' => '5 mg/2 ml, suspension pour inhalation par nébuliseur en récipient unidose',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        385 => 
        array (
            'id_famille' => 386,
            'nom_famille' => 'suspension pour pulvérisation nasale',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        386 => 
        array (
            'id_famille' => 387,
            'nom_famille' => '50 mg/2 ml, suspension pour inhalation par nébuliseur en récipient unidose',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        387 => 
        array (
            'id_famille' => 388,
            'nom_famille' => '5 microgrammes/dose, poudre pour inhalation en récipient unidose',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        388 => 
        array (
            'id_famille' => 389,
            'nom_famille' => '5 mg/ml, solution injectable en flacon',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        389 => 
        array (
            'id_famille' => 390,
        'nom_famille' => 'solution injectable (voie intrarachidienne)',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        390 => 
        array (
            'id_famille' => 391,
            'nom_famille' => 'solution injectable pour voie intra rachidienne en ampoule',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        391 => 
        array (
            'id_famille' => 392,
            'nom_famille' => '4 mg, comprimé sublingual',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        392 => 
        array (
            'id_famille' => 393,
            'nom_famille' => '5 mg, comprimé sublingual sécable',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        393 => 
        array (
            'id_famille' => 394,
            'nom_famille' => 'comprimé sublingual sécable',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        394 => 
        array (
            'id_famille' => 395,
            'nom_famille' => 'solution injectable à libération prolongée',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        395 => 
        array (
            'id_famille' => 396,
            'nom_famille' => 'poudre et solvant pour suspension injectable à libération prolongée en stylo prérempli',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        396 => 
        array (
            'id_famille' => 397,
            'nom_famille' => 'solution injectable, stylo prérempli',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        397 => 
        array (
            'id_famille' => 398,
            'nom_famille' => 'solution à diluer pour solution pour perfusion',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        398 => 
        array (
            'id_famille' => 399,
            'nom_famille' => 'solution à diluer et solvant pour solution pour perfusion',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        399 => 
        array (
            'id_famille' => 400,
            'nom_famille' => 'granulés effervescents pour solution buvable en sachet',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        400 => 
        array (
            'id_famille' => 401,
            'nom_famille' => 'comprimé à sucer ou à croquer',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        401 => 
        array (
            'id_famille' => 402,
            'nom_famille' => 'degré de dilution compris entre 6CH et 30CH ou entre 12DH et 60DH',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        402 => 
        array (
            'id_famille' => 403,
        'nom_famille' => ' comprimé et solution(s) et granules et poudre et pommade',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        403 => 
        array (
            'id_famille' => 404,
            'nom_famille' => '54 g, granulé pour suspension buvable en sachet-dose',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        404 => 
        array (
            'id_famille' => 405,
            'nom_famille' => '500 mg/800 UI, poudre pour solution buvable en sachet',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        405 => 
        array (
            'id_famille' => 406,
            'nom_famille' => 'solution buvable en ampoule édulcorée au cyclamate de sodium et à la saccharine sodique',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        406 => 
        array (
            'id_famille' => 407,
            'nom_famille' => 'comprimé à croquer, à sucer ou dispersible',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        407 => 
        array (
            'id_famille' => 408,
            'nom_famille' => 'comprimé à sucer',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        408 => 
        array (
            'id_famille' => 409,
            'nom_famille' => 'comprimé à croquer ou à sucer',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        409 => 
        array (
            'id_famille' => 410,
        'nom_famille' => '2 ml, solution injectable en seringue préremplie (sous cutanée)',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        410 => 
        array (
            'id_famille' => 411,
        'nom_famille' => '3 ml, solution injectable en seringue préremplie (sous cutanée)',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        411 => 
        array (
            'id_famille' => 412,
            'nom_famille' => '8 ml, solution injectable',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        412 => 
        array (
            'id_famille' => 413,
            'nom_famille' => '5 mg/g, pommade',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        413 => 
        array (
            'id_famille' => 414,
            'nom_famille' => 'solution injectable I.V.',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        414 => 
        array (
            'id_famille' => 415,
            'nom_famille' => 'comprimé enrobé à croquer',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        415 => 
        array (
            'id_famille' => 416,
            'nom_famille' => 'émulsion pour inhalation par fumigation',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        416 => 
        array (
            'id_famille' => 417,
            'nom_famille' => 'solution buvable en récipient unidose',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        417 => 
        array (
            'id_famille' => 418,
            'nom_famille' => 'bâton pour application locale',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        418 => 
        array (
            'id_famille' => 419,
        'nom_famille' => 'solution à diluer pour perfusion (IV)',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        419 => 
        array (
            'id_famille' => 420,
            'nom_famille' => '50-3700 MBq, gélule',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        420 => 
        array (
            'id_famille' => 421,
            'nom_famille' => 'comprimé pelliculé sécable à libération prolongée',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        421 => 
        array (
            'id_famille' => 422,
            'nom_famille' => 'solution buvable en flacon édulcorée à la saccharine sodique',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        422 => 
        array (
            'id_famille' => 423,
            'nom_famille' => 'solution buvable en sachet édulcorée à la saccharine sodique, au sorbitol et au maltitol liquide',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        423 => 
        array (
            'id_famille' => 424,
            'nom_famille' => 'solution buvable édulcorée au maltitol liquide et au sorbitol',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        424 => 
        array (
            'id_famille' => 425,
            'nom_famille' => 'sirop édulcoré à la saccharine sodique et au maltitol liquide',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        425 => 
        array (
            'id_famille' => 426,
            'nom_famille' => 'sirop édulcoré à la saccharine sodique',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        426 => 
        array (
            'id_famille' => 427,
            'nom_famille' => 'trousse pour préparation radiopharmaceutique',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        427 => 
        array (
            'id_famille' => 428,
            'nom_famille' => 'gélule à libération modifiée',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        428 => 
        array (
            'id_famille' => 429,
            'nom_famille' => 'poudre et solvant pour solution à diluer pour perfusion',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        429 => 
        array (
            'id_famille' => 430,
            'nom_famille' => 'collyre à libération prolongée',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        430 => 
        array (
            'id_famille' => 431,
            'nom_famille' => 'collyre à libération prolongée en récipient unidose',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        431 => 
        array (
            'id_famille' => 432,
            'nom_famille' => '5 mg/5 mg, comprimé pelliculé',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        432 => 
        array (
            'id_famille' => 433,
            'nom_famille' => '5 mg/7,5 mg, comprimé pelliculé',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        433 => 
        array (
            'id_famille' => 434,
            'nom_famille' => '25 mg/7,5 mg, comprimé pelliculé',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        434 => 
        array (
            'id_famille' => 435,
            'nom_famille' => '25mg/5mg, comprimé pelliculé',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        435 => 
        array (
            'id_famille' => 436,
            'nom_famille' => '25 mg, comprimé pelliculé sécable',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        436 => 
        array (
            'id_famille' => 437,
            'nom_famille' => '2 x 1 000 000 - 1,0 x 100 000 000 cellules, dispersion pour perfusion',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        437 => 
        array (
            'id_famille' => 438,
            'nom_famille' => 'solution buvable en sachet',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        438 => 
        array (
            'id_famille' => 439,
            'nom_famille' => '1 POUR CENT, collyre',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        439 => 
        array (
            'id_famille' => 440,
            'nom_famille' => '15 mg, comprimé sécable',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        440 => 
        array (
            'id_famille' => 441,
            'nom_famille' => '15 mg/ml, solution injectable',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        441 => 
        array (
            'id_famille' => 442,
            'nom_famille' => 'lyophilisat et solution pour usage parentéral',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        442 => 
        array (
            'id_famille' => 443,
            'nom_famille' => 'poudre et solvant pour solution pour inhalation',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        443 => 
        array (
            'id_famille' => 444,
            'nom_famille' => '4 %, collyre en solution',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        444 => 
        array (
            'id_famille' => 445,
            'nom_famille' => 'poudre orale en sachet',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        445 => 
        array (
            'id_famille' => 446,
        'nom_famille' => 'poudre pour solution injectable (IM - IV)',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        446 => 
        array (
            'id_famille' => 447,
            'nom_famille' => 'poudre pour usage parentéral',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        447 => 
        array (
            'id_famille' => 448,
        'nom_famille' => 'poudre et solution pour usage parentéral (IV)',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        448 => 
        array (
            'id_famille' => 449,
        'nom_famille' => 'poudre pour solution injectable (IM-IV)',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        449 => 
        array (
            'id_famille' => 450,
        'nom_famille' => 'poudre pour solution injectable/pour perfusion (IM/IV)',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        450 => 
        array (
            'id_famille' => 451,
        'nom_famille' => 'poudre pour solution injectable/pour perfusion (IV)',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        451 => 
        array (
            'id_famille' => 452,
        'nom_famille' => 'poudre pour solution injectable (IM/IV)',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        452 => 
        array (
            'id_famille' => 453,
        'nom_famille' => '5 g, poudre pour solution injectable (IM/IV)',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        453 => 
        array (
            'id_famille' => 454,
            'nom_famille' => 'poudre pour suspension buvable en flacon',
            'created_at' => '2023-12-17 07:49:01',
            'updated_at' => '2023-12-17 07:49:01',
        ),
        454 => 
        array (
            'id_famille' => 455,
            'nom_famille' => '5 g, poudre pour solution injectable/pour perfusion',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        455 => 
        array (
            'id_famille' => 456,
        'nom_famille' => '5 g, poudre pour solution injectable (IM-IV)',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        456 => 
        array (
            'id_famille' => 457,
            'nom_famille' => 'granulés pour suspension buvable',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        457 => 
        array (
            'id_famille' => 458,
        'nom_famille' => 'poudre pour solution injectable (IM,IV)',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        458 => 
        array (
            'id_famille' => 459,
        'nom_famille' => '5 g, poudre pour solution injectable (IM, IV)',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        459 => 
        array (
            'id_famille' => 460,
        'nom_famille' => 'poudre pour solution injectable (IM, IV)',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        460 => 
        array (
            'id_famille' => 461,
        'nom_famille' => '5 ml, poudre et solvant pour solution injectable (IM)',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        461 => 
        array (
            'id_famille' => 462,
        'nom_famille' => 'poudre et solvant pour solution injectable (IV)',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        462 => 
        array (
            'id_famille' => 463,
        'nom_famille' => 'poudre et solvant pour solution injectable (IM)',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        463 => 
        array (
            'id_famille' => 464,
            'nom_famille' => 'poudre pour solution injectable IV',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        464 => 
        array (
            'id_famille' => 465,
            'nom_famille' => '5 g, poudre pour solution pour perfusion',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        465 => 
        array (
            'id_famille' => 466,
        'nom_famille' => 'poudre pour solution injectable (IV) et suspension injectable (IM)',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        466 => 
        array (
            'id_famille' => 467,
            'nom_famille' => '70 mg/ml, suspension injectable',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        467 => 
        array (
            'id_famille' => 468,
            'nom_famille' => '4 ml, collyre en récipient unidose',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        468 => 
        array (
            'id_famille' => 469,
            'nom_famille' => 'solution pour conservation dorganes',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        469 => 
        array (
            'id_famille' => 470,
            'nom_famille' => '075 mg, comprimé pelliculé',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        470 => 
        array (
            'id_famille' => 471,
            'nom_famille' => 'trousse radiopharmaceutique',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        471 => 
        array (
            'id_famille' => 472,
            'nom_famille' => 'poudre pour solution injectable ou pour perfusion',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        472 => 
        array (
            'id_famille' => 473,
            'nom_famille' => '1 mg, comprimé dipersible',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        473 => 
        array (
            'id_famille' => 474,
            'nom_famille' => '25 mg, comprimé dispersible',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        474 => 
        array (
            'id_famille' => 475,
            'nom_famille' => '0 mg, comprimé',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        475 => 
        array (
            'id_famille' => 476,
        'nom_famille' => 'suspension injectable en seringue pré-remplie .Vaccin Papillomavirus Humain [Types 16, 18] (Recombinant, avec adjuvant, adsorbé)',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        476 => 
        array (
            'id_famille' => 477,
            'nom_famille' => 'poudre pour solution buvable et solution entérale',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        477 => 
        array (
            'id_famille' => 478,
            'nom_famille' => 'poudre pour solution buvable et solution entérale en sachet',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        478 => 
        array (
            'id_famille' => 479,
            'nom_famille' => '25 mg, poudre et solvant pour solution injectable',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        479 => 
        array (
            'id_famille' => 480,
            'nom_famille' => '5 mg/20 mg SANS SUCRE, comprimé à sucer édulcoré au sorbitol et à la saccharine',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        480 => 
        array (
            'id_famille' => 481,
            'nom_famille' => 'radix, décocté WELEDA, degré de dilution compris entre 2CH et 30CH ou entre 4DH et 60DH RADIX DECOCTE',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        481 => 
        array (
            'id_famille' => 482,
            'nom_famille' => '5 mg et 1 mg, comprimé pelliculé',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        482 => 
        array (
            'id_famille' => 483,
            'nom_famille' => 'collyre en flacon',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        483 => 
        array (
            'id_famille' => 484,
            'nom_famille' => '3 POUR CENT, collyre en solution',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        484 => 
        array (
            'id_famille' => 485,
            'nom_famille' => 'degré de dilution compris entre 3CH et 30CH ou entre 6DH et 60 DH',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        485 => 
        array (
            'id_famille' => 486,
            'nom_famille' => '625 mg/ml, solution pour perfusion',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        486 => 
        array (
            'id_famille' => 487,
            'nom_famille' => '25 mg/ml, solution pour perfusion',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        487 => 
        array (
            'id_famille' => 488,
            'nom_famille' => '5 mg/ml, solution injectable ou solution à diluer pour perfusion',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        488 => 
        array (
            'id_famille' => 489,
            'nom_famille' => 'solution injectable ou solution à diluer pour perfusion',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        489 => 
        array (
            'id_famille' => 490,
            'nom_famille' => 'degré de dilution compris entre 5CH et 30CH ou entre 10DH et 60DH',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        490 => 
        array (
            'id_famille' => 491,
            'nom_famille' => '05 POUR CENT, solution pour application locale',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        491 => 
        array (
            'id_famille' => 492,
            'nom_famille' => '2 %, solution pour application cutanée en récipient unidose',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        492 => 
        array (
            'id_famille' => 493,
            'nom_famille' => '05 %, solution pour application locale en récipient unidose',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        493 => 
        array (
            'id_famille' => 494,
            'nom_famille' => '25 g/0,025 g/4 ml pour 100 ml, solution pour application locale',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        494 => 
        array (
            'id_famille' => 495,
            'nom_famille' => '25 g/ 0,025 g/ 4 ml pour 100 ml, solution pour application locale',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        495 => 
        array (
            'id_famille' => 496,
            'nom_famille' => '5 ml/0,5 g pour 100 ml, solution pour bain de bouche en flacon',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        496 => 
        array (
            'id_famille' => 497,
            'nom_famille' => '100 g/0,250 g pour 100 g de solution, collutoire',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        497 => 
        array (
            'id_famille' => 498,
            'nom_famille' => '8 mg, comprimé',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        498 => 
        array (
            'id_famille' => 499,
            'nom_famille' => '6 mg/0,4 ml, collyre en récipient unidose',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        499 => 
        array (
            'id_famille' => 500,
            'nom_famille' => '5 ml, sirop en récipient unidose',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
    ));
        \DB::table('visite__famille_medicament')->insert(array (
            0 => 
            array (
                'id_famille' => 501,
                'nom_famille' => 'sirop en récipient unidose',
                'created_at' => '2023-12-17 07:49:02',
                'updated_at' => '2023-12-17 07:49:02',
            ),
            1 => 
            array (
                'id_famille' => 502,
                'nom_famille' => '75 ml, sirop en récipient unidose',
                'created_at' => '2023-12-17 07:49:02',
                'updated_at' => '2023-12-17 07:49:02',
            ),
            2 => 
            array (
                'id_famille' => 503,
                'nom_famille' => 'poudre orale',
                'created_at' => '2023-12-17 07:49:02',
                'updated_at' => '2023-12-17 07:49:02',
            ),
            3 => 
            array (
                'id_famille' => 504,
                'nom_famille' => 'solution pour marquage. Référence : DRN 4901',
                'created_at' => '2023-12-17 07:49:02',
                'updated_at' => '2023-12-17 07:49:02',
            ),
            4 => 
            array (
                'id_famille' => 505,
            'nom_famille' => 'solution injectable (I.V.) en ampoule',
                'created_at' => '2023-12-17 07:49:02',
                'updated_at' => '2023-12-17 07:49:02',
            ),
            5 => 
            array (
                'id_famille' => 506,
                'nom_famille' => '3 % ET CHLORURE DE SODIUM 0,9 % KABI, solution pour perfusion',
                'created_at' => '2023-12-17 07:49:02',
                'updated_at' => '2023-12-17 07:49:02',
            ),
            6 => 
            array (
                'id_famille' => 507,
            'nom_famille' => '10 g/ml), solution à diluer pour perfusion',
            'created_at' => '2023-12-17 07:49:02',
            'updated_at' => '2023-12-17 07:49:02',
        ),
        7 => 
        array (
            'id_famille' => 508,
        'nom_famille' => '10 g/ml), solution à diluer perfusion',
        'created_at' => '2023-12-17 07:49:02',
        'updated_at' => '2023-12-17 07:49:02',
    ),
    8 => 
    array (
        'id_famille' => 509,
    'nom_famille' => '20 g/ml) , solution à diluer pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
9 => 
array (
    'id_famille' => 510,
'nom_famille' => '46 % (0,0746 g/ml) , solution à diluer pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
10 => 
array (
    'id_famille' => 511,
    'nom_famille' => '0746 g/ml, solution à diluer pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
11 => 
array (
    'id_famille' => 512,
    'nom_famille' => '10 g/ml, solution à diluer pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
12 => 
array (
    'id_famille' => 513,
    'nom_famille' => '15 g/ml, solution à diluer pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
13 => 
array (
    'id_famille' => 514,
    'nom_famille' => '9 % AGUETTANT, solution pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
14 => 
array (
    'id_famille' => 515,
    'nom_famille' => '9 % B. BRAUN, solution injectable en ampoule',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
15 => 
array (
    'id_famille' => 516,
    'nom_famille' => '9 % B. BRAUN, solution pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
16 => 
array (
    'id_famille' => 517,
    'nom_famille' => '9 % BAXTER, solution pour perfusion en poche',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
17 => 
array (
    'id_famille' => 518,
    'nom_famille' => '9 % BIOLUZ, solution pour perfusion en poche',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
18 => 
array (
    'id_famille' => 519,
    'nom_famille' => '9 % COOPER, solution pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
19 => 
array (
    'id_famille' => 520,
    'nom_famille' => '9 % LAVOISIER, solution pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
20 => 
array (
    'id_famille' => 521,
    'nom_famille' => '9 % VIAFLO, solution pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
21 => 
array (
    'id_famille' => 522,
    'nom_famille' => 'solution à diluer injectable',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
22 => 
array (
    'id_famille' => 523,
    'nom_famille' => '9 % , solution pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
23 => 
array (
    'id_famille' => 524,
    'nom_famille' => '9 %, solution injectable',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
24 => 
array (
    'id_famille' => 525,
'nom_famille' => '0585 g/ml (5,85 %), solution à diluer pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
25 => 
array (
    'id_famille' => 526,
'nom_famille' => '10 g/ml (10 %), solution à diluer pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
26 => 
array (
    'id_famille' => 527,
'nom_famille' => '20 g/ml (20 %), solution à diluer pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
27 => 
array (
    'id_famille' => 528,
    'nom_famille' => 'solution injectable. Référence : TL-201-S-1',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
28 => 
array (
    'id_famille' => 529,
    'nom_famille' => 'trousse pour la préparation de la solution injectable de mébrofénine-technétium [99m Tc]',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
29 => 
array (
    'id_famille' => 530,
    'nom_famille' => 'édulcoré au xylitol',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
30 => 
array (
    'id_famille' => 531,
    'nom_famille' => 'précurseur radiopharmaceutique, solution',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
31 => 
array (
    'id_famille' => 532,
    'nom_famille' => 'pommade en sachet-dose',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
32 => 
array (
    'id_famille' => 533,
    'nom_famille' => '5 %, shampooing',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
33 => 
array (
    'id_famille' => 534,
    'nom_famille' => '5%, shampooing',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
34 => 
array (
    'id_famille' => 535,
    'nom_famille' => '1 %, solution pour lavage ophtalmique en récipient unidose',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
35 => 
array (
    'id_famille' => 536,
'nom_famille' => 'solution pour perfusion (IV)',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
36 => 
array (
    'id_famille' => 537,
    'nom_famille' => 'granulés et solvant pour suspension buvable',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
37 => 
array (
    'id_famille' => 538,
    'nom_famille' => 'suspension pour instillation auriculaire',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
38 => 
array (
    'id_famille' => 539,
    'nom_famille' => '3 %, pommade ophtalmique',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
39 => 
array (
    'id_famille' => 540,
    'nom_famille' => 'solution pour perfusion en poche',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
40 => 
array (
    'id_famille' => 541,
    'nom_famille' => 'suspension pour injection locale',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
41 => 
array (
    'id_famille' => 542,
    'nom_famille' => '37-370 MBq/mL, suspension pour injection intra-articulaire',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
42 => 
array (
    'id_famille' => 543,
    'nom_famille' => 'comprimé effervescent édulcoré à la saccharine sodique',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
43 => 
array (
    'id_famille' => 544,
    'nom_famille' => 'solution injectable et buvable',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
44 => 
array (
    'id_famille' => 545,
    'nom_famille' => 'granulé en sachet-dose',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
45 => 
array (
    'id_famille' => 546,
    'nom_famille' => 'comprimé pelliculé à libération modifiée',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
46 => 
array (
    'id_famille' => 547,
    'nom_famille' => 'comprimé pellicullé sécable',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
47 => 
array (
    'id_famille' => 548,
    'nom_famille' => '5 mg/ml, émulsion injectable',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
48 => 
array (
    'id_famille' => 549,
    'nom_famille' => '5 mg/2,5 mg, comprimé pelliculé',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
49 => 
array (
    'id_famille' => 550,
    'nom_famille' => 'solution pour perfusion en poche bicompartiment',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
50 => 
array (
    'id_famille' => 551,
    'nom_famille' => 'émulsion pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
51 => 
array (
    'id_famille' => 552,
    'nom_famille' => 'shampooing',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
52 => 
array (
    'id_famille' => 553,
    'nom_famille' => '5 mg/g, gel',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
53 => 
array (
    'id_famille' => 554,
    'nom_famille' => '5 g/100 mL, poudre et solvant pour solution injectable',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
54 => 
array (
    'id_famille' => 555,
    'nom_famille' => 'degré de dilution compris entre 2CH et 30CH ou entre 4DH et 60D',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
55 => 
array (
    'id_famille' => 556,
    'nom_famille' => 'granules en récipient unidose',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
56 => 
array (
    'id_famille' => 557,
    'nom_famille' => 'digesté WELEDA, degré de dilution compris entre 2CH et 30CH ou entre 4DH et 60DH',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
57 => 
array (
    'id_famille' => 558,
    'nom_famille' => 'poudre et solvant pour inhalation par nébuliseur',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
58 => 
array (
    'id_famille' => 559,
    'nom_famille' => 'solution pour pulvérisation buccale en flacon pressurisé',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
59 => 
array (
    'id_famille' => 560,
    'nom_famille' => '11 POUR CENT, solution pour pulvérisation buccale en flacon pressurisé',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
60 => 
array (
    'id_famille' => 561,
    'nom_famille' => 'flacon',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
61 => 
array (
    'id_famille' => 562,
    'nom_famille' => 'mousse rectale',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
62 => 
array (
    'id_famille' => 563,
    'nom_famille' => 'poudre pour solution buvable',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
63 => 
array (
    'id_famille' => 564,
    'nom_famille' => 'gélule gastro-résistante',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
64 => 
array (
    'id_famille' => 565,
    'nom_famille' => 'capsule vaginale',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
65 => 
array (
    'id_famille' => 566,
    'nom_famille' => '5 mg, solution à diluer pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
66 => 
array (
    'id_famille' => 567,
    'nom_famille' => '5 ml, suspension buvable',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
67 => 
array (
    'id_famille' => 568,
    'nom_famille' => '5 mg/0,4 mg, gélule',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
68 => 
array (
    'id_famille' => 569,
'nom_famille' => 'dispersion à diluer pour dispersion injectable.Vaccin à ARNm (à nucléoside modifié) contre la COVID-19',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
69 => 
array (
    'id_famille' => 570,
'nom_famille' => 'dispersion injectable.Vaccin à ARNm (à nucléoside modifié) contre la COVID-19',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
70 => 
array (
    'id_famille' => 571,
'nom_famille' => 'dispersion à diluer pour dispersion injectable Vaccin à ARNm (à nucléoside modifié) contre la COVID-19',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
71 => 
array (
    'id_famille' => 572,
'nom_famille' => 'dispersion injectable, Vaccin à ARNm (à nucléoside modifié) contre la COVID-19',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
72 => 
array (
    'id_famille' => 573,
'nom_famille' => 'dispersion à diluer pour dispersion injectable, Vaccin à ARNm (à nucléoside modifié) contre la COVID-19',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
73 => 
array (
    'id_famille' => 574,
'nom_famille' => 'dispersion injectable - Vaccin à ARNm (à nucléoside modifié) contre la COVID-19',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
74 => 
array (
    'id_famille' => 575,
'nom_famille' => 'dispersion à diluer pour dispersion injectable - Vaccin à ARNm (à nucléoside modifié) contre la COVID-19',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
75 => 
array (
    'id_famille' => 576,
    'nom_famille' => '03 mg/3 mg, comprimé pelliculé',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
76 => 
array (
    'id_famille' => 577,
    'nom_famille' => '25 mg/200 mg, comprimé pelliculé',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
77 => 
array (
    'id_famille' => 578,
    'nom_famille' => '5 mg/200 mg, comprimé pelliculé',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
78 => 
array (
    'id_famille' => 579,
    'nom_famille' => '75 mg/200 mg, comprimé pelliculé',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
79 => 
array (
    'id_famille' => 580,
'nom_famille' => 'solution injectable en ampoule (IV)',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
80 => 
array (
    'id_famille' => 581,
    'nom_famille' => 'solution injectable IV',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
81 => 
array (
    'id_famille' => 582,
    'nom_famille' => '5 %, crème',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
82 => 
array (
    'id_famille' => 583,
    'nom_famille' => 'granulés gastro-résistants',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
83 => 
array (
    'id_famille' => 584,
    'nom_famille' => '5 ml, suspension pour instillation endotrachéobronchique',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
84 => 
array (
    'id_famille' => 585,
    'nom_famille' => 'suspension pour instillation endotrachéobronchique',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
85 => 
array (
    'id_famille' => 586,
    'nom_famille' => '5 POUR CENT, gel pour application locale',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
86 => 
array (
    'id_famille' => 587,
    'nom_famille' => 'poudre pour application cutanée',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
87 => 
array (
    'id_famille' => 588,
    'nom_famille' => 'solution injectable par voie sous-cutanée',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
88 => 
array (
    'id_famille' => 589,
    'nom_famille' => 'solution à diluer pour solution injectable/pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
89 => 
array (
    'id_famille' => 590,
    'nom_famille' => '025 mg, comprimé sécable',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
90 => 
array (
    'id_famille' => 591,
    'nom_famille' => '8 mg/ml, collyre en solution',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
91 => 
array (
    'id_famille' => 592,
    'nom_famille' => 'solution injectable ou pour perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
92 => 
array (
    'id_famille' => 593,
    'nom_famille' => 'solution moussante',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
93 => 
array (
    'id_famille' => 594,
    'nom_famille' => 'poudre pour solution injectable ou perfusion',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
94 => 
array (
    'id_famille' => 595,
    'nom_famille' => 'solution pour application locale en flacon',
    'created_at' => '2023-12-17 07:49:02',
    'updated_at' => '2023-12-17 07:49:02',
),
95 => 
array (
    'id_famille' => 596,
    'nom_famille' => 'lyophilisat pour préparation injectable',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
96 => 
array (
    'id_famille' => 597,
    'nom_famille' => '8 mg/ml, granulés pour suspension buvable en flacon',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
97 => 
array (
    'id_famille' => 598,
    'nom_famille' => 'granulés pour suspension buvable en flacon',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
98 => 
array (
    'id_famille' => 599,
    'nom_famille' => 'granulés pour suspension buvable en sachet',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
99 => 
array (
    'id_famille' => 600,
'nom_famille' => '1 mg, poudre et solvant pour solution injectable (S.C.)',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
100 => 
array (
    'id_famille' => 601,
'nom_famille' => '25 mg, poudre et solvant pour suspension injectable (IM ou SC) forme à libération prolongée sur 3 mois',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
101 => 
array (
    'id_famille' => 602,
'nom_famille' => 'poudre et solvant pour suspension injectable (I.M.) forme à libération prolongée sur 28 jours',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
102 => 
array (
    'id_famille' => 603,
    'nom_famille' => '5 mg, poudre et solvant pour suspension injectable à libération prolongée',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
103 => 
array (
    'id_famille' => 604,
    'nom_famille' => '5 mg, gel en sachet-dose',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
104 => 
array (
    'id_famille' => 605,
    'nom_famille' => 'gel en sachet-dose',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
105 => 
array (
    'id_famille' => 606,
    'nom_famille' => 'pommade rectale',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
106 => 
array (
    'id_famille' => 607,
    'nom_famille' => '5 ml, solution buvable',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
107 => 
array (
    'id_famille' => 608,
'nom_famille' => 'poudre et solvant pour suspension injectable en seringue préremplie. Vaccin dengue quadrivalent (vivant, atténué)',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
108 => 
array (
    'id_famille' => 609,
    'nom_famille' => 'solution gingivale',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
109 => 
array (
    'id_famille' => 610,
    'nom_famille' => 'préparation injectable pour voie I.V.',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
110 => 
array (
    'id_famille' => 611,
    'nom_famille' => '64 mg/ml, sirop',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
111 => 
array (
    'id_famille' => 612,
'nom_famille' => 'suspension injectable (intramusculaire profonde)',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
112 => 
array (
    'id_famille' => 613,
    'nom_famille' => 'suspension injectable en flacon',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
113 => 
array (
    'id_famille' => 614,
    'nom_famille' => 'poudre pour application locale',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
114 => 
array (
    'id_famille' => 615,
    'nom_famille' => 'dispositif transdermique',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
115 => 
array (
    'id_famille' => 616,
    'nom_famille' => '2 g/100 g, solution pour application cutanée',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
116 => 
array (
    'id_famille' => 617,
    'nom_famille' => 'bâton pour application cutanée',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
117 => 
array (
    'id_famille' => 618,
    'nom_famille' => '1 %, collyre en solution',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
118 => 
array (
    'id_famille' => 619,
    'nom_famille' => '1 %, solution pour pulvérisations nasales',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
119 => 
array (
    'id_famille' => 620,
    'nom_famille' => 'poudre et solvant pour solution pour pulvérisation nasale',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
120 => 
array (
    'id_famille' => 621,
'nom_famille' => 'solution injectable (IV) en flacon',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
121 => 
array (
    'id_famille' => 622,
    'nom_famille' => '3 %, sirop',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
122 => 
array (
    'id_famille' => 623,
    'nom_famille' => '5 mg/mL SANS SUCRE, solution buvable édulcorée au maltitol liquide et à la saccharine sodique',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
123 => 
array (
    'id_famille' => 624,
    'nom_famille' => '5 mg/ml, sirop',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
124 => 
array (
    'id_famille' => 625,
    'nom_famille' => 'solution pour dialyse péritonéale',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
125 => 
array (
    'id_famille' => 626,
    'nom_famille' => 'comprimé sécable à libération modifiée',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
126 => 
array (
    'id_famille' => 627,
    'nom_famille' => 'poudre et solvant pour préparation injectable',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
127 => 
array (
    'id_famille' => 628,
    'nom_famille' => '36 %, solution pour dialyse péritonéale en poche',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
128 => 
array (
    'id_famille' => 629,
    'nom_famille' => '27 %, solution pour dialyse péritonéale en poche',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
129 => 
array (
    'id_famille' => 630,
    'nom_famille' => '86 %, solution pour dialyse péritonéale en poche',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
130 => 
array (
    'id_famille' => 631,
    'nom_famille' => 'lyophilisat oral',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
131 => 
array (
    'id_famille' => 632,
    'nom_famille' => 'gel en flacon pressurisé',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
132 => 
array (
    'id_famille' => 633,
    'nom_famille' => '1 ml, solution buvable, en gouttes',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
133 => 
array (
    'id_famille' => 634,
    'nom_famille' => '50 mg/2 ml, solution injectable IV',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
134 => 
array (
    'id_famille' => 635,
    'nom_famille' => 'gélule gastrorésistante',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
135 => 
array (
    'id_famille' => 636,
    'nom_famille' => 'poudre pour suspension buvable en sachet-dose',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
136 => 
array (
    'id_famille' => 637,
    'nom_famille' => 'émulsion injectable en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
137 => 
array (
    'id_famille' => 638,
    'nom_famille' => '05 %, pommade',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
138 => 
array (
    'id_famille' => 639,
    'nom_famille' => 'lotion',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
139 => 
array (
    'id_famille' => 640,
    'nom_famille' => '05 %, lotion',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
140 => 
array (
    'id_famille' => 641,
    'nom_famille' => 'suspension injectable en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
141 => 
array (
    'id_famille' => 642,
    'nom_famille' => '5 mg/ml, solution à diluer pour perfusion',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
142 => 
array (
    'id_famille' => 643,
    'nom_famille' => 'solution pour perfusion en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
143 => 
array (
    'id_famille' => 644,
    'nom_famille' => '5 mg/ml, solution injectable IM',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
144 => 
array (
    'id_famille' => 645,
    'nom_famille' => '5 g/100 ml SANS SUCRE, solution buvable édulcorée au cyclamate de sodium',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
145 => 
array (
    'id_famille' => 646,
    'nom_famille' => 'suppositoire sécable',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
146 => 
array (
    'id_famille' => 647,
    'nom_famille' => '4 POUR CENT, suspension buvable',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
147 => 
array (
    'id_famille' => 648,
    'nom_famille' => 'suspension buvable en sachet édulcorée au sorbitol, au sucralose et à la néohespéridine DC',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
148 => 
array (
    'id_famille' => 649,
    'nom_famille' => 'PSEUDOEPHEDRINE ET DOXYLAMINE, comprimé',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
149 => 
array (
    'id_famille' => 650,
    'nom_famille' => 'comprimé enrobé gastrorésistant',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
150 => 
array (
    'id_famille' => 651,
    'nom_famille' => 'dispositif intra-utérin',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
151 => 
array (
    'id_famille' => 652,
    'nom_famille' => '05 %, solution pour application cutanée en flacon pressurisé',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
152 => 
array (
    'id_famille' => 653,
    'nom_famille' => '05 POUR CENT, solution pour application cutanée en récipient unidose',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
153 => 
array (
    'id_famille' => 654,
    'nom_famille' => 'pastille à sucer',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
154 => 
array (
    'id_famille' => 655,
    'nom_famille' => 'collutoire en flacon pressurisé',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
155 => 
array (
    'id_famille' => 656,
    'nom_famille' => 'pastille édulcorée à l\'isomalt et à l\'acésulfame potassique',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
156 => 
array (
    'id_famille' => 657,
    'nom_famille' => 'pastille édulcorée à l\'isomalt et à l\'acésulfame de potassium',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
157 => 
array (
    'id_famille' => 658,
    'nom_famille' => 'pastille édulcorée à l\'aspartam et à l\'isomalt',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
158 => 
array (
    'id_famille' => 659,
    'nom_famille' => '25 mg/2,5 ml, solution injectable',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
159 => 
array (
    'id_famille' => 660,
'nom_famille' => '25 mg/ml, solution injectable (I.V.)',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
160 => 
array (
    'id_famille' => 661,
'nom_famille' => '5 mg/1 ml, solution injectable (I.V.)',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
161 => 
array (
    'id_famille' => 662,
'nom_famille' => 'solution injectable (I.M.)',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
162 => 
array (
    'id_famille' => 663,
'nom_famille' => '5 mg/1 ml, solution injectable (IV)',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
163 => 
array (
    'id_famille' => 664,
'nom_famille' => 'solution injectable (IM)',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
164 => 
array (
    'id_famille' => 665,
    'nom_famille' => '02 mg, comprimé pelliculé',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
165 => 
array (
    'id_famille' => 666,
    'nom_famille' => '03 mg, comprimé pelliculé',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
166 => 
array (
    'id_famille' => 667,
    'nom_famille' => '2 mg, comprimé pelliculé',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
167 => 
array (
    'id_famille' => 668,
    'nom_famille' => 'générateur de Molybdène [99 Mo]/Technétium [99m Tc]',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
168 => 
array (
    'id_famille' => 669,
'nom_famille' => 'suspension et poudre effervescente pour suspension buvable.Vaccin du choléra (inactivé, buvable)',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
169 => 
array (
    'id_famille' => 670,
    'nom_famille' => '5 %, collyre en solution en récipient unidose',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
170 => 
array (
    'id_famille' => 671,
    'nom_famille' => 'gel intestinal',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
171 => 
array (
    'id_famille' => 672,
    'nom_famille' => '5 microgrammes, poudre pour inhalation',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
172 => 
array (
    'id_famille' => 673,
    'nom_famille' => '5 POUR CENT, solution buvable en flacon',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
173 => 
array (
    'id_famille' => 674,
    'nom_famille' => 'suspension dentaire',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
174 => 
array (
    'id_famille' => 675,
    'nom_famille' => 'pâte dentifrice',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
175 => 
array (
    'id_famille' => 676,
    'nom_famille' => 'crème buccale',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
176 => 
array (
    'id_famille' => 677,
    'nom_famille' => 'solvant pour préparation parentérale',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
177 => 
array (
    'id_famille' => 678,
    'nom_famille' => 'solvant pour préparation parentérale en ampoule',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
178 => 
array (
    'id_famille' => 679,
    'nom_famille' => 'solution pour préparation injectable',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
179 => 
array (
    'id_famille' => 680,
    'nom_famille' => 'solution pour préparations parentérales en récipient unidose',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
180 => 
array (
    'id_famille' => 681,
    'nom_famille' => '8 x 10 000 000 - 7,3 x 10 000 000 cellules/mL, dispersion injectable',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
181 => 
array (
    'id_famille' => 682,
    'nom_famille' => 'ovule à libération prolongée',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
182 => 
array (
    'id_famille' => 683,
    'nom_famille' => 'émulsion fluide pour application cutanée',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
183 => 
array (
    'id_famille' => 684,
    'nom_famille' => '7 MBq/mL, solution injectable',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
184 => 
array (
    'id_famille' => 685,
'nom_famille' => 'poudre et solvant pour solution injectable (voie intracaverneuse) en cartouche bicompartiment.',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
185 => 
array (
    'id_famille' => 686,
'nom_famille' => 'poudre et solvant pour solution injectable (voie intracaverneuse) en cartouche bicompartiment',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
186 => 
array (
    'id_famille' => 687,
    'nom_famille' => 'suppositoire effervescent',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
187 => 
array (
    'id_famille' => 688,
    'nom_famille' => '0 GBq/mL, solution injectable',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
188 => 
array (
    'id_famille' => 689,
    'nom_famille' => 'comprimé buccogingival',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
189 => 
array (
    'id_famille' => 690,
    'nom_famille' => 'granulés en sachet',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
190 => 
array (
    'id_famille' => 691,
    'nom_famille' => 'poudre effervescente pour solution buvable en sachet',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
191 => 
array (
    'id_famille' => 692,
    'nom_famille' => '127 %, crème',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
192 => 
array (
    'id_famille' => 693,
'nom_famille' => 'suspension injectable en seringue préremplie Vaccin grippal quadrivalent (inactivé, à virion fragmenté), 60 microgrammes HA/souche',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
193 => 
array (
    'id_famille' => 694,
    'nom_famille' => '5 mg, poudre et solvant pour solution injectable',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
194 => 
array (
    'id_famille' => 695,
    'nom_famille' => '5 ml/0,5 g pour 100 ml, solution pour bain de bouche',
    'created_at' => '2023-12-17 07:49:03',
    'updated_at' => '2023-12-17 07:49:03',
),
195 => 
array (
    'id_famille' => 696,
    'nom_famille' => '20 %, solution pour bain de bouche',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
196 => 
array (
    'id_famille' => 697,
    'nom_famille' => 'gélule et EMEND 80 mg, gélule',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
197 => 
array (
    'id_famille' => 698,
    'nom_famille' => 'pansement adhésif cutané',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
198 => 
array (
    'id_famille' => 699,
'nom_famille' => '88 mg, poudre et solvant pour suspension injectable (S.C.) à libération prolongée en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
199 => 
array (
    'id_famille' => 700,
'nom_famille' => '25 mg, microsphères et solution pour usage parentéral (S.C. ou I.M.) à libération prolongée en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
200 => 
array (
    'id_famille' => 701,
'nom_famille' => '75 mg, microsphères et solution pour usage parentéral (S.C. ou I.M.) à libération prolongée en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
201 => 
array (
    'id_famille' => 702,
'nom_famille' => '75 mg, poudre et solvant pour suspension injectable (S.C. ou I.M.) à libération prolongée',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
202 => 
array (
    'id_famille' => 703,
'nom_famille' => 'poudre et solvant pour suspension injectable (S.C.) à libération prolongée en seringue-pré-remplie',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
203 => 
array (
    'id_famille' => 704,
    'nom_famille' => 'poudre et solvant pour solution injectable pour usage pédiatrique',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
204 => 
array (
    'id_famille' => 705,
    'nom_famille' => 'solution injectable en cartouche distributrice de dose',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
205 => 
array (
    'id_famille' => 706,
'nom_famille' => '5 microgrammes/0,5 ml, suspension injectable en seringue préremplie. Vaccin de l\'encéphalite à tiques (inactivé, adsorbé)',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
206 => 
array (
    'id_famille' => 707,
'nom_famille' => '5 ml, suspension injectable en seringue préremplie. Vaccin de l\'hépatite B (ADNr), (adsorbé) (VHB)',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
207 => 
array (
    'id_famille' => 708,
'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin de l\'hépatite B (ADNr), (adsorbé) (VHB)',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
208 => 
array (
    'id_famille' => 709,
    'nom_famille' => '2 mL, solution injectable en seringue préremplie',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
209 => 
array (
    'id_famille' => 710,
    'nom_famille' => '5 mg/g, mousse cutanée',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
210 => 
array (
    'id_famille' => 711,
    'nom_famille' => 'microgranules gastro-résistants en gélule',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
211 => 
array (
    'id_famille' => 712,
    'nom_famille' => '75 mg, comprimé à libération prolongée',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
212 => 
array (
    'id_famille' => 713,
    'nom_famille' => '5 mg, granulés enrobés en sachet',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
213 => 
array (
    'id_famille' => 714,
    'nom_famille' => 'granulés enrobés en sachet',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
214 => 
array (
    'id_famille' => 715,
    'nom_famille' => '1 %/2,5 %, gel',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
215 => 
array (
    'id_famille' => 716,
    'nom_famille' => '3 %/2,5 %, gel',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
216 => 
array (
    'id_famille' => 717,
    'nom_famille' => '15 mg/0,3 ml, solution injectable en stylo pré-rempli',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
217 => 
array (
    'id_famille' => 718,
    'nom_famille' => '30 mg/0,3 ml, solution injectable en stylo pré-rempli',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
218 => 
array (
    'id_famille' => 719,
    'nom_famille' => '05 POUR CENT, crème',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
219 => 
array (
    'id_famille' => 720,
    'nom_famille' => '75 mg/ml, solution pour perfusion',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
220 => 
array (
    'id_famille' => 721,
    'nom_famille' => 'décocté WELEDA, degré de dilution compris entre 2CH à 30CH et 4DH à 60DH',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
221 => 
array (
    'id_famille' => 722,
    'nom_famille' => 'gel pour application cutanée',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
222 => 
array (
    'id_famille' => 723,
'nom_famille' => '5 g, lyophilisat pour usage parentéral (IV)',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
223 => 
array (
    'id_famille' => 724,
    'nom_famille' => 'poudre pour solution à diluer pour solution pour perfusion',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
224 => 
array (
    'id_famille' => 725,
'nom_famille' => 'gélule gastro-résistant(e)',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
225 => 
array (
    'id_famille' => 726,
    'nom_famille' => 'gélule gastro-résistant',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
226 => 
array (
    'id_famille' => 727,
    'nom_famille' => 'capsule molle orale ou vaginale',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
227 => 
array (
    'id_famille' => 728,
    'nom_famille' => 'capsule molle ou capsule molle vaginale',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
228 => 
array (
    'id_famille' => 729,
    'nom_famille' => 'système de diffusion vaginal',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
229 => 
array (
    'id_famille' => 730,
    'nom_famille' => 'poudre pour injection',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
230 => 
array (
    'id_famille' => 731,
    'nom_famille' => 'émulsion injectable',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
231 => 
array (
    'id_famille' => 732,
    'nom_famille' => 'lyophilisat pour usage parentéral',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
232 => 
array (
    'id_famille' => 733,
    'nom_famille' => 'pastille édulcorée à la saccharine',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
233 => 
array (
    'id_famille' => 734,
'nom_famille' => 'solution injectable (I.V.)',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
234 => 
array (
    'id_famille' => 735,
    'nom_famille' => 'solution pour pulvérisation nasale en flacon pressurisé',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
235 => 
array (
    'id_famille' => 736,
    'nom_famille' => '035 mg, comprimé enrobé',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
236 => 
array (
    'id_famille' => 737,
    'nom_famille' => 'solution pour colle',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
237 => 
array (
    'id_famille' => 738,
    'nom_famille' => '9 microgrammes/24 heures, dispositif transdermique',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
238 => 
array (
    'id_famille' => 739,
    'nom_famille' => '75 mg/mL, poudre pour solution buvable',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
239 => 
array (
    'id_famille' => 740,
    'nom_famille' => '6 mg/24 h, dispositif transdermique',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
240 => 
array (
    'id_famille' => 741,
    'nom_famille' => '5 mg/24 h, dispositif transdermique',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
241 => 
array (
    'id_famille' => 742,
    'nom_famille' => 'granulés pour solution buvable en sachet',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
242 => 
array (
    'id_famille' => 743,
    'nom_famille' => 'granulés pour usage oral en sachet',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
243 => 
array (
    'id_famille' => 744,
    'nom_famille' => 'poudre pour solution orale en sachet',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
244 => 
array (
    'id_famille' => 745,
    'nom_famille' => '2 MUI, poudre et solvant pour suspension injectable IM',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
245 => 
array (
    'id_famille' => 746,
    'nom_famille' => '4 MUI, poudre et solvant pour suspension injectable IM',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
246 => 
array (
    'id_famille' => 747,
    'nom_famille' => 'poudre et solvant pour suspension injectable IM',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
247 => 
array (
    'id_famille' => 748,
    'nom_famille' => '5 mg/ml, poudre et solvant pour solution à diluer pour perfusion',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
248 => 
array (
    'id_famille' => 749,
    'nom_famille' => 'émulsion fluide pour application locale',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
249 => 
array (
    'id_famille' => 750,
'nom_famille' => 'solution injectable en ampoule (IM)',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
250 => 
array (
    'id_famille' => 751,
'nom_famille' => 'solution injectable en ampoule (IV et péridurale)',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
251 => 
array (
    'id_famille' => 752,
    'nom_famille' => '5 mg NOUVEAU-NE, gélule',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
252 => 
array (
    'id_famille' => 753,
    'nom_famille' => 'dispersion injectable/pour perfusion',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
253 => 
array (
    'id_famille' => 754,
    'nom_famille' => '68 POUR CENT, sirop',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
254 => 
array (
    'id_famille' => 755,
    'nom_famille' => 'emplâtre',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
255 => 
array (
    'id_famille' => 756,
    'nom_famille' => 'emplâtre adhésif',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
256 => 
array (
    'id_famille' => 757,
    'nom_famille' => '5 Ul/ml, poudre et solvant pour solution injectable/perfusion',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
257 => 
array (
    'id_famille' => 758,
    'nom_famille' => '2 %, solution injectable',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
258 => 
array (
    'id_famille' => 759,
    'nom_famille' => '5 %, solution injectable',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
259 => 
array (
    'id_famille' => 760,
    'nom_famille' => 'poudre et solvant pour solution injectable/pour perfusion',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
260 => 
array (
    'id_famille' => 761,
    'nom_famille' => '25 mg, gélule',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
261 => 
array (
    'id_famille' => 762,
    'nom_famille' => '2 mg/mL, solution buvable',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
262 => 
array (
    'id_famille' => 763,
    'nom_famille' => '5 POUR CENT, solution injectable pour perfusion en poche',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
263 => 
array (
    'id_famille' => 764,
    'nom_famille' => 'crème stérile',
    'created_at' => '2023-12-17 07:49:04',
    'updated_at' => '2023-12-17 07:49:04',
),
264 => 
array (
    'id_famille' => 765,
    'nom_famille' => 'suspension nasale en flacon pulvérisateur avec pompe doseuse',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
265 => 
array (
    'id_famille' => 766,
    'nom_famille' => '005 %, pommade',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
266 => 
array (
    'id_famille' => 767,
    'nom_famille' => '5 mg, poudre et solvant pour solution pour perfusion',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
267 => 
array (
    'id_famille' => 768,
    'nom_famille' => 'gélule vaginale',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
268 => 
array (
    'id_famille' => 769,
    'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin grippal inactivé à virion fragmenté',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
269 => 
array (
    'id_famille' => 770,
    'nom_famille' => 'solution à diluer pour injectable/pour perfusion',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
270 => 
array (
    'id_famille' => 771,
    'nom_famille' => '5 mg, comprimé pelliculé à libération prolongée',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
271 => 
array (
    'id_famille' => 772,
    'nom_famille' => '1 mg, comprimé sécable',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
272 => 
array (
    'id_famille' => 773,
    'nom_famille' => 'solution buvable édulcorée à la saccharine sodique, au cyclamate de sodium et au sucralose',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
273 => 
array (
    'id_famille' => 774,
    'nom_famille' => 'granulés pour solution buvable en sachet édulcorés à l\'aspartam et au sorbitol',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
274 => 
array (
    'id_famille' => 775,
    'nom_famille' => 'granulés pour solution buvable',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
275 => 
array (
    'id_famille' => 776,
    'nom_famille' => '1 mg/mL, solution injectable/pour perfusion',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
276 => 
array (
    'id_famille' => 777,
    'nom_famille' => '1 mg/ml, solution injectable',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
277 => 
array (
    'id_famille' => 778,
    'nom_famille' => 'gel dentifrice',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
278 => 
array (
    'id_famille' => 779,
    'nom_famille' => 'gel dentaire',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
279 => 
array (
    'id_famille' => 780,
    'nom_famille' => '5 POUR CENT, collyre en solution en récipient unidose',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
280 => 
array (
    'id_famille' => 781,
    'nom_famille' => '5 GBq/mL SIEMENS HEALTHCARE, solution injectable',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
281 => 
array (
    'id_famille' => 782,
    'nom_famille' => '25 mg/800 U.I./dose, solution buvable',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
282 => 
array (
    'id_famille' => 783,
    'nom_famille' => 'solution buvable édulcorée à la saccharine sodique et au cyclamate de sodium',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
283 => 
array (
    'id_famille' => 784,
    'nom_famille' => '75 mg ORANGE SANS SUCRE, pastille édulcorée au sucralose',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
284 => 
array (
    'id_famille' => 785,
'nom_famille' => 'solution injectable (IM,IV) en ampoule',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
285 => 
array (
    'id_famille' => 786,
    'nom_famille' => 'granulés en sachet-dose',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
286 => 
array (
    'id_famille' => 787,
    'nom_famille' => 'solution pour application cutanée en flacon pressurisé',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
287 => 
array (
    'id_famille' => 788,
    'nom_famille' => 'poudre pour application locale en flacon',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
288 => 
array (
    'id_famille' => 789,
    'nom_famille' => 'crème en tube',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
289 => 
array (
    'id_famille' => 790,
    'nom_famille' => 'granules et  solution en gouttes en gouttes',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
290 => 
array (
    'id_famille' => 791,
    'nom_famille' => 'spray cutané,solution',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
291 => 
array (
    'id_famille' => 792,
'nom_famille' => 'poudre pour solution injectable (IM, IV) ou pour perfusion',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
292 => 
array (
    'id_famille' => 793,
'nom_famille' => 'poudre pour solution injectable (IV) ou pour perfusion',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
293 => 
array (
    'id_famille' => 794,
    'nom_famille' => 'granulé pour solution buvable en sachet',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
294 => 
array (
    'id_famille' => 795,
    'nom_famille' => '5 mL, solution injectable en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
295 => 
array (
    'id_famille' => 796,
    'nom_famille' => '6 mL, solution injectable en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
296 => 
array (
    'id_famille' => 797,
    'nom_famille' => '72 mL, solution injectable en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
297 => 
array (
    'id_famille' => 798,
    'nom_famille' => '2 mL, solution injectable en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
298 => 
array (
    'id_famille' => 799,
    'nom_famille' => '3 mL, solution injectable en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
299 => 
array (
    'id_famille' => 800,
    'nom_famille' => '75 mL, solution injectable en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
300 => 
array (
    'id_famille' => 801,
'nom_famille' => '2 ml, solution injectable (S.C.) en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
301 => 
array (
    'id_famille' => 802,
'nom_famille' => '3 ml, solution injectable (S.C.) en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
302 => 
array (
    'id_famille' => 803,
'nom_famille' => '4 ml, solution injectable (S.C.) en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
303 => 
array (
    'id_famille' => 804,
'nom_famille' => '6 ml, solution injectable (S.C.) en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
304 => 
array (
    'id_famille' => 805,
'nom_famille' => '8 ml, solution injectable (S.C.) en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
305 => 
array (
    'id_famille' => 806,
'nom_famille' => 'solution injectable (S.C.) en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
306 => 
array (
    'id_famille' => 807,
    'nom_famille' => 'gel ophtalmique',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
307 => 
array (
    'id_famille' => 808,
'nom_famille' => 'solution injectable (IM-IV)',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
308 => 
array (
    'id_famille' => 809,
    'nom_famille' => 'poudre et solution pour usage parentéral à diluer',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
309 => 
array (
    'id_famille' => 810,
    'nom_famille' => '5 mg/mL, suspension buvable',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
310 => 
array (
    'id_famille' => 811,
    'nom_famille' => '25 mg/0,5 mL, solution injectable en seringue pré-remplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
311 => 
array (
    'id_famille' => 812,
    'nom_famille' => '0 mmol/mL, solution injectable',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
312 => 
array (
    'id_famille' => 813,
    'nom_famille' => '0 mmol/mL, solution injectable en seringue préremplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
313 => 
array (
    'id_famille' => 814,
    'nom_famille' => '74 à 1,85 GBq, générateur radiopharmaceutique',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
314 => 
array (
    'id_famille' => 815,
'nom_famille' => 'solution injectable (IV)',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
315 => 
array (
    'id_famille' => 816,
    'nom_famille' => '3 mg/ml + 5 mg/ml, collyre en solution en récipient unidose',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
316 => 
array (
    'id_famille' => 817,
'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin Papillomavirus Humain 9-valent (Recombinant, adsorbé)',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
317 => 
array (
    'id_famille' => 818,
'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin Papillomavirus Humain [Types 6, 11, 16, 18] (Recombinant, adsorbé)',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
318 => 
array (
    'id_famille' => 819,
    'nom_famille' => 'solution buvable ou rectale',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
319 => 
array (
    'id_famille' => 820,
    'nom_famille' => 'suspension buvable en sachet-dose édulcorée à la saccharine sodique',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
320 => 
array (
    'id_famille' => 821,
    'nom_famille' => 'comprimé à croquer édulcoré à l\'aspartam et à l\'acésulfame potassique',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
321 => 
array (
    'id_famille' => 822,
    'nom_famille' => 'comprimés pelliculé',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
322 => 
array (
    'id_famille' => 823,
    'nom_famille' => 'gel ophtalmique en récipient unidose',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
323 => 
array (
    'id_famille' => 824,
    'nom_famille' => 'gel rectal',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
324 => 
array (
    'id_famille' => 825,
    'nom_famille' => '3 mg, poudre et solvant pour solution injectable',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
325 => 
array (
    'id_famille' => 826,
    'nom_famille' => '6 mg, poudre et solvant pour solution injectable',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
326 => 
array (
    'id_famille' => 827,
    'nom_famille' => '8 mg, poudre et solvant pour solution injectable',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
327 => 
array (
    'id_famille' => 828,
    'nom_famille' => '2 mg, poudre et solvant pour solution injectable',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
328 => 
array (
    'id_famille' => 829,
    'nom_famille' => '4 mg, poudre et solvant pour solution injectable',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
329 => 
array (
    'id_famille' => 830,
    'nom_famille' => '160 microgrammes/4,5 microgrammes/dose, poudre pour inhalation',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
330 => 
array (
    'id_famille' => 831,
    'nom_famille' => '320 microgrammes/9 microgrammes/dose, poudre pour inhalation',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
331 => 
array (
    'id_famille' => 832,
    'nom_famille' => '80 microgrammes/4,5 microgrammes/dose, poudre pour inhalation',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
332 => 
array (
    'id_famille' => 833,
    'nom_famille' => '7 mg, implant',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
333 => 
array (
    'id_famille' => 834,
    'nom_famille' => 'comprimé à libération modifiée',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
334 => 
array (
    'id_famille' => 835,
    'nom_famille' => 'comprimé sécable à libération mofifiée',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
335 => 
array (
    'id_famille' => 836,
    'nom_famille' => '5 % INCOLORE GIFRER, solution pour application cutanée',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
336 => 
array (
    'id_famille' => 837,
    'nom_famille' => '5 % AVEC COLORANT, solution pour application cutanée',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
337 => 
array (
    'id_famille' => 838,
    'nom_famille' => '5 % AGUETTANT, solution pour perfusion',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
338 => 
array (
    'id_famille' => 839,
    'nom_famille' => '5 % B. BRAUN, solution pour perfusion',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
339 => 
array (
    'id_famille' => 840,
    'nom_famille' => '5 % ET CHLORURE DE SODIUM 0,45 % B.BRAUN, solution pour perfusion',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
340 => 
array (
    'id_famille' => 841,
    'nom_famille' => '5 % VIAFLO, solution pour perfusion',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
341 => 
array (
    'id_famille' => 842,
    'nom_famille' => 'solution pour perfusion en flacon',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
342 => 
array (
    'id_famille' => 843,
    'nom_famille' => 'gel en seringue préremplie',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
343 => 
array (
    'id_famille' => 844,
'nom_famille' => 'poudre et solvant pour solution injectable (I.V.)',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
344 => 
array (
    'id_famille' => 845,
    'nom_famille' => '5 mg/5 ml, solution pour inhalation par nébuliseur en ampoule',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
345 => 
array (
    'id_famille' => 846,
'nom_famille' => '75 ml (77 microgrammes/1,75 ml), poudre et solvant pour solution injectable',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
346 => 
array (
    'id_famille' => 847,
'nom_famille' => '5 ml (22 microgrammes/0,5 ml), solution injectable en stylo prérempli',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
347 => 
array (
    'id_famille' => 848,
'nom_famille' => '75 ml (33 microgrammes/0,75 ml), solution injectable en stylo prérempli',
    'created_at' => '2023-12-17 07:49:05',
    'updated_at' => '2023-12-17 07:49:05',
),
348 => 
array (
    'id_famille' => 849,
'nom_famille' => '5 microgrammes), poudre et solvant pour solution injectable',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
349 => 
array (
'id_famille' => 850,
'nom_famille' => '5 ml (66 microgrammes/1,5 ml), solution injectable en stylo prérempli',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
350 => 
array (
'id_famille' => 851,
'nom_famille' => '75 mg, poudre et solvant pour suspension injectable à libération prolongée en seringues pré-remplies',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
351 => 
array (
'id_famille' => 852,
'nom_famille' => '5 mg, comprimé enrobé',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
352 => 
array (
'id_famille' => 853,
'nom_famille' => '64 mg/2 ml, solution buvable',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
353 => 
array (
'id_famille' => 854,
'nom_famille' => '2 mg/2 ml, solution buvable',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
354 => 
array (
'id_famille' => 855,
'nom_famille' => '3 mg/2 ml, suspension buvable',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
355 => 
array (
'id_famille' => 856,
'nom_famille' => '82 mg/2 ml, solution buvable',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
356 => 
array (
'id_famille' => 857,
'nom_famille' => '1 mg/2 ml, solution buvable en ampoule',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
357 => 
array (
'id_famille' => 858,
'nom_famille' => '96 mg/2 ml, suspension buvable',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
358 => 
array (
'id_famille' => 859,
'nom_famille' => '5 mg/2 ml, solution buvable',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
359 => 
array (
'id_famille' => 860,
'nom_famille' => 'solution à diluer injectable ou pour perfusion',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
360 => 
array (
'id_famille' => 861,
'nom_famille' => 'poudre et solvant pour solution injectable/perfusion en seringue préremplie',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
361 => 
array (
'id_famille' => 862,
'nom_famille' => 'pâte pour usage dentaire',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
362 => 
array (
'id_famille' => 863,
'nom_famille' => '1 POUR CENT, crème vaginale',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
363 => 
array (
'id_famille' => 864,
'nom_famille' => 'capsule molle vaginale',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
364 => 
array (
'id_famille' => 865,
'nom_famille' => 'crème pour application locale',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
365 => 
array (
'id_famille' => 866,
'nom_famille' => '44 mg/ml, solution injectable',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
366 => 
array (
'id_famille' => 867,
'nom_famille' => '5 ml, suspension injectable en seringue préremplie. Vaccin de l\'hépatite A (inactivé, adsorbé)',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
367 => 
array (
'id_famille' => 868,
'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin de l\'hépatite B (ADNr)',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
368 => 
array (
'id_famille' => 869,
'nom_famille' => 'suspension injectable. Vaccin de l\'hépatite B (ADNr)',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
369 => 
array (
'id_famille' => 870,
'nom_famille' => 'pommade pour application cutanée et nasale',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
370 => 
array (
'id_famille' => 871,
'nom_famille' => '45 mg, poudre pour solution buvable',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
371 => 
array (
'id_famille' => 872,
'nom_famille' => '75 mg poudre pour solution buvable',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
372 => 
array (
'id_famille' => 873,
'nom_famille' => '75 mg/ml, solution buvable',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
373 => 
array (
'id_famille' => 874,
'nom_famille' => '125 mg, comprimé',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
374 => 
array (
'id_famille' => 875,
'nom_famille' => '5 POUR CENT, crème',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
375 => 
array (
'id_famille' => 876,
'nom_famille' => 'poudre orale en sachet bipoche',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
376 => 
array (
'id_famille' => 877,
'nom_famille' => 'solution injectable (S.C.)',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
377 => 
array (
'id_famille' => 878,
'nom_famille' => 'solution injectable en seringue pré-remplie (S.C.)',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
378 => 
array (
'id_famille' => 879,
'nom_famille' => 'poudre pour solution injectable. Trousse pour la préparation radiopharmaceutique',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
379 => 
array (
'id_famille' => 880,
'nom_famille' => '5 POUR CENT, solution buvable en gouttes',
'created_at' => '2023-12-17 07:49:05',
'updated_at' => '2023-12-17 07:49:05',
),
380 => 
array (
'id_famille' => 881,
'nom_famille' => 'suspension injectable (intra-articulaire)',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
381 => 
array (
'id_famille' => 882,
'nom_famille' => '1 %, solution pour bain de bouche',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
382 => 
array (
'id_famille' => 883,
'nom_famille' => '1 POUR CENT, gel pour application cutanée',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
383 => 
array (
'id_famille' => 884,
'nom_famille' => 'solution pour pulvérisation cutanée en flacon pressurisé',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
384 => 
array (
'id_famille' => 885,
'nom_famille' => '5 POUR MILLE, solution pour application locale',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
385 => 
array (
'id_famille' => 886,
'nom_famille' => '1 POUR CENT, bain de bouche, flacon',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
386 => 
array (
'id_famille' => 887,
'nom_famille' => '1 POUR CENT, pâte dentifrice',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
387 => 
array (
'id_famille' => 888,
'nom_famille' => '1 POUR CENT, solution pour bain de bouche',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
388 => 
array (
'id_famille' => 889,
'nom_famille' => 'poudre et solvant pour solution intravésicale',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
389 => 
array (
'id_famille' => 890,
'nom_famille' => 'suspension injectable en seringue préremplie',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
390 => 
array (
'id_famille' => 891,
'nom_famille' => 'solution pour application locale, stérile',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
391 => 
array (
'id_famille' => 892,
'nom_famille' => 'solution injectable sous-cutanée',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
392 => 
array (
'id_famille' => 893,
'nom_famille' => '79 000 à 316 000 cellules/cm², substitut de tissu vivant',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
393 => 
array (
'id_famille' => 894,
'nom_famille' => 'collyre en récipient unidose',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
394 => 
array (
'id_famille' => 895,
'nom_famille' => 'suspension injectable en cartouche',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
395 => 
array (
'id_famille' => 896,
'nom_famille' => '04 POUR CENT, solution pour pulvérisation nasale',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
396 => 
array (
'id_famille' => 897,
'nom_famille' => 'gomme orale',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
397 => 
array (
'id_famille' => 898,
'nom_famille' => 'pastille édulcorée à l\'isomalt',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
398 => 
array (
'id_famille' => 899,
'nom_famille' => '2 mg/0,6 mg MENTHE GLACIALE SANS SUCRE, pastille édulcorée à la saccharine sodique, au maltitol et à l\'isomalt',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
399 => 
array (
'id_famille' => 900,
'nom_famille' => '2 mg/0,6 mg MENTHE, pastille',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
400 => 
array (
'id_famille' => 901,
'nom_famille' => '2 mg/0,6 mg MIEL CITRON SANS SUCRE, pastille édulcorée à la saccharine sodique, au maltitol et à l\'isomalt',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
401 => 
array (
'id_famille' => 902,
'nom_famille' => '2 mg/0,6 mg MIEL CITRON, pastille',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
402 => 
array (
'id_famille' => 903,
'nom_famille' => '30 g/0,03 g pour 100 mL, collutoire, flacon pressurisé',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
403 => 
array (
'id_famille' => 904,
'nom_famille' => 'comprimé et gélule',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
404 => 
array (
'id_famille' => 905,
'nom_famille' => '33 mg/ml SANS SUCRE, solution buvable édulcorée à l\'acésulfame potassique',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
405 => 
array (
'id_famille' => 906,
'nom_famille' => '33 mg/ml, sirop',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
406 => 
array (
'id_famille' => 907,
'nom_famille' => 'poudre pour solution buvable en sachet édulcorée à l\'aspartam',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
407 => 
array (
'id_famille' => 908,
'nom_famille' => 'solution injectable en seringue préremplie (0,4 ml)',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
408 => 
array (
'id_famille' => 909,
'nom_famille' => 'solution injectable en stylo prérempli (0,4 ml)',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
409 => 
array (
'id_famille' => 910,
'nom_famille' => 'solution injectable pour voie intra-articulaire en seringue pré-remplie',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
410 => 
array (
'id_famille' => 911,
'nom_famille' => '5 POUR CENT, suspension injectable',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
411 => 
array (
'id_famille' => 912,
'nom_famille' => 'lyophilisat (flacon) et solution pour usage parentéral',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
412 => 
array (
'id_famille' => 913,
'nom_famille' => 'préparation injectable',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
413 => 
array (
'id_famille' => 914,
'nom_famille' => 'soution pour perfusion par voie sous-cutanée',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
414 => 
array (
'id_famille' => 915,
'nom_famille' => 'solution injectable en seringue préremplie (0,8 mL)',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
415 => 
array (
'id_famille' => 916,
'nom_famille' => 'solution injectable en stylo prérempli (0,8 mL)',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
416 => 
array (
'id_famille' => 917,
'nom_famille' => '3 GBq/mL, solution injectable',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
417 => 
array (
'id_famille' => 918,
'nom_famille' => 'suspension buvable en sachet édulcorée au maltitol liquide',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
418 => 
array (
'id_famille' => 919,
'nom_famille' => 'suspension buvable édulcorée au maltitol et à la saccharine sodique',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
419 => 
array (
'id_famille' => 920,
'nom_famille' => '8 ml, solution injectable pour usage pédiatrique',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
420 => 
array (
'id_famille' => 921,
'nom_famille' => 'poudre et  solvant pour solution injectable',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
421 => 
array (
'id_famille' => 922,
'nom_famille' => 'collyre en émulsion',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
422 => 
array (
'id_famille' => 923,
'nom_famille' => '1 mg/1 ml, solution à diluer pour perfusion',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
423 => 
array (
'id_famille' => 924,
'nom_famille' => 'implant intravitréen avec applicateur',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
424 => 
array (
'id_famille' => 925,
'nom_famille' => '5 mg/0,5 ml, solution injectable en seringue préremplie',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
425 => 
array (
'id_famille' => 926,
'nom_famille' => '5 mg/0,7 ml, solution injectable en seringue préremplie',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
426 => 
array (
'id_famille' => 927,
'nom_famille' => '5 mg/0,9 ml, solution injectable en seringue préremplie',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
427 => 
array (
'id_famille' => 928,
'nom_famille' => '5 mg/0,3 ml, solution injectable en seringue préremplie',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
428 => 
array (
'id_famille' => 929,
'nom_famille' => '1 ml, solution pour pulvérisation nasale',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
429 => 
array (
'id_famille' => 930,
'nom_famille' => '5 ml, solution injectable pour voie sous-cutanée en seringue pré-remplie',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
430 => 
array (
'id_famille' => 931,
'nom_famille' => 'poudre pour suspension intravésicale. B.C.G. pour immunothérapie',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
431 => 
array (
'id_famille' => 932,
'nom_famille' => 'solution injectable en seringue préremplie (IM)',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
432 => 
array (
'id_famille' => 933,
'nom_famille' => '2 mg/ml ENFANTS, solution buvable',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
433 => 
array (
'id_famille' => 934,
'nom_famille' => '75 mg, comprimé pelliculé',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
434 => 
array (
'id_famille' => 935,
'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin poliomyélitique (inactivé)',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
435 => 
array (
'id_famille' => 936,
'nom_famille' => '5 g, poudre orale en sachet',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
436 => 
array (
'id_famille' => 937,
'nom_famille' => 'solution injectable en seringue préremplie (0,4mL)',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
437 => 
array (
'id_famille' => 938,
'nom_famille' => '1 mg), solution injectable',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
438 => 
array (
'id_famille' => 939,
'nom_famille' => 'suspension injectable . Vaccin antivariolique (virus vivant modifié de la vaccine Ankara)',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
439 => 
array (
'id_famille' => 940,
'nom_famille' => '1%, collyre en solution en récipient unidose',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
440 => 
array (
'id_famille' => 941,
'nom_famille' => '5 mg/ml, poudre, solvant et matrice pour matrice implantable',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
441 => 
array (
'id_famille' => 942,
'nom_famille' => 'granulés gastro-résistants pour suspension buvable en sachet',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
442 => 
array (
'id_famille' => 943,
'nom_famille' => 'poudre et suspension pour suspension injectable en seringue préremplie. Vaccin diphtérique(D), tétanique(T), coquelucheux (acellulaire, multicomposé)(Ca), de l\'hépatite B (ADNr)(HepB), poliomyélitique(inactivé)(P) et de l\'Haemophilus influe',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
443 => 
array (
'id_famille' => 944,
'nom_famille' => 'poudre et suspension pour suspension injectable. Vaccin diphtérique (D), tétanique (T), coquelucheux (acellulaire, multicomposé) (Ca), poliomyélitique (inactivé) (P) et conjugué de lHaemophilus influenzae type b (Hib), adsorbé',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
444 => 
array (
'id_famille' => 945,
'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin diphtérique, tétanique, coquelucheux acellulaire, poliomyélitique inactivé, adsorbé',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
445 => 
array (
'id_famille' => 946,
'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin grippal inactivé à antigènes de surface',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
446 => 
array (
'id_famille' => 947,
'nom_famille' => 'suspension injectable en seringue préremplie, vaccin grippal inactivé à antigènes de surface',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
447 => 
array (
'id_famille' => 948,
'nom_famille' => '7 ml, solution injectable en seringue préremplie',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
448 => 
array (
'id_famille' => 949,
'nom_famille' => '9 ml, solution injectable en seringue préremplie',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
449 => 
array (
'id_famille' => 950,
'nom_famille' => '25 ml, solution injectable en seringue préremplie',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
450 => 
array (
'id_famille' => 951,
'nom_famille' => '35 ml, solution injectable en seringue préremplie',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
451 => 
array (
'id_famille' => 952,
'nom_famille' => '45 ml, solution injectable en seringue préremplie',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
452 => 
array (
'id_famille' => 953,
'nom_famille' => 'gaz pour inhalation',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
453 => 
array (
'id_famille' => 954,
'nom_famille' => 'solution pour pulvérisation nasale en récipient unidose',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
454 => 
array (
'id_famille' => 955,
'nom_famille' => 'solution pour pulvérisation nasale-DoseGuard',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
455 => 
array (
'id_famille' => 956,
'nom_famille' => 'gel urétral en seringue préremplie',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
456 => 
array (
'id_famille' => 957,
'nom_famille' => 'suspension injectable en stylo prérempli',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
457 => 
array (
'id_famille' => 958,
'nom_famille' => 'solution buvable en ampoules',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
458 => 
array (
'id_famille' => 959,
'nom_famille' => '5 mg, ovule',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
459 => 
array (
'id_famille' => 960,
'nom_famille' => '25 MBq/mL, solution injectable',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
460 => 
array (
'id_famille' => 961,
'nom_famille' => 'solution pour perfusion. Référence : MIBG-131-T',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
461 => 
array (
'id_famille' => 962,
'nom_famille' => 'CIS bio international 18,5 MBq/mL solution injectable. [Référence : I-123-S-2]',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
462 => 
array (
'id_famille' => 963,
'nom_famille' => 'CIS bio international, précurseur radiopharmaceutique [réference : I-123-S-1]',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
463 => 
array (
'id_famille' => 964,
'nom_famille' => '5 mg/2 ml ADULTES, solution pour inhalation par nébuliseur en récipient unidose',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
464 => 
array (
'id_famille' => 965,
'nom_famille' => '50 mg/2 ml ADULTES, solution pour inhalation par nébuliseur en récipient unidose',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
465 => 
array (
'id_famille' => 966,
'nom_famille' => '25 mg/mL ENFANTS, solution pour inhalation par nébuliseur en récipient unidose',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
466 => 
array (
'id_famille' => 967,
'nom_famille' => '5 mg SANS SUCRE, comprimé orodispersible édulcoré à laspartam',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
467 => 
array (
'id_famille' => 968,
'nom_famille' => 'solution sublinguale en flacon pulvérisateur',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
468 => 
array (
'id_famille' => 969,
'nom_famille' => '2 mg/1 mL, solution injectable/pour perfusion',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
469 => 
array (
'id_famille' => 970,
'nom_famille' => 'solution pour instillation endotrachéobronchique en ampoule',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
470 => 
array (
'id_famille' => 971,
'nom_famille' => '20 mg/1 ml, solution injectable en ampoule',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
471 => 
array (
'id_famille' => 972,
'nom_famille' => 'solution à diluer pour perfusion.',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
472 => 
array (
'id_famille' => 973,
'nom_famille' => 'suspension injectable. Vaccin de l\'encéphalite japonaise (inactivé, adsorbé)',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
473 => 
array (
'id_famille' => 974,
'nom_famille' => '5 mg/325 mg, comprimé effervescent',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
474 => 
array (
'id_famille' => 975,
'nom_famille' => '5 mg/325 mg, comprimé pelliculé',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
475 => 
array (
'id_famille' => 976,
'nom_famille' => 'solution à diluer pour solution buvable',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
476 => 
array (
'id_famille' => 977,
'nom_famille' => '20 mL, solution injectable en stylo injecteur prérempli',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
477 => 
array (
'id_famille' => 978,
'nom_famille' => '5 mg/0,25 mL, solution injectable en stylo injecteur prérempli',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
478 => 
array (
'id_famille' => 979,
'nom_famille' => '30 mL, solution injectable en stylo injecteur prérempli',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
479 => 
array (
'id_famille' => 980,
'nom_famille' => '5 mg/0,35 mL, solution injectable en stylo injecteur prérempli',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
480 => 
array (
'id_famille' => 981,
'nom_famille' => '40 mL, solution injectable en stylo injecteur prérempli',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
481 => 
array (
'id_famille' => 982,
'nom_famille' => '5 mg/0,45 mL, solution injectable en stylo injecteur prérempli',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
482 => 
array (
'id_famille' => 983,
'nom_famille' => '50 mL, solution injectable en stylo injecteur prérempli',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
483 => 
array (
'id_famille' => 984,
'nom_famille' => '5 mg/0,55 mL, solution injectable en stylo injecteur prérempli',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
484 => 
array (
'id_famille' => 985,
'nom_famille' => '60 mL, solution injectable en stylo injecteur prérempli',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
485 => 
array (
'id_famille' => 986,
'nom_famille' => '5 mg/0,15 mL, solution injectable en stylo injecteur prérempli',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
486 => 
array (
'id_famille' => 987,
'nom_famille' => 'pour solution à diluer pour perfusion',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
487 => 
array (
'id_famille' => 988,
'nom_famille' => '5 mg, système de diffusion intra-utérin',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
488 => 
array (
'id_famille' => 989,
'nom_famille' => 'suspension injectable Vaccin contre la COVID-19 (Ad26.COV2-S [recombinant])',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
489 => 
array (
'id_famille' => 990,
'nom_famille' => '5 mg/0,2 mL, solution à diluer injectable',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
490 => 
array (
'id_famille' => 991,
'nom_famille' => 'comprimé + JINARC 45 mg, comprimé',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
491 => 
array (
'id_famille' => 992,
'nom_famille' => 'comprimé + JINARC 60 mg, comprimé',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
492 => 
array (
'id_famille' => 993,
'nom_famille' => 'comprimé + JINARC 90 mg, comprimé',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
493 => 
array (
'id_famille' => 994,
'nom_famille' => '4 mg, microgranules à libération prolongée en gélule',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
494 => 
array (
'id_famille' => 995,
'nom_famille' => '5 mg/25 mg/50 mg, comprimé pelliculé',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
495 => 
array (
'id_famille' => 996,
'nom_famille' => 'poudre pour suspension orale et rectale',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
496 => 
array (
'id_famille' => 997,
'nom_famille' => '5 POUR CENT, solution injectable I.V.',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
497 => 
array (
'id_famille' => 998,
'nom_famille' => 'poudre pour solution à diluer pour injection/perfusion',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
498 => 
array (
'id_famille' => 999,
'nom_famille' => 'solution injectable (I.V.-I.M.)',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
499 => 
array (
'id_famille' => 1000,
'nom_famille' => '25 mg/mL, collyre en solution',
'created_at' => '2023-12-17 07:49:06',
'updated_at' => '2023-12-17 07:49:06',
),
));
        \DB::table('visite__famille_medicament')->insert(array (
            0 => 
            array (
                'id_famille' => 1001,
                'nom_famille' => 'gel en récipient-unidose',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            1 => 
            array (
                'id_famille' => 1002,
                'nom_famille' => 'gel en récipient unidose',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            2 => 
            array (
                'id_famille' => 1003,
                'nom_famille' => 'gel en sachet',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            3 => 
            array (
                'id_famille' => 1004,
                'nom_famille' => '5 %, gel',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            4 => 
            array (
                'id_famille' => 1005,
            'nom_famille' => 'solution injectable intramusculaire (I.M.)',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            5 => 
            array (
                'id_famille' => 1006,
                'nom_famille' => '050 %, crème',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            6 => 
            array (
                'id_famille' => 1007,
                'nom_famille' => '5 POUR CENT, gel',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            7 => 
            array (
                'id_famille' => 1008,
                'nom_famille' => 'poudre et solvant pour solution injectable / pour perfusion',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            8 => 
            array (
                'id_famille' => 1009,
                'nom_famille' => 'comprimé soluble',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            9 => 
            array (
                'id_famille' => 1010,
                'nom_famille' => '5 mL, solution à diluer pour perfusion',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            10 => 
            array (
                'id_famille' => 1011,
                'nom_famille' => '67 ml, solution injectable en seringue préremplie',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            11 => 
            array (
                'id_famille' => 1012,
                'nom_famille' => '5 mg/1000 mg, comprimé pelliculé',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            12 => 
            array (
                'id_famille' => 1013,
            'nom_famille' => 'degré de dilution compris entre 5CH et 30CH ou entre 14DH et 60DH (pour les formes orales solides) et 5CH et 30CH ou entre 10DH et 60DH (pour les formes orales liquides)',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            13 => 
            array (
                'id_famille' => 1014,
                'nom_famille' => 'générateur de rubidium [81 Rb]/ krypton [81m Kr] pour l\'élution par l\'air',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            14 => 
            array (
                'id_famille' => 1015,
                'nom_famille' => 'comprimé pour solution buvable',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            15 => 
            array (
                'id_famille' => 1016,
                'nom_famille' => '2 x 1 000 000 - 6 x 100 000 000 cellules, dispersion pour perfusion',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            16 => 
            array (
                'id_famille' => 1017,
                'nom_famille' => 'solution injectable/pour perfursion',
                'created_at' => '2023-12-17 07:49:06',
                'updated_at' => '2023-12-17 07:49:06',
            ),
            17 => 
            array (
                'id_famille' => 1018,
                'nom_famille' => '13 POUR CENT, collyre en solution en récipient unidose',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            18 => 
            array (
                'id_famille' => 1019,
                'nom_famille' => '2 %, gel ophtalmique',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            19 => 
            array (
                'id_famille' => 1020,
                'nom_famille' => 'solution buvable en sachet-dose',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            20 => 
            array (
                'id_famille' => 1021,
                'nom_famille' => '5 %, solution buvable',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            21 => 
            array (
                'id_famille' => 1022,
                'nom_famille' => 'comprimé dispersible ou à croquer',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            22 => 
            array (
                'id_famille' => 1023,
                'nom_famille' => '67 POUR CENT, émulsion pour application cutanée',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            23 => 
            array (
                'id_famille' => 1024,
                'nom_famille' => 'solution pour pulvérisation cutanée',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            24 => 
            array (
                'id_famille' => 1025,
                'nom_famille' => 'gel oral en pot',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            25 => 
            array (
                'id_famille' => 1026,
                'nom_famille' => 'gel oral en récipient unidose',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            26 => 
            array (
                'id_famille' => 1027,
                'nom_famille' => '23 g %, gel oral en pot édulcoré à la saccharine sodique',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            27 => 
            array (
                'id_famille' => 1028,
                'nom_famille' => 'degré de dilution compris entre 3CH à 30CH et 5DH à 60 DH',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            28 => 
            array (
                'id_famille' => 1029,
                'nom_famille' => 'degré de dilution compris entre 8CH et 30CH ou entre 15DH et 60DH',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            29 => 
            array (
                'id_famille' => 1030,
                'nom_famille' => '9 POUR CENT, collyre',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            30 => 
            array (
                'id_famille' => 1031,
                'nom_famille' => '4 POUR CENT, collyre',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            31 => 
            array (
                'id_famille' => 1032,
                'nom_famille' => '6 mg/0,4 ml, collyre en solution en récipient unidose',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            32 => 
            array (
                'id_famille' => 1033,
                'nom_famille' => 'solution injectable I.V. en ampoule',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            33 => 
            array (
                'id_famille' => 1034,
                'nom_famille' => 'comprimé à croquer édulcoré à l\'aspartam',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            34 => 
            array (
                'id_famille' => 1035,
                'nom_famille' => '005 %, collyre en solution',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            35 => 
            array (
                'id_famille' => 1036,
                'nom_famille' => '1 mg/0,02 mg, comprimé enrobé',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            36 => 
            array (
                'id_famille' => 1037,
                'nom_famille' => 'gaz médicinal liquéfié pour inhalation',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            37 => 
            array (
                'id_famille' => 1038,
                'nom_famille' => 'implant en seringue pré-remplie',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            38 => 
            array (
                'id_famille' => 1039,
                'nom_famille' => '5 mg, comprimé peliculé',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            39 => 
            array (
                'id_famille' => 1040,
                'nom_famille' => 'comprimé pellliculé sécable',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            40 => 
            array (
                'id_famille' => 1041,
            'nom_famille' => 'solution injectable (IM/IV)',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            41 => 
            array (
                'id_famille' => 1042,
            'nom_famille' => '5 ml, solution injectable (IM/IV)',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            42 => 
            array (
                'id_famille' => 1043,
                'nom_famille' => '05 %, collyre',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            43 => 
            array (
                'id_famille' => 1044,
                'nom_famille' => '5 mg comprimé',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            44 => 
            array (
                'id_famille' => 1045,
                'nom_famille' => 'gel intra-utérin',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            45 => 
            array (
                'id_famille' => 1046,
                'nom_famille' => 'solution pour injection/perfusion',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            46 => 
            array (
                'id_famille' => 1047,
                'nom_famille' => '005 mg/ml AGUETTANT, solution injectable',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            47 => 
            array (
                'id_famille' => 1048,
                'nom_famille' => 'solution buvable édulcorée au maltitol liquide',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            48 => 
            array (
                'id_famille' => 1049,
                'nom_famille' => '05 mg/1 ml, solution injectable par voie intrathécale en ampoule',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            49 => 
            array (
                'id_famille' => 1050,
                'nom_famille' => 'solution injectable pour perfusion par voie intrathécale en ampoule',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            50 => 
            array (
                'id_famille' => 1051,
                'nom_famille' => '5mg, comprimé sécable',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            51 => 
            array (
                'id_famille' => 1052,
                'nom_famille' => 'solution buvable en ampoule ou en récipient unidose',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            52 => 
            array (
                'id_famille' => 1053,
                'nom_famille' => '1 %, émulsion fluide pour application locale',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            53 => 
            array (
                'id_famille' => 1054,
                'nom_famille' => 'crème épaisse pour application locale',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            54 => 
            array (
                'id_famille' => 1055,
                'nom_famille' => 'solution pour nébulisation',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            55 => 
            array (
                'id_famille' => 1056,
                'nom_famille' => '14 mg, comprimé pelliculé',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            56 => 
            array (
                'id_famille' => 1057,
                'nom_famille' => '19 mg, comprimé pelliculé',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            57 => 
            array (
                'id_famille' => 1058,
                'nom_famille' => 'comprimé buccogingival muco-adhésif',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            58 => 
            array (
                'id_famille' => 1059,
                'nom_famille' => '15 mg/0,03 mg, comprimé enrobé',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            59 => 
            array (
                'id_famille' => 1060,
                'nom_famille' => 'solution à diluer et solvant pour solution injectable',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            60 => 
            array (
                'id_famille' => 1061,
                'nom_famille' => 'pastille édulcorée au sorbitol et au sucralose',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            61 => 
            array (
                'id_famille' => 1062,
                'nom_famille' => '86 mg/ml SANS SUCRE, solution pour pulvérisation buccale édulcorée au sucralose',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            62 => 
            array (
                'id_famille' => 1063,
                'nom_famille' => 'pastille édulcorée au sorbitol et à la saccharine sodique',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            63 => 
            array (
                'id_famille' => 1064,
                'nom_famille' => 'comprimé à sucer édulcoré au sorbitol et à la saccharine',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            64 => 
            array (
                'id_famille' => 1065,
                'nom_famille' => 'Junior KwikPen solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            65 => 
            array (
                'id_famille' => 1066,
                'nom_famille' => 'KwikPen solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            66 => 
            array (
                'id_famille' => 1067,
            'nom_famille' => 'des oreillons, et rubéoleux (vivant).',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            67 => 
            array (
                'id_famille' => 1068,
            'nom_famille' => 'poudre et solvant pour suspension injectable. Vaccin rougeoleux, des oreillons, et rubéoleux (vivant)',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            68 => 
            array (
                'id_famille' => 1069,
                'nom_famille' => 'comprimé à croquer édulcoré à la saccharine sodique, au sorbitol et au maltitol',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            69 => 
            array (
                'id_famille' => 1070,
                'nom_famille' => 'suspension buvable en sachet, édulcorée à la saccharine sodique',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            70 => 
            array (
                'id_famille' => 1071,
                'nom_famille' => 'solution pour injection sous-cutanée',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            71 => 
            array (
                'id_famille' => 1072,
                'nom_famille' => '5 g, poudre pour solution buvable en sachet',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            72 => 
            array (
                'id_famille' => 1073,
                'nom_famille' => 'solution buvable en ampoule édulcoré à la saccharine sodique',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            73 => 
            array (
                'id_famille' => 1074,
                'nom_famille' => '8 POUR CENT, solution injectable',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            74 => 
            array (
                'id_famille' => 1075,
                'nom_famille' => '9 %, poudre effervescente pour suspension buvable',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            75 => 
            array (
                'id_famille' => 1076,
            'nom_famille' => '1 g/ml), solution injectable (IV) en ampoule',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            76 => 
            array (
                'id_famille' => 1077,
                'nom_famille' => '9 POUR CENT, granulés',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            77 => 
            array (
                'id_famille' => 1078,
                'nom_famille' => '4 mg, comprimé pelliculé',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            78 => 
            array (
                'id_famille' => 1079,
                'nom_famille' => 'solution injectable hypertonique pour perfusion en flacon verre',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            79 => 
            array (
                'id_famille' => 1080,
                'nom_famille' => '4 mg, comprimé pelliculé à libération prolongée',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            80 => 
            array (
                'id_famille' => 1081,
                'nom_famille' => 'sirop en flacon',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            81 => 
            array (
                'id_famille' => 1082,
                'nom_famille' => '4/E, émulsion pour perfusion',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            82 => 
            array (
                'id_famille' => 1083,
                'nom_famille' => '1 POUR CENT, solution pour application locale',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            83 => 
            array (
                'id_famille' => 1084,
                'nom_famille' => '75 POUR CENT, solution pour application locale',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            84 => 
            array (
                'id_famille' => 1085,
                'nom_famille' => '50 g/4,29 g/2,14 g pour 10 g, pâte orale en sachet',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            85 => 
            array (
                'id_famille' => 1086,
                'nom_famille' => 'pâte orale en pot',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            86 => 
            array (
                'id_famille' => 1087,
                'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin conjugué méningococcique groupe C',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            87 => 
            array (
                'id_famille' => 1088,
                'nom_famille' => 'solution injectable. Vaccin méningococcique conjugué des groupes A,C,W et Y',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            88 => 
            array (
                'id_famille' => 1089,
                'nom_famille' => 'poudre et solution pour solution injectable. Vaccin méningococcique des groupes A, C, W-135 et Y conjugué',
                'created_at' => '2023-12-17 07:49:07',
                'updated_at' => '2023-12-17 07:49:07',
            ),
            89 => 
            array (
                'id_famille' => 1090,
                'nom_famille' => 'solution injectable de chlorure de strontium [89 Sr]',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            90 => 
            array (
                'id_famille' => 1091,
                'nom_famille' => '20 mg/1 ml, solution injectable, ampoule',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            91 => 
            array (
                'id_famille' => 1092,
            'nom_famille' => '5 POUR CENT (50 mg/2 mL), solution injectable',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            92 => 
            array (
                'id_famille' => 1093,
            'nom_famille' => '5 POUR CENT (500 mg/20 mL), solution injectable',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            93 => 
            array (
                'id_famille' => 1094,
                'nom_famille' => 'solution injecable',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            94 => 
            array (
                'id_famille' => 1095,
                'nom_famille' => 'solution pour la modification de la fraction sanguine',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            95 => 
            array (
                'id_famille' => 1096,
                'nom_famille' => '20 ml, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            96 => 
            array (
                'id_famille' => 1097,
                'nom_famille' => '5 mg/0,25 ml, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            97 => 
            array (
                'id_famille' => 1098,
                'nom_famille' => '30 ml, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            98 => 
            array (
                'id_famille' => 1099,
                'nom_famille' => '5 mg/0,35 ml, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            99 => 
            array (
                'id_famille' => 1100,
                'nom_famille' => '40 ml, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            100 => 
            array (
                'id_famille' => 1101,
                'nom_famille' => '5 mg/0,45 ml, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            101 => 
            array (
                'id_famille' => 1102,
                'nom_famille' => '5 mg/0,55 ml, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            102 => 
            array (
                'id_famille' => 1103,
                'nom_famille' => '60 ml, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            103 => 
            array (
                'id_famille' => 1104,
                'nom_famille' => '5 mg/0,15 ml, solution injectable en seringue préremplie',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            104 => 
            array (
                'id_famille' => 1105,
                'nom_famille' => '5 mg/0,15 ml, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            105 => 
            array (
                'id_famille' => 1106,
                'nom_famille' => '5 %, solution pour perfusion',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            106 => 
            array (
                'id_famille' => 1107,
                'nom_famille' => '5 POUR CENT, solution injectable en poche',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            107 => 
            array (
                'id_famille' => 1108,
            'nom_famille' => '5 POUR CENT (500 mg/100 ml), solution injectable pour perfusion',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            108 => 
            array (
                'id_famille' => 1109,
                'nom_famille' => 'poudre pour solution injectable. Trousse pour préparation radiopharmaceutique',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            109 => 
            array (
                'id_famille' => 1110,
                'nom_famille' => 'solution rectale en récipient unidose',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            110 => 
            array (
                'id_famille' => 1111,
                'nom_famille' => '9 g, poudre pour solution buvable',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            111 => 
            array (
                'id_famille' => 1112,
                'nom_famille' => 'granulés à libération prolongée en sachet-dose',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            112 => 
            array (
                'id_famille' => 1113,
                'nom_famille' => 'suspension buvable à diluer',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            113 => 
            array (
                'id_famille' => 1114,
                'nom_famille' => 'suspension buvable ou rectale',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            114 => 
            array (
                'id_famille' => 1115,
                'nom_famille' => 'pâte orale',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            115 => 
            array (
                'id_famille' => 1116,
                'nom_famille' => 'solution injectable/pour perfusion en seringue pré-remplie',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            116 => 
            array (
                'id_famille' => 1117,
                'nom_famille' => 'solution injectable ou rectale',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            117 => 
            array (
                'id_famille' => 1118,
                'nom_famille' => 'granulés en gélule',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            118 => 
            array (
                'id_famille' => 1119,
                'nom_famille' => '5 mg, granulés en gélule',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            119 => 
            array (
                'id_famille' => 1120,
                'nom_famille' => '1 mg, comprimé',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            120 => 
            array (
                'id_famille' => 1121,
                'nom_famille' => '1 mg/mL, solution pour administration endonasale',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            121 => 
            array (
                'id_famille' => 1122,
                'nom_famille' => 'solution endonasale en flacon pulvérisateur',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            122 => 
            array (
                'id_famille' => 1123,
                'nom_famille' => 'solution pour application cutanée en flacon',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            123 => 
            array (
                'id_famille' => 1124,
                'nom_famille' => 'poudre et solvant pour solution intraoculaire',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            124 => 
            array (
                'id_famille' => 1125,
            'nom_famille' => 'solution injectable (IM) en ampoule',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            125 => 
            array (
                'id_famille' => 1126,
                'nom_famille' => 'solution injectable pour voie intra-oculaire',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            126 => 
            array (
                'id_famille' => 1127,
                'nom_famille' => 'poudre pour solution injectable / perfusion ou voie intravésicale',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            127 => 
            array (
                'id_famille' => 1128,
                'nom_famille' => 'poudre pour solution intravésicale',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            128 => 
            array (
                'id_famille' => 1129,
                'nom_famille' => 'poudre pour solution injectable/perfusion ou voie intravésicale',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            129 => 
            array (
                'id_famille' => 1130,
                'nom_famille' => 'solution injectable I.M. en flacon',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            130 => 
            array (
                'id_famille' => 1131,
                'nom_famille' => '2 mg, granulés pour suspension buvable',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            131 => 
            array (
                'id_famille' => 1132,
                'nom_famille' => 'comprimé sécable pour suspension buvable',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            132 => 
            array (
                'id_famille' => 1133,
            'nom_famille' => '5 (50 mg/12,5 mg), gélule',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            133 => 
            array (
                'id_famille' => 1134,
                'nom_famille' => 'degré de dilution compris entre 3CH et 30CH ou entre 7DH et 60DH',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            134 => 
            array (
                'id_famille' => 1135,
            'nom_famille' => 'comprimé à libération prolongée (UNE PRISE QUOTIDIENNE)',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            135 => 
            array (
                'id_famille' => 1136,
            'nom_famille' => 'gélule à libération prolongée (UNE PRISE QUOTIDIENNE)',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            136 => 
            array (
                'id_famille' => 1137,
                'nom_famille' => '25 mg/ml, collyre en solution en récipient unidose',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            137 => 
            array (
                'id_famille' => 1138,
                'nom_famille' => 'poudre et solvant pour solution injectable ou perfusion',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            138 => 
            array (
                'id_famille' => 1139,
                'nom_famille' => '5 mg/0,5 ml, collyre en solution en récipient unidose',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            139 => 
            array (
                'id_famille' => 1140,
            'nom_famille' => '25 POUR MILLE (0,1 mg/0,4 ml), collyre en solution en récipient unidose',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            140 => 
            array (
                'id_famille' => 1141,
                'nom_famille' => 'comprimé pour suspension buvable',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            141 => 
            array (
                'id_famille' => 1142,
                'nom_famille' => 'solution pour injection',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            142 => 
            array (
                'id_famille' => 1143,
                'nom_famille' => 'comprimé effervescent édulcoré au sucralose',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            143 => 
            array (
                'id_famille' => 1144,
            'nom_famille' => '5 mmol/mL, solution injectable (IV)',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            144 => 
            array (
                'id_famille' => 1145,
                'nom_famille' => '9 POUR CENT, collyre en solution',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            145 => 
            array (
                'id_famille' => 1146,
            'nom_famille' => 'poudre et solution pour usage parentéral à diluer (perfusion)',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            146 => 
            array (
                'id_famille' => 1147,
                'nom_famille' => 'bâton pour usage urétral',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            147 => 
            array (
                'id_famille' => 1148,
                'nom_famille' => '3 mg, poudre pour solution injectable',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            148 => 
            array (
                'id_famille' => 1149,
                'nom_famille' => '8 mg, poudre pour solution injectable',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            149 => 
            array (
                'id_famille' => 1150,
            'nom_famille' => 'solution injectable (I.M.-I.V.) en ampoule',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            150 => 
            array (
                'id_famille' => 1151,
                'nom_famille' => 'comprimé vaginal',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            151 => 
            array (
                'id_famille' => 1152,
                'nom_famille' => 'solution filmogène pour application locale en flacon',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            152 => 
            array (
                'id_famille' => 1153,
                'nom_famille' => '2 mg/ml + 3,1 mg/ml + 10 mg/ml, solution injectable',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            153 => 
            array (
                'id_famille' => 1154,
                'nom_famille' => 'insert ophtalmique',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            154 => 
            array (
                'id_famille' => 1155,
                'nom_famille' => 'poudre, dispersion et solvant pour solution à diluer pour dispersion pour perfusion',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            155 => 
            array (
                'id_famille' => 1156,
                'nom_famille' => 'solution injectable à libération prolongée en seringue préremplie',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            156 => 
            array (
                'id_famille' => 1157,
                'nom_famille' => '9 %, collyre en solution',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            157 => 
            array (
                'id_famille' => 1158,
            'nom_famille' => 'solution injectable (I.V.-S.C.-I.M.)',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            158 => 
            array (
                'id_famille' => 1159,
                'nom_famille' => '4 mg/ml, solution injectable',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            159 => 
            array (
                'id_famille' => 1160,
                'nom_famille' => '4 mg/1 ml, solution injectable en ampoule',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            160 => 
            array (
                'id_famille' => 1161,
                'nom_famille' => '9 mg/0,1 ml, solution pour pulvérisation nasale en récipient unidose',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            161 => 
            array (
                'id_famille' => 1162,
                'nom_famille' => '24 mg trousse pour préparation radiopharmaceutique',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            162 => 
            array (
                'id_famille' => 1163,
                'nom_famille' => 'solution injectable en poche',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            163 => 
            array (
                'id_famille' => 1164,
                'nom_famille' => '600 mg/400 UI, comprimé orodispersible',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            164 => 
            array (
                'id_famille' => 1165,
                'nom_famille' => '15 mg/dose, solution pour pulvérisation buccale',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            165 => 
            array (
                'id_famille' => 1166,
                'nom_famille' => '30 mg/dose, solution pour pulvérisation buccale',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            166 => 
            array (
                'id_famille' => 1167,
                'nom_famille' => '5 mg/10 mg, comprimé à libération modifiée',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            167 => 
            array (
                'id_famille' => 1168,
                'nom_famille' => '5 mg/5 mg, comprimé à libération modifiée',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            168 => 
            array (
                'id_famille' => 1169,
                'nom_famille' => '7 mg ENFANTS, sirop en sachet',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            169 => 
            array (
                'id_famille' => 1170,
            'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin méningococcique polyosidique du groupe C (conjugué, adsorbé)',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            170 => 
            array (
                'id_famille' => 1171,
                'nom_famille' => '5 % FAURE, collyre en solution en récipient unidose',
                'created_at' => '2023-12-17 07:49:08',
                'updated_at' => '2023-12-17 07:49:08',
            ),
            171 => 
            array (
                'id_famille' => 1172,
            'nom_famille' => '3 mg/mL), solution injectable',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        172 => 
        array (
            'id_famille' => 1173,
        'nom_famille' => '5 mL (0,6 mg/mL), solution injectable en seringue préremplie',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        173 => 
        array (
            'id_famille' => 1174,
        'nom_famille' => '5 mL (0,96 mg/mL), solution injectable en seringue préremplie',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        174 => 
        array (
            'id_famille' => 1175,
        'nom_famille' => 'trousse pour la préparation radiopharmaceutique : Injection de Bicisate de Technétium (99mTc)',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        175 => 
        array (
            'id_famille' => 1176,
            'nom_famille' => '5 %, CALCIUM 1,25 mmol/l, solution pour dialyse péritonéale',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        176 => 
        array (
            'id_famille' => 1177,
            'nom_famille' => '3 %, CALCIUM 1,25 mmol/l, solution pour dialyse péritonéale',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        177 => 
        array (
            'id_famille' => 1178,
            'nom_famille' => '25 %, CALCIUM 1,25 mmol/l, solution pour dialyse péritonéale',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        178 => 
        array (
            'id_famille' => 1179,
            'nom_famille' => 'implant pour usage sous-cutané',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        179 => 
        array (
            'id_famille' => 1180,
            'nom_famille' => '5 mg SANS SUCRE EUCALYPTUS, pastille édulcorée à l\'aspartam et à l\'acésulfame potassique',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        180 => 
        array (
            'id_famille' => 1181,
            'nom_famille' => '5 mg SANS SUCRE MENTHE FRAICHEUR, pastille édulcorée à l\'aspartam et à l\'acésulfame potassique',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        181 => 
        array (
            'id_famille' => 1182,
            'nom_famille' => '5 mg SANS SUCRE REGLISSE MENTHE, pastille édulcorée à l\'aspartam et à l\'acésulfame potassique',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        182 => 
        array (
            'id_famille' => 1183,
            'nom_famille' => '5 mg SANS SUCRE, pastille édulcorée à l\'aspartam et à l\'acésulfame potassique',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        183 => 
        array (
            'id_famille' => 1184,
            'nom_famille' => 'gomme à mâcher médicamenteuse édulcorée au sorbitol',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        184 => 
        array (
            'id_famille' => 1185,
            'nom_famille' => 'gomme à mâcher médicamenteuse édulcorée au xylitol et à l\'acésulfame potassique',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        185 => 
        array (
            'id_famille' => 1186,
            'nom_famille' => 'cartouche pour inhalation buccale',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        186 => 
        array (
            'id_famille' => 1187,
            'nom_famille' => 'gomme à mâcher médicamenteuse édulcorée à l\'acésulfame potassique et à la saccharine',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        187 => 
        array (
            'id_famille' => 1188,
            'nom_famille' => 'gomme à mâcher médicamenteuse édulcorée à l\'acésulfame potassique et à la saccharinese',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        188 => 
        array (
            'id_famille' => 1189,
            'nom_famille' => 'gomme à mâcher médicamenteuse édulcorée au xylitol, à l\'acésulfame potassique, au sucralose et au maltitol',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        189 => 
        array (
            'id_famille' => 1190,
            'nom_famille' => 'gomme à mâcher médicamenteuse',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        190 => 
        array (
            'id_famille' => 1191,
            'nom_famille' => 'crème rectale',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        191 => 
        array (
            'id_famille' => 1192,
            'nom_famille' => 'poudre et solvant pour solution injectable. Vaccin méningococcique conjugué des groupes A, C, W135 et Y',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        192 => 
        array (
            'id_famille' => 1193,
            'nom_famille' => '3 mg, gélule',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        193 => 
        array (
            'id_famille' => 1194,
            'nom_famille' => '0 mg, gélule',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        194 => 
        array (
            'id_famille' => 1195,
            'nom_famille' => 'poudre pour solution pour injection, poudre pour solution pour perfusion',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        195 => 
        array (
            'id_famille' => 1196,
            'nom_famille' => 'comprimé à sucer édulcoré à l\'aspartam',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        196 => 
        array (
            'id_famille' => 1197,
            'nom_famille' => 'gomme à mâcher médicamenteuse édulcorée au sorbitol et au xylitol',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        197 => 
        array (
            'id_famille' => 1198,
            'nom_famille' => '5 mg SANS SUCRE, comprimé à sucer édulcoré à l\'acésulfame potassique',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        198 => 
        array (
            'id_famille' => 1199,
            'nom_famille' => 'comprimé à sucer édulcoré à l\'acésulfame potassique',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        199 => 
        array (
            'id_famille' => 1200,
        'nom_famille' => 'poudre lyophilisée et solution pour préparation injectable (I.V.)',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        200 => 
        array (
            'id_famille' => 1201,
            'nom_famille' => '2 ml, solution injectable/pour perfusion',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        201 => 
        array (
            'id_famille' => 1202,
            'nom_famille' => '5 ml, solution injectable/pour perfusion',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        202 => 
        array (
            'id_famille' => 1203,
            'nom_famille' => '5 à 15 MBq/mL solution injectable [Référence: NORCHOL-131]',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        203 => 
        array (
            'id_famille' => 1204,
            'nom_famille' => '5 mg, solution injectable en stylo prérempli',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        204 => 
        array (
            'id_famille' => 1205,
            'nom_famille' => '5 ml, solution injectable en stylo prérempli',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        205 => 
        array (
            'id_famille' => 1206,
            'nom_famille' => '5 ml, solution injectable en cartouche',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        206 => 
        array (
            'id_famille' => 1207,
            'nom_famille' => 'solution rectale, récipient unidose',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        207 => 
        array (
            'id_famille' => 1208,
            'nom_famille' => 'granulés enrobés en vrac',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        208 => 
        array (
            'id_famille' => 1209,
            'nom_famille' => '5 mg/10 ml, collyre en flacon',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        209 => 
        array (
            'id_famille' => 1210,
        'nom_famille' => 'solution injectable en ampoule (I.M.)',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        210 => 
        array (
            'id_famille' => 1211,
            'nom_famille' => 'suspension buvable édulcorée au maltitol liquide et à la saccharine sodique',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        211 => 
        array (
            'id_famille' => 1212,
            'nom_famille' => '1 % D\'ACIDES AMINES, solution pour dialyse péritonéale',
            'created_at' => '2023-12-17 07:49:08',
            'updated_at' => '2023-12-17 07:49:08',
        ),
        212 => 
        array (
            'id_famille' => 1213,
        'nom_famille' => '4 ml), collyre en solution en récipient unidose',
        'created_at' => '2023-12-17 07:49:08',
        'updated_at' => '2023-12-17 07:49:08',
    ),
    213 => 
    array (
        'id_famille' => 1214,
    'nom_famille' => 'dispersion injectable. Vaccin contre la COVID-19 (recombinant avec adjuvant)',
        'created_at' => '2023-12-17 07:49:08',
        'updated_at' => '2023-12-17 07:49:08',
    ),
    214 => 
    array (
        'id_famille' => 1215,
        'nom_famille' => '8 mg, solution pour pulvérisation nasale en récipient unidose',
        'created_at' => '2023-12-17 07:49:08',
        'updated_at' => '2023-12-17 07:49:08',
    ),
    215 => 
    array (
        'id_famille' => 1216,
        'nom_famille' => '2 mg, trousse pour préparation radiopharmaceutique',
        'created_at' => '2023-12-17 07:49:08',
        'updated_at' => '2023-12-17 07:49:08',
    ),
    216 => 
    array (
        'id_famille' => 1217,
        'nom_famille' => 'poudre et solution pour injection. Trousse pour préparation radiopharmaceutique',
        'created_at' => '2023-12-17 07:49:08',
        'updated_at' => '2023-12-17 07:49:08',
    ),
    217 => 
    array (
        'id_famille' => 1218,
        'nom_famille' => '12 mg/ 0,4 ml, collyre en récipient unidose',
        'created_at' => '2023-12-17 07:49:08',
        'updated_at' => '2023-12-17 07:49:08',
    ),
    218 => 
    array (
        'id_famille' => 1219,
    'nom_famille' => '5 microgrammes/24 heures (7,5 mg/16,5 cm2), dispositif transdermique',
        'created_at' => '2023-12-17 07:49:08',
        'updated_at' => '2023-12-17 07:49:08',
    ),
    219 => 
    array (
        'id_famille' => 1220,
        'nom_famille' => '06 POUR CENT, gel pour application cutanée en flacon avec pompe doseuse',
        'created_at' => '2023-12-17 07:49:08',
        'updated_at' => '2023-12-17 07:49:08',
    ),
    220 => 
    array (
        'id_famille' => 1221,
        'nom_famille' => '5 mg/0,5 ml, solution auriculaire en récipient unidose',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    221 => 
    array (
        'id_famille' => 1222,
        'nom_famille' => '5 mg/0,5 ml, solution pour instillation auriculaire en récipient unidose',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    222 => 
    array (
        'id_famille' => 1223,
        'nom_famille' => 'comprimé orodispersible sécable',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    223 => 
    array (
        'id_famille' => 1224,
        'nom_famille' => '3 mg/ml, dispersion à diluer pour perfusion',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    224 => 
    array (
        'id_famille' => 1225,
        'nom_famille' => '5 mg, comprimé + 25 mg, comprimé pelliculé',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    225 => 
    array (
        'id_famille' => 1226,
        'nom_famille' => 'vernis à ongle médicamenteux',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    226 => 
    array (
        'id_famille' => 1227,
        'nom_famille' => '1 %, solution vaginale en récipient unidose',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    227 => 
    array (
        'id_famille' => 1228,
    'nom_famille' => '25 POUR CENT (0,625 mg/0,25 ml), collyre en récipient unidose',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    228 => 
    array (
        'id_famille' => 1229,
    'nom_famille' => '50 POUR CENT (1,25 mg/0,25 ml), collyre en récipient unidose',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    229 => 
    array (
        'id_famille' => 1230,
        'nom_famille' => '18 mg, comprimé',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    230 => 
    array (
        'id_famille' => 1231,
        'nom_famille' => '26 mg, comprimé à libération prolongée',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    231 => 
    array (
        'id_famille' => 1232,
        'nom_famille' => '52 mg, comprimé à libération prolongée',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    232 => 
    array (
        'id_famille' => 1233,
        'nom_famille' => '7 mg, comprimé',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    233 => 
    array (
        'id_famille' => 1234,
        'nom_famille' => '05 mg, comprimé à libération prolongée',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    234 => 
    array (
        'id_famille' => 1235,
        'nom_famille' => '1 mg, comprimé à libération prolongée',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    235 => 
    array (
        'id_famille' => 1236,
        'nom_famille' => 'comprimés sublinguaux',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    236 => 
    array (
        'id_famille' => 1237,
        'nom_famille' => 'gel périodontal',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    237 => 
    array (
        'id_famille' => 1238,
        'nom_famille' => '7 ml, solution injectable',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    238 => 
    array (
        'id_famille' => 1239,
        'nom_famille' => '5 mg, solution injectable en seringue préremplie',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    239 => 
    array (
        'id_famille' => 1240,
        'nom_famille' => '25 mg/0,5 ml, solution injectable',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    240 => 
    array (
        'id_famille' => 1241,
        'nom_famille' => '6 ml, solution injectable en ampoule',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    241 => 
    array (
        'id_famille' => 1242,
        'nom_famille' => 'comprimé à sucer/à croquer',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    242 => 
    array (
        'id_famille' => 1243,
        'nom_famille' => 'comprimé sublingual. ORYLMYTE 300 IR, comprimé sublingual',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    243 => 
    array (
        'id_famille' => 1244,
        'nom_famille' => 'comprimé pelliculé, OTEZLA 20 mg, comprimé pelliculé, OTEZLA 30 mg, comprimé pelliculé,',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    244 => 
    array (
        'id_famille' => 1245,
        'nom_famille' => 'solution auriculaire en gouttes',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    245 => 
    array (
        'id_famille' => 1246,
        'nom_famille' => '75 ml, solution injectable',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    246 => 
    array (
        'id_famille' => 1247,
        'nom_famille' => 'solution pour marquage in vitro des éléments figurés du sang',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    247 => 
    array (
        'id_famille' => 1248,
        'nom_famille' => '5 mg/0,5mL, solution injectable',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    248 => 
    array (
        'id_famille' => 1249,
        'nom_famille' => 'poudre pour solution buvable et gastro-entérale en sachet-dose',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    249 => 
    array (
        'id_famille' => 1250,
        'nom_famille' => '33 mg/ml, solution buvable édulcorée à lacésulfame potassique',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    250 => 
    array (
        'id_famille' => 1251,
        'nom_famille' => '33 mg/ml SANS SUCRE, solution buvable édulcorée à lacésulfame potassique en flacon',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    251 => 
    array (
        'id_famille' => 1252,
        'nom_famille' => '5 mg, comprimé à libération prolongée',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    252 => 
    array (
        'id_famille' => 1253,
        'nom_famille' => '5 mg/1,25 mg, comprimé à libération prolongée',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    253 => 
    array (
        'id_famille' => 1254,
        'nom_famille' => '5 mg comprimé à libération prolongée',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    254 => 
    array (
        'id_famille' => 1255,
        'nom_famille' => 'gaz pour inhalation, pour évaporateur fixe',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    255 => 
    array (
        'id_famille' => 1256,
        'nom_famille' => 'gaz pour inhalation, en évaporateur mobile et en récipient cryogénique mobile',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    256 => 
    array (
        'id_famille' => 1257,
        'nom_famille' => 'gaz pour inhalation, pour évaporateur fixe et pour récipient cryogénique fixe',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    257 => 
    array (
        'id_famille' => 1258,
        'nom_famille' => 'gaz pour inhalation pour évaporateur fixe',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    258 => 
    array (
        'id_famille' => 1259,
        'nom_famille' => 'gaz pour inhalation, en évaporateur et récipient cryogénique mobile',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    259 => 
    array (
        'id_famille' => 1260,
        'nom_famille' => '25 mg, solution injectable en stylo prérempli',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    260 => 
    array (
        'id_famille' => 1261,
        'nom_famille' => '1 POUR CENT, sirop',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    261 => 
    array (
        'id_famille' => 1262,
        'nom_famille' => 'suspension injectable à libération prolongée en seringue préremplie',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    262 => 
    array (
        'id_famille' => 1263,
        'nom_famille' => 'suspension injectable à libération prolongée',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    263 => 
    array (
        'id_famille' => 1264,
        'nom_famille' => 'gel pour application buccale',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    264 => 
    array (
        'id_famille' => 1265,
        'nom_famille' => 'comprimé gastrorésistant',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    265 => 
    array (
        'id_famille' => 1266,
        'nom_famille' => 'granulés orodispersibles',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    266 => 
    array (
        'id_famille' => 1267,
        'nom_famille' => 'poudre pour solution buvable en sachet édulcorée à laspartam',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    267 => 
    array (
        'id_famille' => 1268,
        'nom_famille' => '5 mg inhibition de la lactation, comprimé sécable',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    268 => 
    array (
        'id_famille' => 1269,
        'nom_famille' => 'gel pour usage dentaire',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    269 => 
    array (
        'id_famille' => 1270,
        'nom_famille' => '12 POUR CENT, solution pour bain de bouche',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    270 => 
    array (
        'id_famille' => 1271,
        'nom_famille' => '5 mg, solution injectable',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    271 => 
    array (
        'id_famille' => 1272,
        'nom_famille' => 'pâte à sucer',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    272 => 
    array (
        'id_famille' => 1273,
        'nom_famille' => '2 POUR CENT, sirop',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    273 => 
    array (
        'id_famille' => 1274,
        'nom_famille' => 'solution injectable en stylo injecteur prérempli',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    274 => 
    array (
        'id_famille' => 1275,
        'nom_famille' => 'poudre pour aérosol et pour usage parentéral',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    275 => 
    array (
        'id_famille' => 1276,
        'nom_famille' => 'trousse pour préparation de la solution injectable de pentétate de Technétium [99m Tc]',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    276 => 
    array (
        'id_famille' => 1277,
        'nom_famille' => 'suspension rectale',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    277 => 
    array (
        'id_famille' => 1278,
    'nom_famille' => 'poudre et suspension pour suspension injectable en seringue préremplie. Vaccin diphtérique, tétanique, coquelucheux (acellulaire, multicomposé), poliomyélitique (inactivé) et conjugué de l\'haemophilus type b, adsorbé',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    278 => 
    array (
        'id_famille' => 1279,
        'nom_famille' => '9 %, liquide pour inhalation par vapeur de 3 mL',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    279 => 
    array (
        'id_famille' => 1280,
        'nom_famille' => '15 % ADULTES, sirop',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    280 => 
    array (
        'id_famille' => 1281,
        'nom_famille' => '15 % ENFANTS, sirop',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    281 => 
    array (
        'id_famille' => 1282,
        'nom_famille' => 'gel buvable en sachet-dose',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    282 => 
    array (
        'id_famille' => 1283,
        'nom_famille' => 'solution injectable à diluer pour voie I.V.',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    283 => 
    array (
        'id_famille' => 1284,
        'nom_famille' => '48 mL, solution injectable en stylo prérempli',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    284 => 
    array (
        'id_famille' => 1285,
        'nom_famille' => '72 mL, solution injectable en stylo prérempli',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    285 => 
    array (
        'id_famille' => 1286,
        'nom_famille' => '44 mL, solution injectable en stylo prérempli',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    286 => 
    array (
        'id_famille' => 1287,
        'nom_famille' => '5 mg/0,625 mg, comprimé pelliculé',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    287 => 
    array (
        'id_famille' => 1288,
        'nom_famille' => '625 mg, comprimé',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    288 => 
    array (
        'id_famille' => 1289,
        'nom_famille' => '6/E, émulsion pour perfusion',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    289 => 
    array (
        'id_famille' => 1290,
        'nom_famille' => 'solution de cardioplégie/solution pour conservation dorgane',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    290 => 
    array (
        'id_famille' => 1291,
        'nom_famille' => 'solution injectable, ampoule',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    291 => 
    array (
        'id_famille' => 1292,
        'nom_famille' => 'capsule pour inhalation par vapeur',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    292 => 
    array (
        'id_famille' => 1293,
        'nom_famille' => 'solution pour application locale en flacon pulvérisateur',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    293 => 
    array (
        'id_famille' => 1294,
        'nom_famille' => 'poudre pour application cutanée en flacon poudreur',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    294 => 
    array (
        'id_famille' => 1295,
        'nom_famille' => '2 %, crème vaginale',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    295 => 
    array (
        'id_famille' => 1296,
        'nom_famille' => '9 mg, capsule molle vaginale',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    296 => 
    array (
        'id_famille' => 1297,
        'nom_famille' => '9 mg, mini-ovule',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    297 => 
    array (
        'id_famille' => 1298,
        'nom_famille' => '9 mg, ovule',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    298 => 
    array (
        'id_famille' => 1299,
        'nom_famille' => '50 microgrammes/mL, solution injectable',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    299 => 
    array (
        'id_famille' => 1300,
        'nom_famille' => '50 microgrammes/mL, solution injectable en seringue préremplie',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    300 => 
    array (
        'id_famille' => 1301,
        'nom_famille' => 'suppositoires',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    301 => 
    array (
        'id_famille' => 1302,
        'nom_famille' => '04 mg par 4 ml, solution injectable',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    302 => 
    array (
        'id_famille' => 1303,
        'nom_famille' => '33 mmol/ml, solution à diluer pour perfusion',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    303 => 
    array (
        'id_famille' => 1304,
        'nom_famille' => '66 mmol/ml, solution à diluer pour perfusion',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    304 => 
    array (
        'id_famille' => 1305,
        'nom_famille' => '55 mg/5 mL, sirop',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    305 => 
    array (
        'id_famille' => 1306,
        'nom_famille' => 'suspension buvable en sachet dose',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    306 => 
    array (
        'id_famille' => 1307,
        'nom_famille' => '20 mg/ml, solution pour perfusion',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    307 => 
    array (
        'id_famille' => 1308,
        'nom_famille' => '10 mg/ml, solution pour perfusion',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    308 => 
    array (
        'id_famille' => 1309,
        'nom_famille' => 'degré de dilution compris entre 5CH à 30CH et 10DH à 60DH',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    309 => 
    array (
        'id_famille' => 1310,
        'nom_famille' => 'degré de dilution compris entre 5CH et 30CH ou entre 9DH et 60DH',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    310 => 
    array (
        'id_famille' => 1311,
        'nom_famille' => '2 mmol/L PHOSPHATE, solution pour hémodialyse et hémofiltration',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    311 => 
    array (
        'id_famille' => 1312,
        'nom_famille' => '36 % CLEARFLEX, solution pour dialyse péritonéale',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    312 => 
    array (
        'id_famille' => 1313,
        'nom_famille' => '36 %, solution pour dialyse péritonéale',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    313 => 
    array (
        'id_famille' => 1314,
        'nom_famille' => '27 % CLEARFLEX, solution pour dialyse péritonéale',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    314 => 
    array (
        'id_famille' => 1315,
        'nom_famille' => '27 %, solution pour dialyse péritonéale',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    315 => 
    array (
        'id_famille' => 1316,
        'nom_famille' => '86 % CLEARFLEX, solution pour dialyse péritonéale',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    316 => 
    array (
        'id_famille' => 1317,
        'nom_famille' => '86 %, solution pour dialyse péritonéale',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    317 => 
    array (
        'id_famille' => 1318,
    'nom_famille' => 'poudre pour solution injectable (I.M., I.V.)',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    318 => 
    array (
        'id_famille' => 1319,
        'nom_famille' => '25 g, poudre pour solution pour perfusion',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    319 => 
    array (
        'id_famille' => 1320,
        'nom_famille' => 'solution injectable IM en ampoule',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    320 => 
    array (
        'id_famille' => 1321,
        'nom_famille' => 'suspension nasale',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    321 => 
    array (
        'id_famille' => 1322,
        'nom_famille' => 'solution cardioplégique pour voie intracoronaire en poche',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    322 => 
    array (
        'id_famille' => 1323,
        'nom_famille' => '5 POUR CENT, solution pour application cutanée',
        'created_at' => '2023-12-17 07:49:09',
        'updated_at' => '2023-12-17 07:49:09',
    ),
    323 => 
    array (
        'id_famille' => 1324,
        'nom_famille' => 'solution injectable en seringue préremplie. Vaccin pneumococcique polyosidique',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    324 => 
    array (
        'id_famille' => 1325,
        'nom_famille' => 'sirop édulcoré à la saccharine sodique et au cyclamate de sodium',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    325 => 
    array (
        'id_famille' => 1326,
        'nom_famille' => 'granulé',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    326 => 
    array (
        'id_famille' => 1327,
        'nom_famille' => 'solution auriculaire, gouttes',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    327 => 
    array (
        'id_famille' => 1328,
        'nom_famille' => 'gel oral en sachet-dose',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    328 => 
    array (
        'id_famille' => 1329,
        'nom_famille' => 'gel oral en tube',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    329 => 
    array (
        'id_famille' => 1330,
        'nom_famille' => 'sirop en sachet-dose',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    330 => 
    array (
        'id_famille' => 1331,
        'nom_famille' => 'granulés enrobés',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    331 => 
    array (
        'id_famille' => 1332,
        'nom_famille' => '18 mg, comprimé sécable',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    332 => 
    array (
        'id_famille' => 1333,
        'nom_famille' => '7 mg, comprimé sécable',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    333 => 
    array (
        'id_famille' => 1334,
        'nom_famille' => '70 mg, comprimé',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    334 => 
    array (
        'id_famille' => 1335,
        'nom_famille' => '05 mg, comprimé à libération prolongé',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    335 => 
    array (
        'id_famille' => 1336,
        'nom_famille' => '7 mg comprimé',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    336 => 
    array (
        'id_famille' => 1337,
        'nom_famille' => '26 mg, comprimé à libération prolongé',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    337 => 
    array (
        'id_famille' => 1338,
        'nom_famille' => '5 g/50 ml, solution injectable/pour perfusion',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    338 => 
    array (
        'id_famille' => 1339,
        'nom_famille' => '91 mg/ml, solution injectable en seringue préremplie',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    339 => 
    array (
        'id_famille' => 1340,
        'nom_famille' => 'gel stérile intracervical',
        'created_at' => '2023-12-17 07:49:10',
        'updated_at' => '2023-12-17 07:49:10',
    ),
    340 => 
    array (
        'id_famille' => 1341,
    'nom_famille' => 'adsorbé)',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
341 => 
array (
    'id_famille' => 1342,
    'nom_famille' => '40 ml, solution injectable en seringue préremplie',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
342 => 
array (
    'id_famille' => 1343,
    'nom_famille' => '5 mg/ 0,31 ml,solution injectable en seringue préremplie',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
343 => 
array (
    'id_famille' => 1344,
    'nom_famille' => '38 ml, solution injectable en seringue préremplie',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
344 => 
array (
    'id_famille' => 1345,
    'nom_famille' => '5 mg/ 0,44 ml, solution injectable en seringue préremplie',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
345 => 
array (
    'id_famille' => 1346,
    'nom_famille' => '50 ml, solution injectable en seringue préremplie',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
346 => 
array (
    'id_famille' => 1347,
    'nom_famille' => '63 ml, solution injectable en seringue préremplie',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
347 => 
array (
    'id_famille' => 1348,
    'nom_famille' => '5 mg/ 0,30 ml, solution injectable en seringue préremplie',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
348 => 
array (
    'id_famille' => 1349,
    'nom_famille' => '25 mmol/mL, solution injectable en seringue préremplie',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
349 => 
array (
    'id_famille' => 1350,
    'nom_famille' => '1 %, solution buvable édulcorée au cyclamate de sodium et à la saccharine sodique',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
350 => 
array (
    'id_famille' => 1351,
    'nom_famille' => 'poudre et solvant pour solution injectable en seringue préremplie. Vaccin rougeoleux, des oreillons et rubéoleux vivant',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
351 => 
array (
    'id_famille' => 1352,
    'nom_famille' => 'solution pour hémofiltration et hémodialyse',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
352 => 
array (
    'id_famille' => 1353,
    'nom_famille' => 'solution à diluer pour perfusion/solution injectable',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
353 => 
array (
    'id_famille' => 1354,
'nom_famille' => 'poudre pour solution injectable (I.V.) en flacon',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
354 => 
array (
    'id_famille' => 1355,
    'nom_famille' => 'soluton injectable',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
355 => 
array (
    'id_famille' => 1356,
    'nom_famille' => 'poudre et solvant pour solution injectable / perfusion',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
356 => 
array (
    'id_famille' => 1357,
    'nom_famille' => 'poudre pour inhalation en récipient uni',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
357 => 
array (
    'id_famille' => 1358,
    'nom_famille' => 'émulsion injectable/pour perfusion',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
358 => 
array (
    'id_famille' => 1359,
    'nom_famille' => 'émulsion injectable ou pour perfusion',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
359 => 
array (
    'id_famille' => 1360,
'nom_famille' => 'émulsion injectable (IV)',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
360 => 
array (
    'id_famille' => 1361,
    'nom_famille' => 'solution nasale',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
361 => 
array (
    'id_famille' => 1362,
    'nom_famille' => 'sirop édulcoré au sorbitol',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
362 => 
array (
    'id_famille' => 1363,
    'nom_famille' => '5 mg/1 ml, solution injectable',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
363 => 
array (
    'id_famille' => 1364,
    'nom_famille' => '03 %, pommade',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
364 => 
array (
    'id_famille' => 1365,
    'nom_famille' => 'gaz pour inhalation en bouteille',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
365 => 
array (
    'id_famille' => 1366,
    'nom_famille' => 'poudre effervescente pour suspension buvable en sachet',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
366 => 
array (
    'id_famille' => 1367,
    'nom_famille' => 'plante en vrac',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
367 => 
array (
    'id_famille' => 1368,
    'nom_famille' => 'solution buvable édulcorée au maltitol liquide et à la saccharine sodique',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
368 => 
array (
    'id_famille' => 1369,
    'nom_famille' => 'Creuset de graphite pour la préparation de Technegas pour inhalation',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
369 => 
array (
    'id_famille' => 1370,
    'nom_famille' => '5 ml, solution pour inhalation par nébuliseur',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
370 => 
array (
    'id_famille' => 1371,
    'nom_famille' => '36 ml, solution injectable',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
371 => 
array (
    'id_famille' => 1372,
    'nom_famille' => '72 ml, solution injectable',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
372 => 
array (
    'id_famille' => 1373,
    'nom_famille' => '08 ml, solution injectable',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
373 => 
array (
    'id_famille' => 1374,
    'nom_famille' => '5 mg/ml, collyre en solution',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
374 => 
array (
    'id_famille' => 1375,
    'nom_famille' => 'gel buccal et gingival',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
375 => 
array (
    'id_famille' => 1376,
    'nom_famille' => 'solution buccale et gingivale',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
376 => 
array (
    'id_famille' => 1377,
    'nom_famille' => '3 GBq/ml , solution injectable',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
377 => 
array (
    'id_famille' => 1378,
    'nom_famille' => 'poudre pour solution rectale',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
378 => 
array (
    'id_famille' => 1379,
    'nom_famille' => 'solution injectable pour perfusion IV',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
379 => 
array (
    'id_famille' => 1380,
    'nom_famille' => '5 mg/0,5 ml, collyre en récipient unidose',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
380 => 
array (
    'id_famille' => 1381,
    'nom_famille' => 'patch cutané',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
381 => 
array (
    'id_famille' => 1382,
'nom_famille' => 'poudre et solvant pour solution injectable en seringue préremplie. Vaccin rabique (inactivé)',
    'created_at' => '2023-12-17 07:49:10',
    'updated_at' => '2023-12-17 07:49:10',
),
382 => 
array (
    'id_famille' => 1383,
'nom_famille' => '5 mg/ml), solution injectable',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
383 => 
array (
'id_famille' => 1384,
'nom_famille' => '5 ml, solution injectable ou pour perfusion',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
384 => 
array (
'id_famille' => 1385,
'nom_famille' => '8 ml, solution injectable ou pour perfusion',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
385 => 
array (
'id_famille' => 1386,
'nom_famille' => '1 g/ml, liquide oral',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
386 => 
array (
'id_famille' => 1387,
'nom_famille' => '8 microgrammes, solution injectable en seringue préremplie / REBIF 22 microgrammes, solution injectable en seringue préremplie',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
387 => 
array (
'id_famille' => 1388,
'nom_famille' => '8 microgrammes, solution injectable en stylo prérempli / REBIF 22 microgrammes, solution injectable en stylo prérempli',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
388 => 
array (
'id_famille' => 1389,
'nom_famille' => '4 g/10,8 g, solution buvable',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
389 => 
array (
'id_famille' => 1390,
'nom_famille' => 'poudre et solvant pour solution injectable en seringue préremplie',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
390 => 
array (
'id_famille' => 1391,
'nom_famille' => 'solution pour hémofiltration',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
391 => 
array (
'id_famille' => 1392,
'nom_famille' => '36 mL, solution injectable en stylo prérempli',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
392 => 
array (
'id_famille' => 1393,
'nom_famille' => '08 mL, solution injectable en stylo prérempli',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
393 => 
array (
'id_famille' => 1394,
'nom_famille' => '16 mL, solution injectable en stylo prérempli',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
394 => 
array (
'id_famille' => 1395,
'nom_famille' => '6 ml, solution injectable',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
395 => 
array (
'id_famille' => 1396,
'nom_famille' => 'poudre pour inhalation, en récipient unidose',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
396 => 
array (
'id_famille' => 1397,
'nom_famille' => 'comprimé à croquer édulcoré au sorbitol',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
397 => 
array (
'id_famille' => 1398,
'nom_famille' => 'suspension buvable édulcorée à la saccharine sodique en sachet-dose',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
398 => 
array (
'id_famille' => 1399,
'nom_famille' => '8 g, poudre pour suspension buvable',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
399 => 
array (
'id_famille' => 1400,
'nom_famille' => '4 g, poudre pour suspension buvable',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
400 => 
array (
'id_famille' => 1401,
'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin diphtérique, tétanique, coquelucheux (acellulaire, multicomposé) et poliomyélitique (inactivé), (adsorbé, à teneur réduite en antigène(s))',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
401 => 
array (
'id_famille' => 1402,
'nom_famille' => 'poudre pour suspension orale/rectale',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
402 => 
array (
'id_famille' => 1403,
'nom_famille' => 'poudre et solvant pour solution injectable/ perfusion',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
403 => 
array (
'id_famille' => 1404,
'nom_famille' => '025 %, crème',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
404 => 
array (
'id_famille' => 1405,
'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin diphtérique, tétanique et poliomyélitique (inactivé), adsorbé, à teneur réduite en antigènes',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
405 => 
array (
'id_famille' => 1406,
'nom_famille' => 'solution buvable édulcorée au sorbitol',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
406 => 
array (
'id_famille' => 1407,
'nom_famille' => 'suspension pour pulvérisation buccale',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
407 => 
array (
'id_famille' => 1408,
'nom_famille' => 'solution nasale pour pulvérisation',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
408 => 
array (
'id_famille' => 1409,
'nom_famille' => 'poudre pour solution injectable/perfusion',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
409 => 
array (
'id_famille' => 1410,
'nom_famille' => 'solution injectable (IV, intracoronaire) en ampoule',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
410 => 
array (
'id_famille' => 1411,
'nom_famille' => '5 mg/2 ml, poudre et solvant pour suspension injectable à libération prolongée en seringue préremplie',
'created_at' => '2023-12-17 07:49:10',
'updated_at' => '2023-12-17 07:49:10',
),
411 => 
array (
'id_famille' => 1412,
'nom_famille' => '6 mg/24 heures, dispositif transdermique',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
412 => 
array (
'id_famille' => 1413,
'nom_famille' => '5 mg/24 heures, dispositif transdermique',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
413 => 
array (
'id_famille' => 1414,
'nom_famille' => '6 mg/24 h, patch transdermique',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
414 => 
array (
'id_famille' => 1415,
'nom_famille' => '5 mg/24 h, patch transdermique',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
415 => 
array (
'id_famille' => 1416,
'nom_famille' => '6 mg/24h, dispositif transdermique',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
416 => 
array (
'id_famille' => 1417,
'nom_famille' => '5 mg/24h, dispositif transdermique',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
417 => 
array (
'id_famille' => 1418,
'nom_famille' => 'solution à diluer injectable en ampoules',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
418 => 
array (
'id_famille' => 1419,
'nom_famille' => '5 mg/ml, solution buvable en goutte',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
419 => 
array (
'id_famille' => 1420,
'nom_famille' => '05 POUR CENT, gel pour application locale',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
420 => 
array (
'id_famille' => 1421,
'nom_famille' => '2 g, suspension buvable en sachet-dose',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
421 => 
array (
'id_famille' => 1422,
'nom_famille' => 'solution buvable, ampoules',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
422 => 
array (
'id_famille' => 1423,
'nom_famille' => 'comprimé pelliculé à libération prolongé',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
423 => 
array (
'id_famille' => 1424,
'nom_famille' => '4DH et 6DH',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
424 => 
array (
'id_famille' => 1425,
'nom_famille' => 'suspension buvable en applicateur prérempli pour administration orale. Vaccin à rotavirus, vivant',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
425 => 
array (
'id_famille' => 1426,
'nom_famille' => 'suspension buvable en tube souple. Vaccin à rotavirus, vivant',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
426 => 
array (
'id_famille' => 1427,
'nom_famille' => 'solution buvable. Vaccin Rotavirus (vivant, oral)',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
427 => 
array (
'id_famille' => 1428,
'nom_famille' => '5 mg, trousse pour préparation radiopharmaceutique',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
428 => 
array (
'id_famille' => 1429,
'nom_famille' => '5 MILLIONS D\'UNITES INTERNATIONALES, lyophilisat pour usage parentéral',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
429 => 
array (
'id_famille' => 1430,
'nom_famille' => '75 %, crème',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
430 => 
array (
'id_famille' => 1431,
'nom_famille' => '75 %, gel',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
431 => 
array (
'id_famille' => 1432,
'nom_famille' => '75 %, émulsion pour application cutanée',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
432 => 
array (
'id_famille' => 1433,
'nom_famille' => '83 mg/ml, solution injectable en cartouche',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
433 => 
array (
'id_famille' => 1434,
'nom_famille' => 'solution pour perfusion intraveineuse en ampoule',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
434 => 
array (
'id_famille' => 1435,
'nom_famille' => '5 mg/2,5 ml, solution pour inhalation par nébuliseur en récipient unidose',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
435 => 
array (
'id_famille' => 1436,
'nom_famille' => '5 ml, solution pour inhalation par nébuliseur en récipient unidose',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
436 => 
array (
'id_famille' => 1437,
'nom_famille' => '25 mg, poudre et solvant pour suspension injectable à libération prolongée',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
437 => 
array (
'id_famille' => 1438,
'nom_famille' => 'poudre et solvant pour suspension injectable',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
438 => 
array (
'id_famille' => 1439,
'nom_famille' => 'décocté WELEDA, degré de dilution compris entre 3CH et 30CH ou entre 5DH et 60DH',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
439 => 
array (
'id_famille' => 1440,
'nom_famille' => '50 mg, comprimé enrobé',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
440 => 
array (
'id_famille' => 1441,
'nom_famille' => 'mélange de plantes pour tisane en sachet',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
441 => 
array (
'id_famille' => 1442,
'nom_famille' => 'mélange de plantes pour tisane en vrac',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
442 => 
array (
'id_famille' => 1443,
'nom_famille' => 'plantes pour tisane en sachet',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
443 => 
array (
'id_famille' => 1444,
'nom_famille' => 'plantes pour tisane en vrac',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
444 => 
array (
'id_famille' => 1445,
'nom_famille' => 'granulés effervescents en sachet-dose',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
445 => 
array (
'id_famille' => 1446,
'nom_famille' => '5 g/5 ml ENFANTS, solution buvable en ampoule',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
446 => 
array (
'id_famille' => 1447,
'nom_famille' => 'comprimé à croquer édulcoré à la saccharine sodique et au cyclamate de sodium',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
447 => 
array (
'id_famille' => 1448,
'nom_famille' => 'poudre et solvant pour solution à diluer pour perfusion.',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
448 => 
array (
'id_famille' => 1449,
'nom_famille' => 'trousse et  trousse pour préparation radiopharmaceutique',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
449 => 
array (
'id_famille' => 1450,
'nom_famille' => '5 mg/2 ml, solution injectable',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
450 => 
array (
'id_famille' => 1451,
'nom_famille' => '25 POUR MILLE, collyre en solution',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
451 => 
array (
'id_famille' => 1452,
'nom_famille' => '25 POUR MILLE, collyre en récipient unidose',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
452 => 
array (
'id_famille' => 1453,
'nom_famille' => '75 mg, comprimé pelliculé sécable à libération prolongée',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
453 => 
array (
'id_famille' => 1454,
'nom_famille' => 'mélange de plantes pour tisane, sachets-dose',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
454 => 
array (
'id_famille' => 1455,
'nom_famille' => 'suspension pour inhalation en flacon pressurisé avec valve doseuse',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
455 => 
array (
'id_famille' => 1456,
'nom_famille' => 'poudre et suspension pour suspension injectable. Vaccin zona (recombinant, avec adjuvant)',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
456 => 
array (
'id_famille' => 1457,
'nom_famille' => 'granulés à libération prolongée',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
457 => 
array (
'id_famille' => 1458,
'nom_famille' => '5 mg/g, gel ophtalmique',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
458 => 
array (
'id_famille' => 1459,
'nom_famille' => '3 mg, solution injectable',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
459 => 
array (
'id_famille' => 1460,
'nom_famille' => '6 mg, solution injectable',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
460 => 
array (
'id_famille' => 1461,
'nom_famille' => '9 mg, solution injectable',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
461 => 
array (
'id_famille' => 1462,
'nom_famille' => 'poudre et solvant pour solution injectable ou pour perfusion',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
462 => 
array (
'id_famille' => 1463,
'nom_famille' => '05 mg/ml, solution injectable ou solution à diluer pour perfusion en seringue préremplie',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
463 => 
array (
'id_famille' => 1464,
'nom_famille' => '1 mg/ml, solution injectable ou solution à diluer pour perfusion en seringue préremplie',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
464 => 
array (
'id_famille' => 1465,
'nom_famille' => '5 mg/ml, solution injectable ou solution à diluer pour perfusion en seringue préremplie',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
465 => 
array (
'id_famille' => 1466,
'nom_famille' => 'comprimé buccogingival muco adhésif',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
466 => 
array (
'id_famille' => 1467,
'nom_famille' => '2 mg implant',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
467 => 
array (
'id_famille' => 1468,
'nom_famille' => 'microgranules à libération prolongée en gélule',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
468 => 
array (
'id_famille' => 1469,
'nom_famille' => 'crème pour application cutanée',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
469 => 
array (
'id_famille' => 1470,
'nom_famille' => '35 mg/ml, collyre en solution en récipient unidose',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
470 => 
array (
'id_famille' => 1471,
'nom_famille' => '2 mg, comprimé à sucer',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
471 => 
array (
'id_famille' => 1472,
'nom_famille' => '250 mg, poudre et solvant pour solution injectable',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
472 => 
array (
'id_famille' => 1473,
'nom_famille' => '25 mg/1 ml, poudre et solvant pour solution pour perfusion',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
473 => 
array (
'id_famille' => 1474,
'nom_famille' => 'poudre et solvant pour suspension injectable (IM) à libération prolongée',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
474 => 
array (
'id_famille' => 1475,
'nom_famille' => 'poudre et solvant pour dispersion injectable',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
475 => 
array (
'id_famille' => 1476,
'nom_famille' => 'solution injectable ou pour perfusion en seringue préremplie',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
476 => 
array (
'id_famille' => 1477,
'nom_famille' => 'granulés en sachet dose',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
477 => 
array (
'id_famille' => 1478,
'nom_famille' => 'poudre effervescente pour suspension buvable en sachet-dose',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
478 => 
array (
'id_famille' => 1479,
'nom_famille' => 'poudre effervescente pour suspension buvable en sachet dose',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
479 => 
array (
'id_famille' => 1480,
'nom_famille' => 'solution injectable (IV) en ampoule',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
480 => 
array (
'id_famille' => 1481,
'nom_famille' => '2 mg/mL, dispersion injectable. Vaccin à ARNm contre la COVID-19',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
481 => 
array (
'id_famille' => 1482,
'nom_famille' => 'dispersion injectable, Vaccin à ARNm contre la COVID-19',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
482 => 
array (
'id_famille' => 1483,
'nom_famille' => 'dispersion injectable. Vaccin à ARNm contre la COVID-19',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
483 => 
array (
'id_famille' => 1484,
'nom_famille' => '5 microgrammes/2,5 microgrammes/ dose, solution à inhaler',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
484 => 
array (
'id_famille' => 1485,
'nom_famille' => '5 MUI/250 mg, comprimé pelliculé',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
485 => 
array (
'id_famille' => 1486,
'nom_famille' => '5 M UI/250 mg, comprimé pelliculé',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
486 => 
array (
'id_famille' => 1487,
'nom_famille' => 'degré de dilution compris entre 4CH et 30CH ou entre 8DH et 60DHSPIRITUS QUERCUS GLANDIUM BOIRON, degré de dilution compris entre 4CH et 30CH ou entre 8DH et 60DH',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
487 => 
array (
'id_famille' => 1488,
'nom_famille' => '5 microgrammes/dose, solution à inhaler',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
488 => 
array (
'id_famille' => 1489,
'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin leptospires inactivé',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
489 => 
array (
'id_famille' => 1490,
'nom_famille' => 'granulé à croquer',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
490 => 
array (
'id_famille' => 1491,
'nom_famille' => 'poudre et solvant pour suspension injectable en récipient multidose, Vaccin de la fièvre jaune (vivant)',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
491 => 
array (
'id_famille' => 1492,
'nom_famille' => 'poudre et solvant pour suspension injectable en seringue préremplie. Vaccin de la fièvre jaune (Vivant)',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
492 => 
array (
'id_famille' => 1493,
'nom_famille' => 'pommade ophtalmique en récipient unidose',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
493 => 
array (
'id_famille' => 1494,
'nom_famille' => '5 POUR CENT, solution pour application locale',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
494 => 
array (
'id_famille' => 1495,
'nom_famille' => '5 ml, solution buvable en ampoule',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
495 => 
array (
'id_famille' => 1496,
'nom_famille' => '5 ml, solution injectable IM en ampoule',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
496 => 
array (
'id_famille' => 1497,
'nom_famille' => 'sirop édulcoré au sorbitol et au maltitol liquide',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
497 => 
array (
'id_famille' => 1498,
'nom_famille' => '75 mg ORANGE SANS SUCRE, pastille édulcorée à l\'acésulfame potassique',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
498 => 
array (
'id_famille' => 1499,
'nom_famille' => '75 mg, pastille',
'created_at' => '2023-12-17 07:49:11',
'updated_at' => '2023-12-17 07:49:11',
),
499 => 
array (
'id_famille' => 1500,
'nom_famille' => 'pastille édulcorée à l\'isomalt, au maltitol et à la saccharine sodique',
'created_at' => '2023-12-17 07:49:12',
'updated_at' => '2023-12-17 07:49:12',
),
));
        \DB::table('visite__famille_medicament')->insert(array (
            0 => 
            array (
                'id_famille' => 1501,
                'nom_famille' => 'poudre pour préparation injectable',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            1 => 
            array (
                'id_famille' => 1502,
                'nom_famille' => '5 mg, comprimé sublingual',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            2 => 
            array (
                'id_famille' => 1503,
            'nom_famille' => 'solution injectable (I.V. ou péridurale)',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            3 => 
            array (
                'id_famille' => 1504,
            'nom_famille' => 'solution injectable (I.V. ou péridurale) en ampoule',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            4 => 
            array (
                'id_famille' => 1505,
            'nom_famille' => 'solution injectable (I.V.ou péridurale)',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            5 => 
            array (
                'id_famille' => 1506,
            'nom_famille' => 'solution injectable (IV ou péridurale)',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            6 => 
            array (
                'id_famille' => 1507,
            'nom_famille' => '15 g/ml), solution injectable (I.V.) en ampoule',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            7 => 
            array (
                'id_famille' => 1508,
                'nom_famille' => '15 g/ml, solution injectable',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            8 => 
            array (
                'id_famille' => 1509,
                'nom_famille' => 'CIS bio international, suspension colloïdale injectable pour voie intra-articulaire [Référence : RE-186-MM-1]',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            9 => 
            array (
                'id_famille' => 1510,
            'nom_famille' => '5 ml, solution injectable en seringue préremplie (voie SC)',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            10 => 
            array (
                'id_famille' => 1511,
                'nom_famille' => 'suppositoire en vrac',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            11 => 
            array (
                'id_famille' => 1512,
                'nom_famille' => 'suppositoire en récipient multidose',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            12 => 
            array (
                'id_famille' => 1513,
                'nom_famille' => 'solution buvable édulcorée au sucralose',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            13 => 
            array (
                'id_famille' => 1514,
                'nom_famille' => '250 mg, comprimé',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            14 => 
            array (
                'id_famille' => 1515,
                'nom_famille' => '500 mg, comprimé',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            15 => 
            array (
                'id_famille' => 1516,
                'nom_famille' => 'solution buvable, flacon',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            16 => 
            array (
                'id_famille' => 1517,
                'nom_famille' => 'décocté WELEDA, degré de dilution compris entre 3CH et 30CH ou entre 6DH et 60DH',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            17 => 
            array (
                'id_famille' => 1518,
                'nom_famille' => 'suspension injectable I.M.',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            18 => 
            array (
                'id_famille' => 1519,
                'nom_famille' => '2 mg/dose, solution pour pulvérisation nasale',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            19 => 
            array (
                'id_famille' => 1520,
                'nom_famille' => 'matrice pour collage tissulaire',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            20 => 
            array (
                'id_famille' => 1521,
                'nom_famille' => 'poudre pour solution pour inhalation par nébuliseur',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            21 => 
            array (
                'id_famille' => 1522,
                'nom_famille' => '4 mg, gélule à libération prolongée',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            22 => 
            array (
                'id_famille' => 1523,
                'nom_famille' => '4 mg, comprimé à libération prolongé',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            23 => 
            array (
                'id_famille' => 1524,
                'nom_famille' => '4 mg, comprimé à libération prolongée',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            24 => 
            array (
                'id_famille' => 1525,
                'nom_famille' => 'poudre et solvant pour solution injectable/pour perfusion ou solution buvable',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            25 => 
            array (
                'id_famille' => 1526,
                'nom_famille' => '5 microgrammes, capsule molle',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            26 => 
            array (
                'id_famille' => 1527,
                'nom_famille' => '35 mg, comprimé',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            27 => 
            array (
                'id_famille' => 1528,
                'nom_famille' => '4 - 2 x 100 000 000 cellules, dispersion pour perfusion',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            28 => 
            array (
                'id_famille' => 1529,
                'nom_famille' => '2 mg trousse pour préparation radiopharmaceutique',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            29 => 
            array (
                'id_famille' => 1530,
                'nom_famille' => 'trousse pour la préparation de la solution injectable de pentétate de technétium [99m Tc]',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            30 => 
            array (
                'id_famille' => 1531,
            'nom_famille' => 'poudre pour suspension injectable. Trousse pour la préparation de macroagrégats dalbumine humaine technétiés (99mTc)',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            31 => 
            array (
                'id_famille' => 1532,
                'nom_famille' => '1 mg trousse pour préparation radiopharmaceutique',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            32 => 
            array (
                'id_famille' => 1533,
                'nom_famille' => 'poudre pour solution injectable/pour perfusion ou solution buvable',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            33 => 
            array (
                'id_famille' => 1534,
                'nom_famille' => 'générateur radiopharmaceutique',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            34 => 
            array (
                'id_famille' => 1535,
                'nom_famille' => 'solution pour administration intra-vésicale',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            35 => 
            array (
                'id_famille' => 1536,
                'nom_famille' => 'solution pour administration par voie orale ou rectale',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            36 => 
            array (
                'id_famille' => 1537,
                'nom_famille' => '5mg, comprimé',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            37 => 
            array (
                'id_famille' => 1538,
                'nom_famille' => '2 mg, comprimé sublingual',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            38 => 
            array (
                'id_famille' => 1539,
                'nom_famille' => '3 mg/ml, solution injectable',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            39 => 
            array (
                'id_famille' => 1540,
                'nom_famille' => '5 mg/ml, poudre pour solution pour perfusion',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            40 => 
            array (
                'id_famille' => 1541,
                'nom_famille' => 'solution injectable IV en ampoule',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            41 => 
            array (
                'id_famille' => 1542,
                'nom_famille' => 'poudre pour concentré pour solution pour perfusion',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            42 => 
            array (
                'id_famille' => 1543,
                'nom_famille' => '8 mL, solution à diluer injectable',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            43 => 
            array (
                'id_famille' => 1544,
                'nom_famille' => '5 POUR CENT, solution buvable',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            44 => 
            array (
                'id_famille' => 1545,
                'nom_famille' => 'gel transdermique',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            45 => 
            array (
                'id_famille' => 1546,
            'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin diphtérique, tétanique, coquelucheux acellulaire et poliomyélitique (inactivé), adsorbé',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            46 => 
            array (
                'id_famille' => 1547,
            'nom_famille' => 'Iodure(131I) de sodium pour thérapie, gélule',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            47 => 
            array (
                'id_famille' => 1548,
                'nom_famille' => '05 POUR CENT, sirop',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            48 => 
            array (
                'id_famille' => 1549,
                'nom_famille' => '9 mg, poudre pour solution injectable',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            49 => 
            array (
                'id_famille' => 1550,
            'nom_famille' => '25 ml ENFANTS, suspension injectable en seringue préremplie. Vaccin de l\'encéphalite à tiques (virus entier inactivé)',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            50 => 
            array (
                'id_famille' => 1551,
            'nom_famille' => '5 ml ADULTES, suspension injectable en seringue préremplie. Vaccin de l\'encéphalite à tiques (virus entier inactivé)',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            51 => 
            array (
                'id_famille' => 1552,
                'nom_famille' => 'poudre et solution pour préparation injectable I.V.',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            52 => 
            array (
                'id_famille' => 1553,
                'nom_famille' => '25 %, collyre en solution',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            53 => 
            array (
                'id_famille' => 1554,
                'nom_famille' => '50 %, collyre en solution',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            54 => 
            array (
                'id_famille' => 1555,
                'nom_famille' => '25 POUR CENT, collyre en solution',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            55 => 
            array (
                'id_famille' => 1556,
                'nom_famille' => '50 POUR CENT, collyre en solution',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            56 => 
            array (
                'id_famille' => 1557,
                'nom_famille' => '50 POUR CENT, collyre',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            57 => 
            array (
                'id_famille' => 1558,
                'nom_famille' => 'poudre orale en sachet-dose',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            58 => 
            array (
                'id_famille' => 1559,
                'nom_famille' => 'plantes pour tisane en sachet-dose',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            59 => 
            array (
                'id_famille' => 1560,
                'nom_famille' => 'solution pour inhalation par nébuliseur',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            60 => 
            array (
                'id_famille' => 1561,
                'nom_famille' => '3 %, collyre en solution',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            61 => 
            array (
                'id_famille' => 1562,
                'nom_famille' => 'microgranules en comprimé',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            62 => 
            array (
                'id_famille' => 1563,
                'nom_famille' => 'comprimé + TOLVAPTAN TEVA 45 mg, comprimé',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            63 => 
            array (
                'id_famille' => 1564,
                'nom_famille' => 'comprimé + TOLVAPTAN TEVA 60 mg, comprimé',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            64 => 
            array (
                'id_famille' => 1565,
                'nom_famille' => 'comprimé + TOLVAPTAN TEVA 90 mg, comprimé',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            65 => 
            array (
                'id_famille' => 1566,
                'nom_famille' => 'solution à diluer et diluant pour solution pour perfusion',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            66 => 
            array (
                'id_famille' => 1567,
                'nom_famille' => '25 mg, poudre pour solution à diluer pour perfusion',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            67 => 
            array (
                'id_famille' => 1568,
            'nom_famille' => '5 ml (1 POUR CENT), solution injectable en ampoule',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            68 => 
            array (
                'id_famille' => 1569,
                'nom_famille' => 'poudre pour suspension buvable édulcorée à l\'aspartam en sachet',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            69 => 
            array (
                'id_famille' => 1570,
                'nom_famille' => '95 g, poudre pour solution buvable en sachet',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            70 => 
            array (
                'id_famille' => 1571,
                'nom_famille' => '9 g, poudre pour solution buvable en sachet',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            71 => 
            array (
                'id_famille' => 1572,
                'nom_famille' => '75 g/2,15 g/1,07 g pour 5 g, pâte orale en sachet',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            72 => 
            array (
                'id_famille' => 1573,
                'nom_famille' => 'gelée orale en pot',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            73 => 
            array (
                'id_famille' => 1574,
                'nom_famille' => '54 mg/12 mm, dispositif pour application cutanée',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            74 => 
            array (
                'id_famille' => 1575,
                'nom_famille' => '62 mg/6 mm, dispositif pour application cutanée',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            75 => 
            array (
                'id_famille' => 1576,
            'nom_famille' => 'dispositif transdermique (44,8 mg / 14 cm²)',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            76 => 
            array (
                'id_famille' => 1577,
            'nom_famille' => 'dispositif transdermique (67,2 mg / 21 cm²)',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            77 => 
            array (
                'id_famille' => 1578,
            'nom_famille' => 'dispositif transdermique (22,4 mg / 7 cm²)',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            78 => 
            array (
                'id_famille' => 1579,
                'nom_famille' => '5 mg/10 mg, comprimé pelliculé',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            79 => 
            array (
                'id_famille' => 1580,
                'nom_famille' => '25 mg/10 mg, comprimé pelliculé',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            80 => 
            array (
                'id_famille' => 1581,
                'nom_famille' => '25 mg/5 mg, comprimé pelliculé',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            81 => 
            array (
                'id_famille' => 1582,
                'nom_famille' => '2 microgrammes/160 microgrammes, suspension pour inhalation en flacon pressurisé',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            82 => 
            array (
                'id_famille' => 1583,
                'nom_famille' => '67 %, émulsion pour application cutanée',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            83 => 
            array (
                'id_famille' => 1584,
                'nom_famille' => 'crème dermatologique',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            84 => 
            array (
                'id_famille' => 1585,
                'nom_famille' => '5 g, poudre pour solution buvable en sachet-dose',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            85 => 
            array (
                'id_famille' => 1586,
                'nom_famille' => 'patch pour test épicutané',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            86 => 
            array (
                'id_famille' => 1587,
                'nom_famille' => '75 mg, solution injectable en stylo prérempli',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            87 => 
            array (
                'id_famille' => 1588,
                'nom_famille' => '5 mg, solution injectable en stylo pré-rempli',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            88 => 
            array (
                'id_famille' => 1589,
                'nom_famille' => 'solution injectable, dérivé protéinique purifié de tuberculine',
                'created_at' => '2023-12-17 07:49:12',
                'updated_at' => '2023-12-17 07:49:12',
            ),
            89 => 
            array (
                'id_famille' => 1590,
            'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin de l\'hépatite A (inactivé) et de l\'hépatite B (ADNr) (HAB) (adsorbé)',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            90 => 
            array (
                'id_famille' => 1591,
            'nom_famille' => 'suspension et solution pour suspension injectable en seringue préremplie. Vaccin de l\'hépatite A (inactivé, adsorbé) et typhoïdique polyosidique',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            91 => 
            array (
                'id_famille' => 1592,
                'nom_famille' => 'solution injectable en seringue préremplie. Vaccin typhoïdique polyosidique',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            92 => 
            array (
                'id_famille' => 1593,
                'nom_famille' => '2,15 - 43 GBq, générateur radiopharmaceutique',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            93 => 
            array (
                'id_famille' => 1594,
                'nom_famille' => 'solution injectable en seringue préremplie pour injecteur automatique',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            94 => 
            array (
                'id_famille' => 1595,
                'nom_famille' => '25 microgramme, capsule orale',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            95 => 
            array (
                'id_famille' => 1596,
                'nom_famille' => 'capsule orale',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            96 => 
            array (
                'id_famille' => 1597,
                'nom_famille' => '10 microgramme, solution buvable en gouttes',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            97 => 
            array (
                'id_famille' => 1598,
                'nom_famille' => '50 microgramme, capsule molle',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            98 => 
            array (
                'id_famille' => 1599,
                'nom_famille' => '5 ml, solution injectable IV en ampoule',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            99 => 
            array (
                'id_famille' => 1600,
                'nom_famille' => '5 g/1 g, poudre pour usage parentéral',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            100 => 
            array (
                'id_famille' => 1601,
                'nom_famille' => '4 ml, collyre en solution en récipient unidose',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            101 => 
            array (
                'id_famille' => 1602,
            'nom_famille' => '8 x 100 000 000 000 génomes de vecteur (vg)/0,5 mL, solution pour perfusion',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            102 => 
            array (
                'id_famille' => 1603,
                'nom_famille' => 'poudre et solvant pour suspension injectable. Vaccin rabique, inactivé',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            103 => 
            array (
                'id_famille' => 1604,
                'nom_famille' => 'poudre pour solution à diluer pour perfusion ou pour solution buvable',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            104 => 
            array (
                'id_famille' => 1605,
                'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin de lhépatite A, inactivé, adsorbé. Pour adultes',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            105 => 
            array (
                'id_famille' => 1606,
            'nom_famille' => 'poudre et solvant pour solution injectable en seringue préremplie. Vaccin varicelleux (vivant)',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            106 => 
            array (
                'id_famille' => 1607,
            'nom_famille' => 'poudre et solvant pour suspension injectable en seringue préremplie. Vaccin varicelleux (vivant)',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            107 => 
            array (
                'id_famille' => 1608,
            'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin diphtérique, tétanique, coquelucheux (acellulaire, multicomposé), de l\'hépatite B (ADNr), poliomyélitique (inactivé) et conjugué de l\'Haemophilus de type b (adsorbé)',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            108 => 
            array (
                'id_famille' => 1609,
            'nom_famille' => 'suspension injectable en seringue préremplie. Vaccin grippal quadrivalent (inactivé, à virion fragmenté)',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            109 => 
            array (
                'id_famille' => 1610,
            'nom_famille' => 'suspension injectable. Vaccin COVID-19 (ChAdOx1-S [recombinant])',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            110 => 
            array (
                'id_famille' => 1611,
                'nom_famille' => 'lyophilisat et solution pour préparation injectable',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            111 => 
            array (
                'id_famille' => 1612,
                'nom_famille' => 'solution buvable à diluer',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            112 => 
            array (
                'id_famille' => 1613,
                'nom_famille' => 'poudre pour solution injectable I.V.',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            113 => 
            array (
                'id_famille' => 1614,
                'nom_famille' => '26 mg, solution pour pulvérisation nasale en récipient unidose',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            114 => 
            array (
                'id_famille' => 1615,
                'nom_famille' => '5 mg/1 ml, solution injectable par voie sous-cutanée en ampoule',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            115 => 
            array (
                'id_famille' => 1616,
                'nom_famille' => '25 mg/2,5 ml, solution pour inhalation par nébuliseur en récipient unidose',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            116 => 
            array (
                'id_famille' => 1617,
                'nom_famille' => 'solution injectable pour voie IV et perfusion',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            117 => 
            array (
                'id_famille' => 1618,
                'nom_famille' => '33 % ADULTES MIEL, sirop',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            118 => 
            array (
                'id_famille' => 1619,
                'nom_famille' => 'tampon imprégné pour inhalation par fumigation',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            119 => 
            array (
                'id_famille' => 1620,
                'nom_famille' => '15 %, sirop',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            120 => 
            array (
                'id_famille' => 1621,
            'nom_famille' => 'solution et émulsion pour émulsion injectable. Vaccin contre la COVID-19 (recombinant avec adjuvant)',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            121 => 
            array (
                'id_famille' => 1622,
            'nom_famille' => 'préparation pour collyre (lyophilisat et solvant)',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            122 => 
            array (
                'id_famille' => 1623,
                'nom_famille' => '1 ml, poudre pour solution injectable',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            123 => 
            array (
                'id_famille' => 1624,
                'nom_famille' => '05 POUR CENT, collyre',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            124 => 
            array (
                'id_famille' => 1625,
                'nom_famille' => '173 mg/0,4 ml, collyre en récipient unidose',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            125 => 
            array (
                'id_famille' => 1626,
                'nom_famille' => 'émulsion injectable pour perfusion',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            126 => 
            array (
                'id_famille' => 1627,
                'nom_famille' => '5 POUR MILLE, collyre en solution',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            127 => 
            array (
                'id_famille' => 1628,
                'nom_famille' => '2 mg/0,4 ml, collyre en solution en récipient unidose',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            128 => 
            array (
                'id_famille' => 1629,
            'nom_famille' => 'solution injectable (IM) et buvable',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            129 => 
            array (
                'id_famille' => 1630,
                'nom_famille' => '2mg/0,4 ml, collyre en solution en récipient unidose',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            130 => 
            array (
                'id_famille' => 1631,
            'nom_famille' => '05 POUR CENT (0,2 mg/0,4 ml), collyre en récipient unidose',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            131 => 
            array (
                'id_famille' => 1632,
                'nom_famille' => 'solution buvable et injectable',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            132 => 
            array (
                'id_famille' => 1633,
                'nom_famille' => '2 ml NOURRISSONS, solution buvable et injectable',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            133 => 
            array (
                'id_famille' => 1634,
                'nom_famille' => 'comprimé à croquer édulcoré au sorbitol et à l\'aspartam',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            134 => 
            array (
                'id_famille' => 1635,
                'nom_famille' => '5 microgrammes/24 heures, dispositif transdermique',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            135 => 
            array (
                'id_famille' => 1636,
                'nom_famille' => '1 %, solution buvable en flacon',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            136 => 
            array (
                'id_famille' => 1637,
                'nom_famille' => '5 mg, lyophilisat oral',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            137 => 
            array (
                'id_famille' => 1638,
                'nom_famille' => '5 mg SANS SUCRE, lyophilisat oral édulcoré à l\'aspartam',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            138 => 
            array (
                'id_famille' => 1639,
            'nom_famille' => '1 POUR CENT (0,3 mg/0,3 ml), collyre en solution en récipient unidose',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            139 => 
            array (
                'id_famille' => 1640,
                'nom_famille' => '56 mg, poudre et solvant pour solution injectable',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            140 => 
            array (
                'id_famille' => 1641,
                'nom_famille' => 'granules et  solution en gouttes en gouttes buvable en gouttes',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            141 => 
            array (
                'id_famille' => 1642,
                'nom_famille' => 'poudre',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            142 => 
            array (
                'id_famille' => 1643,
                'nom_famille' => 'solution en gouttes en gouttes et  granules',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            143 => 
            array (
                'id_famille' => 1644,
                'nom_famille' => 'granules et  solution en gouttes en gouttes et  crème buvable en gouttes',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            144 => 
            array (
                'id_famille' => 1645,
                'nom_famille' => 'poudres et solvants pour solution injectable',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            145 => 
            array (
                'id_famille' => 1646,
                'nom_famille' => 'suspension orale',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            146 => 
            array (
                'id_famille' => 1647,
                'nom_famille' => 'granulés pour supension buvable',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            147 => 
            array (
                'id_famille' => 1648,
                'nom_famille' => '9 mg, poudre et solvant pour solution injectable',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            148 => 
            array (
                'id_famille' => 1649,
                'nom_famille' => 'gel gingival',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            149 => 
            array (
                'id_famille' => 1650,
                'nom_famille' => '6 mg/ml, solution injectable',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            150 => 
            array (
                'id_famille' => 1651,
            'nom_famille' => 'poudre pour solution injectable/pour perfusion (I.M.- I.V.)',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            151 => 
            array (
                'id_famille' => 1652,
            'nom_famille' => 'poudre pour solution injectable/pour perfusion (IM-IV)',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            152 => 
            array (
                'id_famille' => 1653,
                'nom_famille' => '005 mg/ml, solution injectable',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            153 => 
            array (
                'id_famille' => 1654,
                'nom_famille' => 'solution pour application muqueuse',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            154 => 
            array (
                'id_famille' => 1655,
                'nom_famille' => 'gel oral',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            155 => 
            array (
                'id_famille' => 1656,
                'nom_famille' => 'crème pour usage dentaire',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            156 => 
            array (
                'id_famille' => 1657,
                'nom_famille' => '5 mg par g, gel gingival',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            157 => 
            array (
                'id_famille' => 1658,
                'nom_famille' => '150 mg/1,5 mg par g, solution pour pulvérisation buccale',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            158 => 
            array (
                'id_famille' => 1659,
                'nom_famille' => '50 mg/1,5 mg par mL, solution dentaire',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            159 => 
            array (
                'id_famille' => 1660,
                'nom_famille' => 'compresse imprégnée pour usage dentaire',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            160 => 
            array (
                'id_famille' => 1661,
                'nom_famille' => '9 mg/ml, collyre en solution',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            161 => 
            array (
                'id_famille' => 1662,
                'nom_famille' => 'plantes pour tisane en sachet dose',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            162 => 
            array (
                'id_famille' => 1663,
                'nom_famille' => 'précurseur radiopharmaceutique, en solution',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            163 => 
            array (
                'id_famille' => 1664,
                'nom_famille' => 'solution de précurseur radiopharmaceutique',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            164 => 
            array (
                'id_famille' => 1665,
                'nom_famille' => '25 mg par g, gel',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            165 => 
            array (
                'id_famille' => 1666,
                'nom_famille' => '5 mL, solution injectable ou pour perfusion en seringue pré-remplie',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            166 => 
            array (
                'id_famille' => 1667,
                'nom_famille' => '5 g, poudre pour solution à diluer pour perfusion',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            167 => 
            array (
                'id_famille' => 1668,
                'nom_famille' => '4 g/10 mL, suspension buvable',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            168 => 
            array (
                'id_famille' => 1669,
                'nom_famille' => '75 mg, poudre et solvant pour suspension injectable à libération prolongée',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            169 => 
            array (
                'id_famille' => 1670,
                'nom_famille' => '6 mg/ml, trousse pour préparation radiopharmaceutique pour perfusion',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            170 => 
            array (
                'id_famille' => 1671,
                'nom_famille' => 'solution injectable à diluer pour perfusion',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            171 => 
            array (
                'id_famille' => 1672,
                'nom_famille' => '5 mg/1,5 mg, comprimé pelliculé',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            172 => 
            array (
                'id_famille' => 1673,
                'nom_famille' => '8 mg, implant en seringue préremplie pour voie sous-cutanée',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            173 => 
            array (
                'id_famille' => 1674,
                'nom_famille' => '6 mg, implant en seringue préremplie pour voie sous-cutanée',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            174 => 
            array (
                'id_famille' => 1675,
                'nom_famille' => 'dispersion à diluer pour perfusion',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            175 => 
            array (
                'id_famille' => 1676,
                'nom_famille' => 'comprimésécable',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            176 => 
            array (
                'id_famille' => 1677,
                'nom_famille' => '05 POUR CENT, gel',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            177 => 
            array (
                'id_famille' => 1678,
            'nom_famille' => 'poudre et solvant pour suspension injectable en seringue préremplie. Vaccin zona (vivant atténué)',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            178 => 
            array (
                'id_famille' => 1679,
                'nom_famille' => '4 mg/0,36 mg, comprimé sublingual',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            179 => 
            array (
                'id_famille' => 1680,
                'nom_famille' => '4 mg/2,9 mg, comprimé sublingual',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            180 => 
            array (
                'id_famille' => 1681,
                'nom_famille' => '9 mg/0,71 mg, comprimé sublingual',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            181 => 
            array (
                'id_famille' => 1682,
                'nom_famille' => '7 mg/1,4 mg, comprimé sublingual',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            182 => 
            array (
                'id_famille' => 1683,
                'nom_famille' => '6 mg/2,1 mg, comprimé sublingual',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
            183 => 
            array (
                'id_famille' => 1684,
                'nom_famille' => '50 mg, comprimé',
                'created_at' => '2023-12-17 07:49:13',
                'updated_at' => '2023-12-17 07:49:13',
            ),
        ));
        
        
    }
}