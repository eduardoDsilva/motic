<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $fillable = [
        'nome', 'username', 'email', 'password','tipo',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function escola()
    {
        return $this->hasOne('App\Escola', 'foreign_key', 'local_key');
    }

}
