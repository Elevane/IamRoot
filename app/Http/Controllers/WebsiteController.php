<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Index page
     *
     */
    public function indexAction(){
        return view('home');
    }

    /**
     * Contact  page
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

    /**
     * Contact  form
     * @param Request $request
     * @return View
     */
    public function contactFormAction(Request $request){

        //$data = array of all input from the form
        $data = $request->all();


        //TODO: make an If, "if the mail is sent, return to view or go to error page
        return view('contact');
    }
}
