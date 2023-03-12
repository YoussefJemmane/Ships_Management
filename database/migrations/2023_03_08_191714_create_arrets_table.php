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
        Schema::create('arrets', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->time('heure_debut_arret');
            $table->time('heure_fin_arret');
            $table->foreignId('navire_id')->constrained('navires')->onDelete('cascade');
            $table->foreignId('engin_id')->constrained('engins')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arrets');
    }
};
