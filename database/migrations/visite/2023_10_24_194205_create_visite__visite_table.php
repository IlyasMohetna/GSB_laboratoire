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
        Schema::create('visite__visite', function (Blueprint $table) {
            $table->id('id_visite')->index();
            $table->date('date_debut_visite');
            $table->date('date_fin_visite')->nullable();
            $table->text('rapport')->nullable();
            $table->foreignId('id_praticien')->index()->foreign()->references('id_praticien')->on('visite__praticien');
            $table->foreignId('code_employe')->index()->foreign()->references('code_employe')->on('employe__employe');
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
