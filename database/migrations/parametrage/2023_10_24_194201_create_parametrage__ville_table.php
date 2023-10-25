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
        Schema::create('parametrage__ville', function (Blueprint $table) {
            $table->id('id_ville')->index();
            $table->string('nom', 50)->index();
            $table->char('code_postal', 5)->index();
            $table->decimal('ville_longitude', 9 , 6);
            $table->decimal('ville_latitude', 8 , 6);
            $table->foreignId('departement_id')->index()->foreign()->references('departement_id')->on('parametrage__departement');
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
