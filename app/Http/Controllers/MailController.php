<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request){
      $details= [
        'title'=>'Sent from Mail Controller',
        'body'=>'Your head is big'
      ];
      Mail::to('amberstudentneika@gmail.com')->send(new TestMail($details));
      return "Email Sent";
    }
}
