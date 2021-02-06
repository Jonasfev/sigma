<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Turmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idCurso');
            $table->foreign('idCurso')->references('id')->on('cursos');
            $table->string('siglaTurma', 5);
            $table->string('periodo', 5);
            $table->time('horaEntrada');
            $table->time('horaSaida');
            $table->integer('numAlunos');
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
        Schema::dropIfExists('turmas');
    }
}
