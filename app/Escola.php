<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    protected $table = "escola";

    protected $fillable = [
        'name', 'tipoEscola', 'telefone', 'user_id', 'endereco_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}