<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UnidadeCurricular extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UnidadeCurricular', function (Blueprint $table) {
            $table->id();
            $table->string('siglaUC', 5);
            $table->string('nomeUC', 120);
            $table->float('cargaSemanal', 5,2);
            $table->integer('aulasSemanais');
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
