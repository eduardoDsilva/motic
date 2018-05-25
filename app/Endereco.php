<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'rua', 'numero', 'complemento', 'bairro', 'cep', 'cidade', 'estado', 'pais', 'user_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class,'user_id');
    }

}