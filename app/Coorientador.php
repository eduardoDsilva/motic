<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coorientador extends Model
{
    public function equipe()
    {
        return $this->belongsToMany(Equipe::class,  'projetos_disciplinas')->withTimestamps();
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class,'professor_id');
    }
}
