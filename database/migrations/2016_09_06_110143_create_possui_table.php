<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePossuiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('possui', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('leciona_id')->unsigned();
            $table->foreign('leciona_id')->references('id')->on('leciona');
            $table->integer('id_sala')->unsigned();
            $table->foreign('id_sala')->references('id')->on('salas');
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
        Schema::drop('possui');
    }
}
