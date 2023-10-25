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
        Schema::create('salle__batiment', function (Blueprint $table) {
            $table->id('id_batiment')->index();
            $table->string('nom_batiment', 50);
            $table->foreignId('id_agence')->index()->foreign()->references('id_agence')->on('salle__agence');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salle__batiment');
    }
};
