<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = "professores";

    protected $fillable = [
        'matricula', 'escola_id', 'user_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

    public function escola()
    {
        return $this->hasMany(Escola::class, 'escola_id', 'id');
    }
}
