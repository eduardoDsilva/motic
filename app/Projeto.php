<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{

    protected $fillable = [
        'titulo', 'area', 'estande', 'resumo','nota',
    ];


    public function avaliador()
    {
        return $this->belongsToMany(Avaliador::class);
    }

    public function disciplina()
    {
        return $this->belongsToMany(Disciplina::class,  'projetos_disciplinas')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'equipe_id', 'id');
    }


}
