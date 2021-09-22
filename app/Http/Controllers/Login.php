<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{
  function login1(){
    if(session()->has('Email')){
      // echo $request->session()->has('Email');
      return redirect('/Dashboard');
    }else{
      session()->flush();
      session()->regenerateToken();
    return view('Login');
  }
  }
    function Login(Request $req){

      $Email = $req->Email;
      $pass = $req->password;
      $data1 = DB::table('residents')
      ->where('Email','=',$Email)
      ->where('password','=',$pass)
      ->count();
      if($data1 == 1)
        {
      // $data2=DB::select("select * from residents where Email = :Email",['Email'=>$Email]);
      $data2=DB::table('residents')
      ->where('Email','=',$Email)
      ->where('password','=',$pass)
      ->get();


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
  // }
      session()->put('Firstname',$Fname);
      session()->put('Middlename',$Mname);
      session()->put('Lastname',$Lname);
      session()->put('Gender',$Gender);
      session()->put('LengthOfResidency',$LengthOfResidency);
      session()->put('DormNumber',$DormNumber);
      session()->put('Email',$Email);
      session()->put('Password',$password);
      session()->put('photo',$photo);
      $data3=DB::select("select * from resources where DRID = :DRID",['DRID'=>"A".session()->get('DormNumber',$DormNumber)]);

      foreach ($data3 as $value) {
      $DRID = $value->DRID;
      $Bunks = $value->Bunks;
      $Flats = $value->flats;
      $Lockers = $value->lockers;
      $Desk = $value->desk;
      $Chairs = $value->chairs;
      $floorCondition = $value->floorCondition;
    }
  //   dd($data3);
  // }
      session()->put('DormRoom',$DRID);
      session()->put('Bunks',$Bunks);
      session()->put('Flats',$Flats);
      session()->put('Lockers',$Lockers);
      session()->put('Desk',$Desk);
      session()->put('Chairs',$Chairs);
      session()->put('floorCondition',$floorCondition);

      $data4=DB::select("select * from residents where DormNumber = :DormNumber",['DormNumber'=>session()->get('DormNumber')]);

      session()->put('Members',$data4);
      $data5=DB::select("select * from room where DormName = :DormName",['DormName'=>"A".session()->get('DormNumber')]);


      session()->put('Rooms',$data5);
      foreach ($data5 as $value) {
      $DormName = $value->DormName;
      $DormMotto = $value->DormMotto;
      $Floor = $value->floor;
      $changedname=$value->changedname;
    }

    session()->put('DormName',$changedname);
    session()->put('DormMotto',$DormMotto);

    $data6=DB::select("select * from room");
    session()->put('AllRooms',$data6);
    return view('Dashboard');
        }
        else
        {
          return view('LoginFailed');
        }

    }
    function Dashboard(){
      if(session()->has('Email')){
        return view('Dashboard');
      }else{
      return view('Login');}
    }
    function logout(){
          if(session()->has('Email')){
            session()->forget('Email');
              session()->forget('password');
              session()->regenerateToken();
          }
          return view('Login');
      }
}
