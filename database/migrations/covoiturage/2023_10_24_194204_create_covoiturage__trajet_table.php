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
        Schema::create('covoiturage__trajet', function (Blueprint $table) {
            $table->id('id_trajet');
            $table->integer('nombre_place_maximum');
            $table->foreignId('id_vehicule');
            $table->foreignId('code_employee');
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
