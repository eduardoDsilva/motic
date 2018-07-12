<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = "avaliacoes";

    protected $fillable =[
        'data_inicio','hora_inicio', 'data_fim', 'hora_fim',
    ];

}
