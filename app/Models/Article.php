<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    public function Category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
