<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cursoucs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursoucs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('curso');
            $table->foreign('curso')->references('id')->on('cursos');
            
            
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
        Schema::dropIfExists('cursoucs');
    }
}
