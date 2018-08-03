<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Nota extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'notaUm', 'notaDois', 'notaTres', 'notaQuatro', 'notaCinco', 'id_avaliador', 'id_projeto',
    ];

    public function projeto()
    {
        return $this->belongsTo(Projeto::class);
    }

    public function avaliador()
    {
        return $this->belongsTo(Avaliador::class);
    }

}
