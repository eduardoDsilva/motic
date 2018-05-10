<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password','tipoUser',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function escola()
    {
        return $this->hasOne(Escola::class, 'user_id');
    }

    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'user_id');
    }
    /*
        public function dados_pessoais()
        {
            return $this->hasOne(Dados_Pessoais::class, 'user_id','id');
        }
    */
}
