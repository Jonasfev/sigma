<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Curso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Curso', function (Blueprint $table) {
            $table->id();
            $table->string('tipoCurso', 3);
            $table->string('siglaCurso');
            $table->integer('aulasDia');
            $table->date('dataInicioCurso');
            $table->date('dataFimCurso');
            $table->float('cargaTotalHoras', 7,2);
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
        Schema::dropIfExists('Curso');
    }
}