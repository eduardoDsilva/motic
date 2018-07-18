<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    protected $fillable = [
        'sobre', 'local', 'quando', 'avaliacao', 'quem_pode_participar', 'jogos_motic', 'responsaveis', 'telefone_contato', 'email_contato',
    ];
}
