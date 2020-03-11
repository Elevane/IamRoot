<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    const CATEGORY = 'category';

    protected $fillable =[
      'category'
    ];
    public function Category()
    {
        return $this->belongsTo('App\Category');
    }
}
