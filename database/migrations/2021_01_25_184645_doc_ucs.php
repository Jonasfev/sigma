<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DocUcs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docUcs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('docente');
            $table->foreign('docente')->references('id')->on('docente');
            
            
            $table->unsignedBigInteger('ucComportada');
            $table->foreign('ucComportada')->references('id')->on('unidadecurricular');

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
        Schema::dropIfExists('docUcs');
    }
}
