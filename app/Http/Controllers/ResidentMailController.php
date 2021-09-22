<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ResidentMail;
use Illuminate\Support\Facades\Mail;

class ResidentMailController extends Controller
{
    public function sendEmail(Request $request){
      $details= [
        // 'Email'=>$request->Email,
        'title'=>$request->Title,
        'body'=>$request->Message,
      ];
      Mail::to(Session()->get('Email'))->send(new ResidentMail($details));
      return view('RMessageSent');
    }
}
