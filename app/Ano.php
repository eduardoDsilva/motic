<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ano extends Model
{
    protected $fillable = [
        'ano_letivo',
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class,'aluno_id');
    }
}
