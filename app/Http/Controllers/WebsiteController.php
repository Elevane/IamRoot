<?php


namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        return view('plans');
    }
    /**
     * tutorials page
     */
    public function tutorialsAction(){

        return view('laravel');
    }

    /**
     * Contact  form
     *
     * Get the data from the form and send an email to the
     * customer in order to validate  we recevied the demand
     * @param Request $request
     * @return view
     */
    public function contactFormAction(Request $request){

        $email = $request->get('email');
        if(!empty($email)){
            Mail::to($email)
                ->send(new Contact($request->all()));

            return view('contact');
        }else{

            return view('contact');
        }

    }
}
