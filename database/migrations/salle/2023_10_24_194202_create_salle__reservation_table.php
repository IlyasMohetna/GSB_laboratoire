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
        Schema::create('salle__reservation', function (Blueprint $table) {
            $table->id('id_reservation')->index();
            $table->dateTime('date_debut_reservation');
            $table->dateTime('date_fin_reservation');
            $table->foreignId('code_employe')->index()->foreign()->references('code_employe')->on('employe__employe');
            $table->foreignId('id_salle')->index()->foreign()->references('id_salle')->on('salle__salle');
            $table->foreignId('id_extra')->index()->nullable()->foreign()->references('id_extra')->on('salle__extra');
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
