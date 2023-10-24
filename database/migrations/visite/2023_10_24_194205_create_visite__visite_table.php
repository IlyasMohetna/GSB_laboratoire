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
        Schema::create('visite__visite', function (Blueprint $table) {
            $table->id('id_visite');
            $table->date('date_debut_visite');
            $table->date('date_fin_visite');
            $table->longText('rapport');
            $table->foreignId('id_praticien');
            $table->foreignId('code_employe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visite__visite');
    }
};
