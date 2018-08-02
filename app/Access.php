<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $fillable = ['user_id', 'datetime'];
}
