<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliador extends Model
{

    protected $table = 'Avaliadores';

    protected $fillable = [
        'name', 'nascimento', 'sexo', 'telefone', 'grauDeInstrucao', 'cpf', 'projeto_id', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projeto()
    {
        return $this->belongsToMany(Projeto::class);
    }

    public function suplente()
    {
        return $this->belongsToMany(Suplente::class);
    }
}
