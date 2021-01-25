<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CursoUcs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursoUcs', function (Blueprint $table) {
            $table->id('idRecurso');

            $table->unsignedBigInteger('curso');
            $table->foreign('curso')->references('id')->on('curso');
            
            
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
        //
    }
}
