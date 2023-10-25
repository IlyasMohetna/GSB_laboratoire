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
        Schema::create('salle__posession_materiel', function (Blueprint $table) {
            $table->foreignId('id_salle')->index()->foreign()->references('id_salle')->on('salle__salle');
            $table->foreignId('id_materiel')->index()->foreign()->references('id_materiel')->on('salle__materiel_type');
            $table->primary(['id_salle', 'id_materiel']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salle__posession_materiel');
    }
};
