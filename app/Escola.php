<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Escola extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    protected $fillable = [
        'name', 'telefone', 'projetos', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function aluno()
    {
        return $this->hasMany(Aluno::class, 'escola_id', 'id');
    }

    public function professor()
    {
        return $this->hasMany(Professor::class, 'escola_id', 'id');
    }

    public function categoria()
    {
        return $this->belongsToMany(Categoria::class, 'escolas_categorias', 'escola_id', 'categoria_id');
    }

    public function projeto()
    {
        return $this->hasMany(Projeto::class);
    }

    public function generateTags(): array
    {
        return [
           // $this->categoria->categoria,
            $this->user->username,
        ];
    }
}