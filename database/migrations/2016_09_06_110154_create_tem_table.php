<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tem', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('id_resumo')->unsigned();
            $table->foreign('id_resumo')->references('id')->on('resumos');
            $table->integer('id_possui')->unsigned();
            $table->foreign('id_possui')->references('id')->on('possui');
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
        Schema::drop('tem');
    }
}
