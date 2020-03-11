<?php


namespace App\Repositories;


use App\category;

class CategoryRepository
{
    public function all(){
        return category::all();
    }

    public function getById($id)
    {
        return category::find($id);
    }
}
