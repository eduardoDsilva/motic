<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
          $table->increments('id');
          $table->string('rua');
          $table->string('numero');
          $table->string('complemento')->nullable();
          $table->string('bairro');
          $table->string('cep')->nullable();
          $table->string('cidade');
          $table->string('estado');
          $table->string('pais');

          //criando FK da instituicao pra atribuir um endereco a mesma
          $table->unsignedInteger('instituicao_id')->unique();
          $table->foreign('instituicao_id')->references('id')->on('instituicao')->onDelete('cascade');

          //criando FK dos professores pra atribuir um endereco a mesma
          $table->unsignedInteger('professor_id')->unique();
          $table->foreign('professor_id')->references('id')->on('professores')->onDelete('cascade');

          //criando FK dos alunos pra atribuir um endereco a mesma
          $table->unsignedInteger('aluno_id')->unique();
          $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');

          //criando FK dos avaliadores pra atribuir um endereco a mesma
          $table->unsignedInteger('avaliador_id')->unique();
          $table->foreign('avaliador_id')->references('id')->on('avaliadores')->onDelete('cascade');

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
        Schema::dropIfExists('enderecos');
    }
}
