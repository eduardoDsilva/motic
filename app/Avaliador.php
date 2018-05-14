<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliador extends Model
{

    protected $table = 'Avaliadores';

    protected $fillable = [
        'projeto_id', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function projeto()
    {
        return $this->belongsToMany(Projeto::class);
    }
}
