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
        Schema::create('citrix_informations', function (Blueprint $table) {
            $table->id();
            $table->string("Entité")->nullable();
            $table->string("Chef_Entity")->nullable();
            $table->string("Login")->nullable();
            $table->string("Nouveau_login1")->nullable();
            $table->string("Password1")->nullable();
            $table->string("Colaborateur")->nullable();
            $table->string("Login2")->nullable();
            $table->string("Nouveau_Login2")->nullable();
            $table->string("Password2")->nullable();
            $table->string("AALS/CAIDAT")->nullable();
            $table->string("ADDRESS_IP")->nullable();
            $table->string("LOGIN3")->nullable();
            $table->string("PASSWORD3")->nullable();
            $table->string("BEC")->nullable();
            $table->string("Adresse_IP")->nullable();
            $table->string("LastName")->nullable();
            $table->string("Username")->nullable();
            $table->string("MotdePasse")->nullable();
            $table->unsignedBigInteger('id_citrix')->nullable();
            $table->foreign('id_citrix')->references('id')->on('citrixes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citrix_informations');
    }
};
