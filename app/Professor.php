<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Professor extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $table = "professores";

    protected $fillable = [
        'name', 'nascimento', 'sexo', 'telefone', 'grauDeInstrucao', 'cpf', 'matricula', 'tipo', 'camisa', 'projeto_id', 'escola_id', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function escola()
    {
        return $this->belongsTo(Escola::class, 'escola_id', 'id');
    }

    public function projeto()
    {
        return $this->belongsTo(Projeto::class);
    }

    public function generateTags(): array
    {
        return [
            $this->user->username,
            $this->escola->name,
        ];
    }

}
