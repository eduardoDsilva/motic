<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orientador extends Model
{
    public function professor()
    {
        return $this->belongsTo(Professor::class,'professor_id');
    }
}
