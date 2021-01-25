<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Turma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Turma', function (Blueprint $table) {
            $table->id();
            $table->string('siglaTurma', 5);
            $table->string('periodo', 5);
            $table->dateTime('horaEntrada');
            $table->dateTime('horaSaida');
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
        //
    }
}
