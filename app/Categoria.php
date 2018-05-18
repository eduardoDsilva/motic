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
        return $this->belongsToMany(Escola::class,  'escolas_categorias')->withTimestamps();
    }

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'categoria_id', 'id');
    }


}
