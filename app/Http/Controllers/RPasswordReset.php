<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RPasswordReset extends Controller
{
  function viewPasswordReset(){
    return view('PasswordReset');
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
      $data2=DB::select("select * from residents where Email = :Email",['Email'=>Session()->get('Email')]);

      foreach($data2 as $value) {
      $password = $value->password;
    }
      session()->put('Password',$password);
      return redirect('/Dashboard');
    }else{
      return view('NotFound');
    }
    }
}
