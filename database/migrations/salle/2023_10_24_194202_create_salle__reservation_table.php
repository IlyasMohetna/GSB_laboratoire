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
        Schema::create('salle__reservation', function (Blueprint $table) {
            $table->id('id_reservation');
            $table->dateTime('date_debut_reservation');
            $table->dateTime('date_fin_reservation');
            $table->dateTime('nombre_de_personnes');
            $table->foreignId('code_employee');
            $table->foreignId('id_salle');
            $table->foreignId('id_extra')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salle__reservation');
    }
};
