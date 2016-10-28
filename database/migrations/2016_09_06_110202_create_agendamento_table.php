<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamento', function (Blueprint $table) {
            $table->integer('id_possui')->unsigned();
            $table->foreign('id_possui')->references('id')->on('possui');
            $table->integer('id_agenda')->unsigned();
            $table->foreign('id_agenda')->references('id')->on('agenda');
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
        Schema::drop('agendamento');
    }
}
