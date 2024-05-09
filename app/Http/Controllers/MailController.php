<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\DemoMail;

use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function index()
    {
        $mailData=[
            "title"=>"Mail from meghagangwal",
            "body"=>"This is for testing email using  smtp",


        ];
         Mail::to('meghagangwal1201@gmail.com')->send(new DemoMail($mailData));
        dd("Email send successfully");
    }
}
