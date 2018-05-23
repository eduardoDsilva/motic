<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('anoLetivo', ['Educação Infantil', '	1° ANO', '2° ANO', '3° ANO', '4° ANO', '5° ANO', '6° ANO', '7° ANO', '8° ANO', '9° ANO', 'ERRO' ])->default('ERRO');
            $table->string('turma', 50);
            $table->integer('equipe')->nullable();
            $table->unsignedInteger('escola_id');
            $table->foreign('escola_id')->references('id')->on('escolas')->onDelete('cascade');
            //criando a FK do usuario desse aluno
            $table->unsignedInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('alunos');
    }
}
