<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosPessoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_pessoais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->date('nascimento');
            $table->enum('sexo',['masculino','feminino', "nao especificado"])->default('nao especificado');
            $table->string('email')->unique();
            $table->string('telefone');
            $table->string('grauDeInstrucao');
            $table->string('cpf')->nullable();

            //criando FK dos professores pra atribuir dados pessoais da mesma
            $table->unsignedInteger('professor_id')->unique();
            $table->foreign('professor_id')->references('id')->on('professores')->onDelete('cascade');

            //criando FK dos alunos pra atribuir dados pessoais da mesma
            $table->unsignedInteger('aluno_id')->unique();
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');

            //criando FK dos avaliadores pra atribuir dados pessoais da mesma
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
        Schema::dropIfExists('dados_pessoais');
    }
}
