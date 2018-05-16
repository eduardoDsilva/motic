<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->increments('id');

            //criando o fk de equipe
            $table->string('equipe')->default('não');

            //criando o fk de professores
            $table->unsignedInteger('professor_id')->unique();
            $table->foreign('professor_id')->references('id')->on('professores');


            //criando o FK de alunos
            $table->unsignedInteger('aluno_id')->unique();
            $table->foreign('aluno_id')->references('id')->on('alunos');

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
        Schema::dropIfExists('equipes');
    }
}
