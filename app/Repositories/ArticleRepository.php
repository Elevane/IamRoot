<?php


namespace App\Repositories;


use App\Article;
use App\Category;
use App\User;

class ArticleRepository extends RessourceRepository
{
    public function all(){
        return Article::all();
    }

    public function getById($id)
    {
        return Article::find($id);
    }


    public function getallByRole(){
        $blogs1 = Article::all()->where('role_id', 1);
        $blogs2 = Article::all()->where('role_id', 2);
        $blogs3 =Article::all()->where('role_id', 3);
        $arrayblogs = [$blogs1, $blogs2, $blogs3];

        return $arrayblogs;
    }


}
