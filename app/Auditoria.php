<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    protected $fillable = [
        'tipo', 'descricao', 'objeto', 'nome_usuario', 'id_acao', 'user_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class,'user_id');
    }
}
