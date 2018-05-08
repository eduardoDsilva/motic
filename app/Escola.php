<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    protected $table = "escola";

    protected $fillable = [
        'name', 'tipo', 'telefone', 'user_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\Usuario');
    }

}
