<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 100);
            $table->string('area', 100);
            $table->string('estande', 50)->nullable();
            $table->longText('resumo');
            $table->enum('status', ['aprovado', 'suplente'])->default('suplente');
            $table->double('nota',5,4)->nullable();

            //criando a FK do usuario desse projeto
            $table->unsignedInteger('categoria_id')->unique();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');

            //criando a FK do usuario desse projeto
            $table->unsignedInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            //criando o FK de equipes
            $table->unsignedInteger('equipe_id')->nullable()->unique();
            $table->foreign('equipe_id')->references('id')->on('equipes')->onDelete('cascade');

            //criando o FK de instituicao
            $table->unsignedInteger('escola_id')->unique();
            $table->foreign('escola_id')->references('id')->on('escolas')->onDelete('cascade');

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
        Schema::dropIfExists('projetos');
    }
}
