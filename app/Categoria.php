<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'categoria', 'descricao',
    ];

    public function escola()
    {
        return $this->belongsToMany(Escola::class,  'escolas_categorias', 'escola_id', 'categoria_id');
    }

    public function aluno()
    {
        return $this->hasMany(Aluno::class, 'aluno_id', 'id');
    }

    public function projeto()
    {
        return $this->hasMany(Projeto::class);
    }

}
