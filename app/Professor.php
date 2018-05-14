<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'name', 'escola_id', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function orientador()
    {
        return $this->belongsTo(Orientador::class,'professor_id');
    }

    public function coorientador()
    {
        return $this->belongsTo(Coorientador::class,'professor_id');
    }
}
