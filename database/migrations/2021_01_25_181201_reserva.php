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
            $table->string('turmaSigla', 3);
            $table->string('diaSemana', 3);

            $table->dateTime('horaInicio');
            $table->dateTime('horaFim');

            $table->unsignedBigInteger('idRecurso');
            $table->foreign('idRecurso')->references('id')->on('recurso');

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
