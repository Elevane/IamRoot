<?php


namespace App\Http\Controllers;


class WebsiteController extends Controller
{
    /**
     * Index method
     *
     */
    public function indexAction(){
        return view('home');
    }

    /**
     * Contact form controller
     */
    public function contactAction(){

        return view('contact');
    }
}
