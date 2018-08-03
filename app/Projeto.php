<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Projeto extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'titulo', 'area', 'estande', 'resumo', 'ano', 'tipo', 'avaliadores', 'status', 'categoria_id', 'escola_id'
    ];

    public function avaliador()
    {
        return $this->belongsToMany(Avaliador::class, 'avaliadores_projetos');
    }

    public function disciplina()
    {
        return $this->belongsToMany(Disciplina::class, 'projetos_disciplinas');
    }

    public function aluno()
    {
        return $this->hasMany(Aluno::class);
    }

    public function professor()
    {
        return $this->hasMany(Professor::class);
    }

    public function nota()
    {
        return $this->hasMany(Nota::class);
    }

    public function escola()
    {
        return $this->belongsTo(Escola::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function generateTags(): array
    {
        return [
            $this->escola->name,
            $this->categoria->categoria,
        ];
    }
}
