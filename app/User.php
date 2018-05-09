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
        return $this->hasOne(Escola::class, 'user_id','id');
    }

    public function projeto()
    {
        return $this->hasOne(Projeto::class, 'user_id','id');
    }

    public function avaliador()
    {
        return $this->hasOne(Avaliador::class, 'user_id','id');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'user_id','id');
    }
}
