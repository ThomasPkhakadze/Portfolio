<?php

namespace App\Http\Controllers\front;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class MailController extends Controller
{
    public function send(Request $request){
        
       $data = $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|email',
            'text' => 'required|string'

        ]);

        Mail::to('tom@tom.com')->send(new ContactForm($data));

        
       return Redirect::to(url('#success'));
    }
}
