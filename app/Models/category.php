<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function articles()
    {
        return $this->hasMany('App\Article');
    }
}
