<?php


namespace App\Http\Controllers;


use App\Http\Entities\Blog;
use function GuzzleHttp\Psr7\str;

class BlogController extends Controller
{
    private $blog =  [
        [ "id" => 1,
            'category' => 1,
            'titre'=> 'tire1',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.gb',

        ],
        [ "id" => 2,
            'category' => 1,
            'titre'=> 'tire2',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.gb',

        ],
        [ "id" => 2,
            'category' => 2,
            'titre'=> 'tire3',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.gb',

        ],
    ];

    /**
     * article home page
     * @return view
     */
    public function index(){
        return view('laravel.blog', array('blogs'=> $this->blog));
    }

    /**
     * return to the view of wich article has been select0
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redirectToBlog($id){

        $blogs =[];
        foreach($this->blog as $b){
            if ($b['category'] == $id){
                array_push($blogs, $b);
            }
        }
        return view('laravel.article.blog', array('id'=> $id, 'blogs' => $blogs));
    }

    public function redirectToCategory($id){
        $blogs =[];
        foreach($this->blog as $b){
            if ($b['category'] == $id){
                array_push($blogs, $b);
            }
        }
        return view('laravel.category.blog', array('id'=> $id, 'blogs' => $blogs));
    }

}
