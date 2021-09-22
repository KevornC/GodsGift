<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangeProfileImage extends Controller
{
  function viewChangeProfileImage(){
    return view('ChangeProfileImage');
  }
  function ChangeProfileImage(Request $req){
    $photo=$req->file('photo')->getClientOriginalName();
    $destination = base_path() . '/public/images';
    $req->file('photo')->move($destination, $photo);
    DB::table('residents')
    ->where('Email',$req->Session()->get('Email'))
    ->update([
      'photo' => $photo
    ]);

    $data2=DB::select("select * from residents where Email = :Email",['Email'=>$req->Session()->get('Email')]);

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
    $photo = $value->photo;
  }
//   dd($data2);
// }
    Session()->put('photo',$photo);
    return redirect('/ViewProfile');

  }
}
