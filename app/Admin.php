<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }


}
