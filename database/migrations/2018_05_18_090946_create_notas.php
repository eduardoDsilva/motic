<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->double('notaUm',5,4);
            $table->double('notaDois',5,4);
            $table->double('notaTres',5,4);
            $table->double('notaQuatro',5,4 );
            $table->double('notaCinco',5,4);
            $table->double('notaFinal',5,4);
            $table->unsignedInteger('projeto_id');
            $table->foreign('projeto_id')->references('id')->on('projetos')->onDelete('cascade');
            $table->unsignedInteger('avaliador_id');
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
        Schema::dropIfExists('notas');
    }
}