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
        Schema::create('parametrage__departement', function (Blueprint $table) {
            $table->id('departement_id')->index();
            $table->string('nom_departement', 50);
            $table->foreignId('region_id')->index()->foreign()->references('region_id')->on('parametrage__region');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametrage__departement');
    }
};
