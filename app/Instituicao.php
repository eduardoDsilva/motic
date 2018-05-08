<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $table = 'instituicao';

    protected $fillable = [
        'name', 'tipo', 'telefone', 'user_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\Usuario');
    }

}
