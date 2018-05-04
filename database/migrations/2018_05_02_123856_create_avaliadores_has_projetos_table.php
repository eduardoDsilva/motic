<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliadoresHasProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliadores_has_projetos', function (Blueprint $table) {
          $table->integer('avaliador_id')->unsigned();
          $table->foreign('avaliador_id')->references('id')->on('avaliadores')->onDelete('cascade');

          $table->integer('projeto_id')->unsigned();
          $table->foreign('projeto_id')->references('id')->on('projetos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliadores_has_projetos');
    }
}
