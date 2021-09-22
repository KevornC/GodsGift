<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChangeDormName extends Controller
{
  function viewChangeDormName(){
    return view('ChangeDormName');
  }

    function ChangeDormName(Request $req){
      $data1 = DB::table('room')
      ->where('DormName','=',$req->NewDormName)
      ->count();
      if($data1 == 1)
        {
            return view('Dorm');
        }
        else{

      DB::table('room')
      ->where('changedname',$req->OldDormName)
      ->update(['changedname'=>$req->NewDormName]);

      $data2=DB::select("select * from room where changedname = :changedname",['changedname'=>$req->NewDormName]);

      foreach ($data2 as $value) {
      $DormName = $value->DormName;
      $DormMotto = $value->DormMotto;
      $Floor = $value->floor;
      $changedname=$value->changedname;
    }
      session()->put('DormName',$changedname);
      return view('/ViewDormRoom');
    }}
}
