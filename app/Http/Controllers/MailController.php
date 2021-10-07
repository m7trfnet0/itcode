<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){
        $details=[
            'title'=>'Mail Form Ahmed Test Laravel 8',
            'body'=>'This Is Fore Testing mail useng laravel'
        ];
        Mail::to('tayar.shaeby@gmail.com')->send(new TestMail($details));
        return 'Email Sent';
    }
}
