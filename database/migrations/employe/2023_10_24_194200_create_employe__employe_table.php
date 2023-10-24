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
        Schema::create('employe__employe', function (Blueprint $table) {
            $table->id('code_employe');
            $table->string('prenom', 30);
            $table->string('nom', 30);
            $table->string('utilisateur', 50);
            $table->string('mot_de_passe');
            $table->string('email', 100);
            $table->date('date_naissance');
            $table->date('date_embauche');
            $table->dateTime('derniere_connexion', $precision = 0)->nullable();
            $table->foreignId('code_fonction');
            $table->foreignId('id_agence');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employe__employe');
    }
};