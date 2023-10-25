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
        Schema::create('salle__agence', function (Blueprint $table) {
            $table->id('id_agence')->index();
            $table->string('nom_agence', 50);
            $table->foreignId('id_ville')->index()->foreign()->references('id_ville')->on('parametrage__ville');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salle__agence');
    }
};
