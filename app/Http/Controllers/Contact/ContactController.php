<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function create()
    {
        return view('contact.create',[]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
        $contactSubmission = \App\ContactSubmission::create($request->only([
            'name','email','message'
        ]));
        \Mail::send(new \App\Mail\ContactSubmissionCreated($contactSubmission));
        return redirect('/contact/thank-you');
    }

    public function show(){
        return view('contact.show',[]);
    }

}
