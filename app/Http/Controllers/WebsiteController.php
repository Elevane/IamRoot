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

        return view('about');
    }

    /**
     * Contact  form
     * @param Request $request
     * @return View
     */
    public function contactFormAction(Request $request){

        //$data = array of all input from the form
        $email = $request->get('email');

        if($email){
            Mail::to($email)
                ->send(new Contact($request->all()));

            return view('contact');
        }else{
            
            return view('home');
        }




    }
}
