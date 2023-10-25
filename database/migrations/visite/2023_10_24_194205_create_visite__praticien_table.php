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
        Schema::create('visite__praticien', function (Blueprint $table) {
            $table->id('id_praticien')->index();
            $table->string('raison_sociale', 50);
            $table->string('prenom', 30);
            $table->string('nom', 30);
            $table->string('adresse', 100);
            $table->foreignId('id_ville')->index()->foreign()->references('id_ville')->on('parametrage__ville');
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
