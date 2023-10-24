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
        Schema::create('covoiturage__vehicule', function (Blueprint $table) {
            $table->id('id_vehicule');
            $table->string('immatriculation', 20);
            $table->string('marque', 15);
            $table->string('model', 15);
            $table->year('annee_model');
            $table->enum('tpye_vehicule', ['perso', 'service']);
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
