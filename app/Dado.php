<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dado extends Model
{

    protected $fillable = [
        'name', 'nascimento', 'sexo', 'email', 'telefone', 'grauDeInstrucao', 'cpf', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
