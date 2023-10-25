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
        Schema::create('covoiturage__trajet', function (Blueprint $table) {
            $table->id('id_trajet')->index();
            $table->integer('nombre_place_maximum');
            $table->foreignId('id_vehicule')->index()->foreign()->references('id_vehicule')->on('covoiturage__vehicule');
            $table->foreignId('code_employe')->index()->foreign()->references('code_employe')->on('employe__employe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('covoiturage__trajet');
    }
};
