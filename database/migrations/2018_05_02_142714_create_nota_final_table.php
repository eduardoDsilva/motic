<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaFinalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_final', function (Blueprint $table) {
            $table->increments('id');
            $table->double('notaTotal',5,4);

            $table->unsignedInteger('projeto_id');
            $table->foreign('projeto_id')->references('id')->on('projetos')->onDelete('cascade');
            
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
        Schema::dropIfExists('nota_final');
    }
}
