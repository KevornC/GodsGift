<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\HeartDormMail;
use Illuminate\Support\Facades\Mail;

class HeartDormMailController extends Controller
{
  function viewSendEmail($Email=null){
      return view('Send-Email-To-Members',['Email'=>$Email]);
  }
    public function sendEmail(Request $request){
      $details= [
        'Email'=>$request->Email,
        'title'=>$request->Title,
        'body'=>$request->Message,
      ];
      Mail::to('kevorn.callum16@gmail.com')->send(new HeartDormMail($details));
      return view('MessageSent');
    }
}
