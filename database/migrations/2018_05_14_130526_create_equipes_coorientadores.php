<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipesCoorientadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes_coorientadores', function (Blueprint $table) {
            $table->integer('coorientador_id')->unsigned();
            $table->foreign('coorientador_id')->references('id')->on('coorientadores')->onDelete('cascade');

            $table->integer('equipe_id')->unsigned();
            $table->foreign('equipe_id')->references('id')->on('equipes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipes_coorientadores');
    }
}
