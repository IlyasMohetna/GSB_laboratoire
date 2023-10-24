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
        Schema::create('visite__presentation_medicament', function (Blueprint $table) {
            $table->foreignId('id_visite');
            $table->foreignId('id_medicament');
            $table->primary(['id_visite', 'id_medicament']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visite__presentation_medicament');
    }
};
