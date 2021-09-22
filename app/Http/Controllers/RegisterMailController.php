<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;

class RegisterMailController extends Controller
{
    public function sendEmail(Request $request){
      $details= [
        'Email'=>$request->Email,
        'title'=>"Registration Successful",
        'body'=>"Thank you for registering for the heart dormitory",
      ];
      Mail::to($request->Email)->send(new RegisterMail($details));
      return view('NewMessageSent');
    }
}
