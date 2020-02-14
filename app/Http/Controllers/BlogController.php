<?php


namespace App\Http\Controllers;


use function GuzzleHttp\Psr7\str;

class BlogController extends Controller
{
    /**
     * article home page
     * @return view
     */
    public function index(){
        return view('laravel.blog');
    }

    /**
     * return to the view of wich article has been select0
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function redirectToBlog($id){

        $template = strval('laravel.article.'.$id);
        return view($template);
    }

}
