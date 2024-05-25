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
        Schema::create('guides', function (Blueprint $table) {
            $table->id();
            $table->string("nom")->nullable();
            $table->string("pdf")->nullable();
            $table->unsignedBigInteger('id_switche')->nullable();
            $table->unsignedBigInteger('id_sys_info')->nullable();
            $table->unsignedBigInteger('id_citrix_info')->nullable();
            $table->unsignedBigInteger('id_serveur')->nullable();
            $table->foreign('id_switche')->references('id')->on('switches');
            $table->foreign('id_sys_info')->references('id')->on('sys_informations');
            $table->foreign('id_citrix_info')->references('id')->on('citrix_informations');
            $table->foreign('id_serveur')->references('id')->on('serveurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guides');
    }
};
