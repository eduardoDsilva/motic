<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliador_has_projeto extends Model
{
    protected $table = 'avaliadores_has_projetos';

    protected $fillable = [
        'avaliador_id',
        'projeto_id',
    ];

}
