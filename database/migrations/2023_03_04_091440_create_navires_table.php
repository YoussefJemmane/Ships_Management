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
        Schema::create('navires', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('pavillon');
            $table->string('armateur');
            $table->string('armateur_disposant');
            $table->string('provenance');
            $table->string('operateur');
            $table->date('date_accostage');
            $table->date('date_fin_travail');
            $table->date('date_debut_travail');
            $table->date('date_appareillage')->nullable();
            $table->bigInteger('imo');
            $table->bigInteger('numero_escale');
            $table->double('t_p_l');
            $table->double('jauge_brute');
            $table->double('l_o_a');
            $table->double('tirant_eau');
            $table->double('tirant_eau_entree_avant');
            $table->double('tirant_eau_entree_arriere');
            $table->double('jauge_net');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navires');
    }
};
