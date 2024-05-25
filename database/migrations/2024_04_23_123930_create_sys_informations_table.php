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
        Schema::create('sys_informations', function (Blueprint $table) {
            $table->id();
            $table->string("Système_dinformation")->nullable();
            $table->string("Lien")->nullable();
            $table->string("Login_administrateur")->nullable();
            $table->string("Motdepasse_administrateur")->nullable();
            $table->string("Login_utilisateur")->nullable();
            $table->string("Motdepasse_utilisateur")->nullable();
            $table->unsignedBigInteger('id_equipement')->nullable();
            $table->unsignedBigInteger('id_div')->nullable();
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
        Schema::dropIfExists('sys_informations');
    }
};
