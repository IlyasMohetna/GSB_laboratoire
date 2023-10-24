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
        Schema::create('covoiturage__reservation', function (Blueprint $table) {
            $table->id('id_reservation');
            $table->dateTime('date_de_reservation');
            $table->foreignId('code_employe');
            $table->foreignId('id_etape');
            $table->foreignId('id_trajet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('covoiturage__reservation');
    }
};
