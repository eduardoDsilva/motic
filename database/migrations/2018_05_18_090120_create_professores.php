<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::create('professores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nascimento');
            $table->enum('sexo',['masculino','feminino', "nao especificado"])->default('nao especificado');
            $table->string('telefone');
            $table->string('grauDeInstrucao');
            $table->string('cpf');
            $table->integer('matricula');
            $table->enum('tipo', ['orientador', 'coorientador', 'nenhum'])->default('nenhum');

            $table->unsignedInteger('escola_id');
            $table->foreign('escola_id')->references('id')->on('escolas')->onDelete('cascade');

            $table->unsignedInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('projeto_id')->nullable();
            $table->foreign('projeto_id')->references('id')->on('projetos');

            $table->timestamps();
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('professores');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}