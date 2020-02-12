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

    /**
     * about page
     */
    public function aboutAction(){

        return view('about');
    }

    /**
     * Plans page
     */
    public function plansAction(){

        return view('about');
    }
}
