<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{

    protected $fillable = [
        'titulo', 'area', 'estande', 'resumo', 'ano', 'tipo', 'status', 'categoria_id', 'escola_id'
    ];

    public function avaliador()
    {
        return $this->belongsToMany(Avaliador::class);
    }

    public function disciplina()
    {
        return $this->belongsToMany(Disciplina::class,  'projetos_disciplinas');
    }

    public function aluno()
    {
        return $this->hasMany(Aluno::class);
    }

    public function professor()
    {
        return $this->hasMany(Professor::class);
    }

    public function escola()
    {
        return $this->belongsTo(Escola::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
