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
        Schema::create('serveurs', function (Blueprint $table) {
            $table->id();
            $table->string("Nomenclature")->nullable();
            $table->string("Adresse_IP")->nullable();
            $table->string("Nom_dutilisateur_console")->nullable();
            $table->string("Motdepasse_console")->nullable();
            $table->string("Nom_dutilisateur_domaine")->nullable();
            $table->string("Motdepasse_domaine")->nullable();
            $table->string("Guide_dutilisation")->nullable();
            $table->unsignedBigInteger('id_equipement')->nullable();
            $table->foreign('id_equipement')->references('id')->on('equipements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serveurs');
    }
};
