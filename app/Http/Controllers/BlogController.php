<?php


namespace App\Http\Controllers;



use App\Models\Article;
use App\Models\category;
use App\Repositories\CategoryRepository;
use Illuminate\Contracts\Notifications\Factory;
use Illuminate\Contracts\View\View;
use App\Repositories\ArticleRepository;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Psr7\str;

class BlogController extends Controller
{


    public function __construct(ArticleRepository $repository, CategoryRepository $categoryRepository)
    {
      $this->repository =  $repository;
      $this->categoryRepository = $categoryRepository;
    }

    /**
     * article home page
     * @return view|Factory|\Illuminate\View\View
     */
    public function index(){
        $blogs = Article::all();
        $category = Category::all();
        return view('laravel.blog', array('blogs'=> $blogs,'category' => $category));
    }


    /**
     * return to the view of wich article has been select0
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redirectToBlog($id){
         $blog = Article::find($id);
        return view('laravel.article.blog', array('id'=> $id, 'blog' => $blog));
    }


    public function redirectToCategory($id){

        $blogs = $this->repository->getByCategory($id);

        return view('laravel.category.blog', array('id'=> $id, 'blogs' => $blogs));
    }



    public function getArticle(){

        $blog = $this->repository->all();
        return view('test', ['blog' => $blog]);
    }

}
