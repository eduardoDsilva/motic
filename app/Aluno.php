<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'turma', 'escola_id', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'id');
    }

    public function escola()
    {
        return $this->belongsTo(Escola::class, 'escola_id', 'id');
    }
}
