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
        Schema::create('covoiturage__etape', function (Blueprint $table) {
            $table->id('id_etape');
            $table->integer('ordre_etape');
            $table->dateTime('date_passage');
            $date->foreignId('id_trajet');
            $date->foreignId('id_ville');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('covoiturage__etape');
    }
};
