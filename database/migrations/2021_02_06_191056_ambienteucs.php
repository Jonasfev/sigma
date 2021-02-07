<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ambienteucs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambienteucs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idAmbiente');
            $table->foreign('idAmbiente')->references('id')->on('ambientes');

            $table->unsignedBigInteger('ucComportada');
            $table->foreign('ucComportada')->references('id')->on('ucs');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambienteucs');
    }
}
