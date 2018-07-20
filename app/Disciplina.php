<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Disciplina extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = [
        'name', 'descricao',
    ];

    public function projeto()
    {
        return $this->belongsToMany(Projeto::class, 'projetos_disciplinas');
    }

    public function suplente()
    {
        return $this->belongsToMany(Suplente::class, 'suplentes_disciplinas');
    }

}
