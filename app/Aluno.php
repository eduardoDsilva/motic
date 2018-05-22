<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'anoLetivo','turma', 'equipe', 'escola_id', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'id_equipe');
    }

    public function escola()
    {
        return $this->belongsTo(Escola::class, 'escola_id', 'id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'escola_id', 'id');
    }

    public function ano()
    {
        return $this->belongsTo(Ano::class,'ano_id');
    }
}
