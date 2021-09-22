<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;

class Register extends Controller
{
  function viewsignup(){
    return view('signup');
  }

    function Register(Request $req){
$data1 = DB::table('residents')->count('DormNumber');
$data3 = DB::table('residents')
->where('Email',$req->Email)
->count('Email');
if ($data1==12) {
  DB::table('waitingroom')->insert([
    'Fullname' => $req->Firstname." " .$req->Lastname,
'Email' => $req->Email,
]);
  return view('DormFacilityFull');
}elseif($data1 == 8)
  {
      return view('DormFull');
  }
  elseif($data3 == 1){
    return view('MemberAlreadyExist');
  }
  else
  {

  $photo=$req->file('photo')->getClientOriginalName();
  $destination = base_path() . '/public/images';
  $req->file('photo')->move($destination, $photo);
  $req->Session()->put('photo',$photo);
  DB::table('residents')->insert([
'Floor' => 'A',
'FirstName' => $req->Firstname,
'MiddleName' => $req->Middlename,
'LastName' => $req->Lastname,
'Gender' => $req->Gender,
'LengthOfResidency' => $req->LOR,
'DormNumber' => $req->dormNum,
'Email' => $req->Email,
'password' => $req->password,
'photo' => $photo,
]);

$details= [
  'Email'=>$req->Email,
  'title'=>"Registration Successful",
  'body'=>"Thank you for registering for the heart dormitory!",
];
Mail::to($req->Email)->send(new RegisterMail($details));
$DormName="A".$req->dormNum;
$data2=DB::table('residents')
->where('DormNumber',$req->dormNum)
->count('DormNumber');
DB::table('room')->where('DormName','=',$DormName)->update([
'TotalMembers'=>$data2
]);


      return view('Login');
    }
  }
}
