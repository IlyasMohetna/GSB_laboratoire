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
        Schema::create('frais__frais', function (Blueprint $table) {
            $table->id('id_frais')->index();
            $table->decimal('montant_total', 16,2);
            $table->date('date_frais');
            $table->enum('type_forfait', ['forfait','horforfait']);
            $table->string('horsforfait_libelle', 50)->nullable();
            $table->integer('forfait_quantite')->nullable();
            $table->string('commentaire')->nullable();
            $table->char('appartenance_mois', 2);
            $table->year('appartenance_annee');
            $table->foreignId('id_nature')->index()->nullable()->foreign()->references('id_nature')->on('frais__nature');
            $table->foreignId('code_situation')->index()->foreign()->references('code_situation')->on('frais__situation_validation');
            $table->foreignId('code_employe_comptable')->index()->nullable()->foreign()->references('code_employe')->on('employe__employe');
            $table->foreignId('id_visite')->index()->foreign()->references('id_visite')->on('visite__visite');
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
