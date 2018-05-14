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

    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'user_id');
    }

    public function escola()
    {
        return $this->hasOne(Escola::class, 'user_id');
    }

    public function avaliador()
    {
        return $this->hasOne(Avaliador::class, 'user_id');
    }

    public function professor()
    {
        return $this->hasOne(Professor::class, 'user_id');
    }

    public function aluno()
    {
        return $this->hasOne(Aluno::class, 'user_id');
    }

    public function auditoria()
    {
        return $this->hasOne(Auditoria::class, 'user_id');
    }

    public function dados_pessoais()
    {
        return $this->hasOne(Dados_Pessoais::class, 'user_id','id');
    }

    public function projeto()
    {
        return $this->hasOne(Projeto::class, 'user_id','id');
    }

}
