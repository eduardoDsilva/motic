<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{

    protected $fillable = [
        'name', 'tipoEscola', 'telefone', 'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
