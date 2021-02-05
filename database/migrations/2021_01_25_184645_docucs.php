<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Docucs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docucs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('docente');
            $table->foreign('docente')->references('id')->on('docentes');
            
            
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
        Schema::dropIfExists('docucs');
    }
}
