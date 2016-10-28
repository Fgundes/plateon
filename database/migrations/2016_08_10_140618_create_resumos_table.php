<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumos', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('assunto');
            $table->string('texto');
            $table->string('arquivo');
            $table->integer('disciplina_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resumos');
    }
}
