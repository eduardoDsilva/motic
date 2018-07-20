<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Avaliacao extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = "avaliacoes";

    protected $fillable =[
        'data_inicio','hora_inicio', 'data_fim', 'hora_fim',
    ];

}
