<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{

    protected $fillable = [
        'titulo', 'area', 'estande', 'resumo', 'status', 'categoria_id', 'escola_id'
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
        return $this->belongsTo(Equipe::class, 'aluno_id', 'id');
    }

    public function professor()
    {
        return $this->belongsTo(Equipe::class, 'professor_id', 'id');
    }

    public function coorientador()
    {
        return $this->hasMany(Equipe::class, 'professor_id', 'id');
    }




}
