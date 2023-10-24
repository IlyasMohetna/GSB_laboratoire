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
        Schema::create('visite__praticien', function (Blueprint $table) {
            $table->id('id_praticien');
            $table->string('raison_social', 30);
            $table->string('prenom', 30);
            $table->string('nom', 30);
            $table->string('adresse', 100);
            $table->foreignId('id_ville');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visite__praticien');
    }
};
