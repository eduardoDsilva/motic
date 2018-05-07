<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    protected $fillable = [
        'nome', 'tipo', 'telefone', 'user_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\Usuario');
    }

}
