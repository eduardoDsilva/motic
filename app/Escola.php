<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{

    protected $fillable = [
        'name', 'telefone', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'escola_id', 'id');
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class, 'escola_id', 'id');
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'equipe_id', 'id');
    }

}
