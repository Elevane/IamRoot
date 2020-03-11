<?php


namespace App\Http\Controllers;



use App\Article;
use App\category;
use App\Repositories\CategoryRepository;
use Illuminate\Contracts\Notifications\Factory;
use Illuminate\Contracts\View\View;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $blogs = $this->repository->all();
        $category = $this->categoryRepository->all();

        return view('laravel.blog', array('blogs'=> $blogs,'category' => $category));
    }


    /**
     * return to the view of wich article has been select0
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redirectToBlog($id){
         $blog = $this->repository->find($id);
        return view('laravel.article.blog', array('id'=> $id, 'blog' => $blog));
    }


    /**
     * return all article depending on your roles
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function  getArticleByRole(Request $request){
        $user = $user = Auth::user()->getAuthIdentifierName();
        $blogs = $this->repository->getBlogByRole($user);
        return view('laravel.article.blog', array('blogs'=> $blogs));
    }



}
