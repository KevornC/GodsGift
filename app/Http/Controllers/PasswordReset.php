<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasswordReset extends Controller
{
  function viewPasswordReset(){
    return view('LoginPasswordReset');
  }
    function PasswordReset(Request $req){
      $data=DB::table('residents')
      ->where('password','=',$req->OldPassword)
      ->count();
      if($data==1){
        $data=DB::table('residents')
        ->where('password','=',$req->OldPassword)
        ->update([
          'password'=>$req->password
        ]);
      return view('/Login');
    }else{
      return view('hNotFound');
    }
    }
}
