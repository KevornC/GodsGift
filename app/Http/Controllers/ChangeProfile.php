<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangeProfile extends Controller
{
  function viewChangeProfile(){
    return view('ChangeProfile');
  }
  function ChangeProfile(Request $req){
    $data1=DB::table('residents')
    ->where('Email',$req->OldEmail)
    ->count();
if($data1 == 1){
  DB::table('residents')
  ->where('Email',$req->OldEmail)
  ->update([
    'LengthOfResidency' => $req->LOR,
    'Email' => $req->NewEmail
  ]);
    $data2=DB::select("select * from residents where Email = :Email",['Email'=>$req->NewEmail]);

    foreach ($data2 as $value) {
    $id = $value->ResidentID;
    $Floor = $value->Floor;
    $Fname = $value->FirstName;
    $Mname = $value->MiddleName;
    $Lname = $value->LastName;
    $Gender = $value->Gender;
    $LengthOfResidency = $value->LengthOfResidency;
    $DormNumber = $value->DormNumber;
    $Email = $value->Email;
    $password = $value->password;
  }
// }
    session()->put('LengthOfResidency',$LengthOfResidency);
    session()->put('DormNumber',$DormNumber);
    session()->put('Email',$Email);
    return redirect('ViewProfile');
}
else{
      return view('NotFound');
  }

  }
}
