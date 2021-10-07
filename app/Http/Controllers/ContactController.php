<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;
class ContactController extends Controller
{
    public function contact(){
        return view('contact-us');
    }
    public function sendEmail(Request $request){
        $datalis=[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];
        Mail::to('tayar.shaeby@gmail.com')->send(new ContactMail($datalis));
        return back()->with('message_sent','Your Message has been sent successfully!');
    }
}
