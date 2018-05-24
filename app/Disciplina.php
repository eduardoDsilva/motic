<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = [
        'name', 'descricao',
    ];

    public function projeto()
    {
        return $this->belongsToMany(Projeto::class, 'projetos_disciplinas');
    }

}
