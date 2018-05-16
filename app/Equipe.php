<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    public function coorientador()
    {
        return $this->belongsToMany(Coorientadores::class,  'equipes_coorientadores')->withTimestamps();
    }

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'id');
    }

    public function projeto()
    {
        return $this->belongsTo(Projeto::class, 'equipe_id', 'id');
    }

    public function escola()
    {
        return $this->belongsTo(Escola::class, 'equipe_id', 'id');
    }

}
