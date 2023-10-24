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
        Schema::create('frais__frais', function (Blueprint $table) {
            $table->id('id_frais');
            $table->decimal('montant_total', 16,2);
            $table->date('date_frais');
            $table->enum('type_forfait', ['forfait','horforfait']);
            $table->string('horsforfait_libelle', 50)->nullable();
            $table->integer('forfait_quantite')->nullable();
            $table->string('commentaire')->nullable();
            $table->char('appartenance_mois', 2);
            $table->year('appartenance_annee');
            $table->foreignId('id_nature')->nullable();
            $table->foreignId('code_situation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frais__frais');
    }
};
