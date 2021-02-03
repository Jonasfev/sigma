<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reserva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reserva', function (Blueprint $table) {
            $table->id();

            $table->string('turmaSigla');
            $table->string('diaSemana', 10);

            $table->string('periodo');

            $table->dateTime('horaInicio');
            $table->dateTime('horaFim');

            $table->integer('aula');

            $table->char('turma');

            $table->unsignedBigInteger('idDocente');
            $table->foreign('idDocente')->references('id')->on('docente');

            $table->unsignedBigInteger('idAmbiente');
            $table->foreign('idAmbiente')->references('id')->on('ambiente');

            $table->unsignedBigInteger('idUc');
            $table->foreign('idUc')->references('id')->on('unidadecurricular');

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
        Schema::dropIfExists('Reserva');
    }
}
