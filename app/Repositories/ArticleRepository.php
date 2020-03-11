<?php


namespace App\Repositories;


use App\Article;
use App\category;
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
    public function getByCategory($id){
         return Article::where('category', $id)->get();
    }

    /**
     * return all blogs according to the plans/role of the user
     * @param String $userName
     * @return mixed
     */
    public function getBlogByRole(String $userName){
        $user = User::find($userName);
        $roles = $user->roles();
        $category = $roles->categories();
        $blogs = Article::where('category', $category)->get();

        return $blogs;
    }
}
