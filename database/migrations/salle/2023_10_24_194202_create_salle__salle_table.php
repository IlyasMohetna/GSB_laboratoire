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
        Schema::create('salle__salle', function (Blueprint $table) {
            $table->id('id_salle')->index();
            $table->string('nom_salle', 20);
            $table->foreignId('id_batiment')->index()->foreign()->references('id_batiment')->on('salle__batiment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salle__salle');
    }
};
