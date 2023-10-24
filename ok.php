<?php

$array = [
    'employe' => [
        'employe',
        'fonction'
    ],
    'parametrage' => [
        'ville',
        'departement',
        'region'
    ],
    'agence' => [
        'agence',
        'batiment',
        'salle',
        'reservation',
        'materiel_type',
        'posession_materiel',
        'extra'
    ],
    'covoiturage' => [
        'trajet',
        'vehicule',
        'etape',
        'reservation'
    ],
    'visite' => [
        'visite',
        'praticien',
        'presentation_medicament',
        'medicament',
        'famille_medicament'
    ],
    'frais' => [
        'frais',
        'justificative',
        'nature',
        'situation_validation'
    ]
];

foreach ($array as $prefix => $tableNames) {
    foreach ($tableNames as $table_name) {
        // Generate the migration
        $folderName = 'database/migrations/' . $prefix;
        exec('php artisan make:migration create_' . $prefix . '__' . $table_name . '_table --path=' . $folderName);

        // Generate the model
        $modelName = str_replace('_', ' ', $table_name);
        $modelName = ucwords($modelName);
        $modelName = str_replace(' ', '', $modelName);

        $modelFolderName = 'app/Models/' . strtoupper($prefix);
        $modelFilePath = $modelFolderName . '/' . $modelName . '.php';

        if (!file_exists($modelFolderName)) {
            mkdir($modelFolderName, 0755, true);
        }

        if (!file_exists($modelFilePath)) {
            $modelContent = "<?php\n\nnamespace App\\".strtoupper($prefix).";\n\nuse Illuminate\\Database\\Eloquent\\Model;\n\nclass $modelName extends Model\n{\n    //\n}\n";

            file_put_contents($modelFilePath, $modelContent);
        }
    }
}


?>