<?php


namespace App\Http\Controllers;

use App\Mail\Admin;
use App\Mail\Contact;
use Illuminate\Support\Facades\Validator;
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
    public function contactFormAction(Request $request)
    {

        $email = $request->get('email');
        $validator = Validator::make($request->all(), [
            'lastname' => 'required|between:5,20|alpha',
            'firstname' => 'required|between:5,20|alpha',
            'email' => 'required|email|regex:^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$^',
            'message' => 'required|max:250',
        ]);

        if ($validator->fails()) {
            return redirect('contact')
                ->withErrors($validator)
                ->withInput();
        } else {
            Mail::to($email)
                ->send(new Contact($request->all()));
            Mail::to($email)
                ->send(new Admin($request->all()));
            return view('contact');
        }
    }

}
