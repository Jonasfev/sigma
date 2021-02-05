<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Csvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csvs', function (Blueprint $table) {
            $table->id();
            $table->string('versao');
            $table->string('curso');
            $table->string('periodo');
            $table->string('diaSemana');
            $table->string('aula');
            $table->char('turma');
            $table->string('uc');
            $table->string('docente');
            $table->string('ambiente');

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
        Schema::dropIfExists('csvs');
    }
}
