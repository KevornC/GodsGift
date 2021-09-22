<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangeMotto extends Controller
{
  function viewChangeMotto(){
    return view('ChangeMotto');
  }
    function ChangeMotto(Request $req){
      $data1 = DB::table('room')
      ->where('DormMotto','=',$req->OldDormMotto)
      ->count();
      if($data1 == 1)
        {
            return view('Dorm');
        }
        else{
      DB::table('room')
      ->where('DormMotto',$req->OldDormMotto)
      ->update(['DormMotto'=>$req->NewDormMotto]);

      $data2=DB::select("select * from room where DormMotto = :DormMotto",['DormMotto'=>$req->NewDormMotto]);

      foreach ($data2 as $value) {
      $DormName = $value->DormName;
      $DormMotto = $value->DormMotto;
      $Floor = $value->floor;
      $changedname=$value->changedname;
    }
      session()->put('DormMotto',$DormMotto);
      return view('/ViewDormRoom');
    }
  }
}
