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
          $table->string('rua')->nullable();
          $table->string('numero')->nullable();
          $table->string('complemento')->nullable();
          $table->string('bairro')->nullable();
          $table->string('cep')->nullable();
          $table->string('cidade')->nullable();
          $table->string('estado')->nullable();
          $table->string('pais')->nullable();

          $table->unsignedInteger('user_id')->nullable()->unique();
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
        Schema::dropIfExists('enderecos');
    }
}
