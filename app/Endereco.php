<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Endereco extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = [
        'rua', 'numero', 'complemento', 'bairro', 'cep', 'cidade', 'estado', 'pais', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function generateTags(): array
    {
        return [
            $this->user->username,
        ];
    }
}