<?php


namespace App\Repositories;


use App\Models\Article;

class ArticleRepository extends RessourceRepository
{
    public function all(){
        return Article::all();
    }

    public function getById($id)
    {
        return Article::find($id);
    }
    public function getByCategory($id){
         return Article::where('category', $id)->get();
    }
}
