<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('covoiturage__vehicule', function (Blueprint $table) {
            $table->id('id_vehicule')->index();
            $table->string('immatriculation', 15);
            $table->string('marque', 15);
            $table->string('model', 15);
            $table->year('annee_model');
            $table->enum('type_vehicule', ['perso', 'service']);
            $table->foreignId('id_agence')->index()->nullable()->foreign()->references('id_agence')->on('salle__agence');
            $table->foreignId('code_employe')->index()->nullable()->foreign()->references('code_employe')->on('employe__employe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('covoiturage__vehicule');
    }
};
