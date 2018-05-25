<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    protected $fillable = [
        'name', 'telefone', 'user_id',
    ];
    public function user()
    {
        return $this->hasOne(User::class,'user_id');
    }

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'escola_id', 'id');
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class, 'escola_id', 'id');
    }

    public function categoria()
    {
        return $this->belongsToMany(Categoria::class, 'escolas_categorias', 'escola_id','categoria_id');
    }

}