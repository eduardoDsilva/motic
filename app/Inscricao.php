<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Inscricao extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = "inscricoes";

    protected $fillable =[
        'data_inicio', 'data_fim',
    ];
}
