<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConteudos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conteudos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sobre')->nullable();
            $table->string('local')->nullable();
            $table->string('quando')->nullable();
            $table->string('avaliacao')->nullable();
            $table->string('quem_pode_participar')->nullable();
            $table->string('jogos_motic')->nullable();
            $table->string('responsaveis')->nullable();
            $table->string('telefone_contato')->nullable();
            $table->string('email_contato')->nullable();
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
        Schema::DropIfExists ('conteudos');
    }
}
