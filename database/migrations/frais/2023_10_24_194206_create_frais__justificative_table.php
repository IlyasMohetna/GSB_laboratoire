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
        Schema::create('frais__justificative', function (Blueprint $table) {
            $table->id('id_justif')->index();
            $table->string('justif_nom');
            $table->string('justif_chemin');
            $table->string('justif_extension', 5);
            $table->string('justif_mime', 20);
            $table->foreignId('id_frais')->index()->foreign()->references('id_frais')->on('frais__frais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frais__justificative');
    }
};
