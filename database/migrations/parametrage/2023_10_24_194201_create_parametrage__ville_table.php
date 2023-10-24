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
        Schema::create('parametrage__ville', function (Blueprint $table) {
            $table->id('ville_id');
            $table->string('ville_nom');
            $table->char('ville_cpostal', 5);
            $table->decimal('ville_longitude', 9 , 6);
            $table->decimal('ville_latitude', 8 , 6);
            $table->foreignId('departement_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametrage__ville');
    }
};
