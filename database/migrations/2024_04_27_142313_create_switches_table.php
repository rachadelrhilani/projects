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
        Schema::create('switches', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_hôte')->nullable();
            $table->string('Adresse_Mac')->nullable();
            $table->string('Port_mural')->nullable();
            $table->string('Interface')->nullable();
            $table->string('VLAN')->nullable();
            $table->string('login')->nullable();
            $table->string('Motdepasse')->nullable();
            $table->unsignedBigInteger('id_div')->nullable();
            $table->unsignedBigInteger('id_equipement')->nullable();
            $table->foreign('id_div')->references('id')->on('divisions');
            $table->foreign('id_equipement')->references('id')->on('equipements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('switches');
    }
};
