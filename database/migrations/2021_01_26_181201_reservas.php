<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idTurma');
            $table->foreign('idTurma')->references('id')->on('turmas');

            $table->string('diaSemana', 10);

            $table->string('periodo');

            $table->time('horaInicio');
            $table->time('horaFim');

            $table->integer('aula');

            $table->char('turma');

            $table->unsignedBigInteger('idDocente');
            $table->foreign('idDocente')->references('id')->on('docentes');

            $table->unsignedBigInteger('idAmbiente');
            $table->foreign('idAmbiente')->references('id')->on('ambientes');

            $table->unsignedBigInteger('idUc');
            $table->foreign('idUc')->references('id')->on('ucs');

            $table->unsignedBigInteger('idEquipamento');
            $table->foreign('idEquipamento')->references('id')->on('equipamentos');

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
        Schema::dropIfExists('reservas');
    }
}
