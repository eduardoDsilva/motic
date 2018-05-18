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
            $table->string('turma', 50);
            $table->enum('possuiEquipe', ['sim', 'não'])->default('não');
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
