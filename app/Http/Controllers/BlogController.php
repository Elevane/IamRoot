<?php


namespace App\Http\Controllers;


use function GuzzleHttp\Psr7\str;

class BlogController extends Controller
{
    /**
     * blog home page
     * @return view
     */
    public function index(){
        return view('laravel.blog');
    }

    /**
     * return to the view of wich blog has been select0
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redirectToBlog($id){
        dd($id);
        $template = strval('laravel.article'.$id);
        return view($template);
    }

}
