<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscolas extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('tipoEscola',['publica','privada'])->default('publica');
            $table->string('telefone');
            //criando a FK do usuario dessa escola
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
        Schema::dropIfExists('escolas');
    }

}
