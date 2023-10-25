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
        Schema::create('visite__medicament', function (Blueprint $table) {
            $table->id('id_medicament')->index();
            $table->string('nom_medicament', 30);
            $table->string('photo_medicament');
            $table->foreignId('id_famille')->index()->foreign()->references('id_famille')->on('visite__famille_medicament');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visite__medicament');
    }
};
