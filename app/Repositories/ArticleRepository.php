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


    public function getallByRole($user){
        $userid = $user->id;
       $blogs = Article::all();
        $arrayblogs = [];
       foreach ($blogs as $b){
           if($b['role_id'] <= $userid){
               $arrayblogs = [$b];
           }

       }
       
        return $arrayblogs;
    }


}
