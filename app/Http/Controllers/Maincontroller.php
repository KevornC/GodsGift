<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maincontroller extends Controller{
      function home(){
        return view('homepage');
      }
      function mission(){
        return view('mission');
      }
      function vision(){
        return view('vision');
      }
      function contact(){
        return view('contact');
      }
      function ViewProfile(){
        return view('ViewProfile');
      }
      function ViewDormRoom(){
        return view('ViewDormRoom');
      }
      function ViewDormMembers(){
        return view('ViewDormMembers');
      }
      function AlertMessage(){
          return view('Dorm');
      }
      function DormFull(){
          return view('DormFull');
      }
      function AlertRegistratione(){
        return view('MemberAlreadyExist');
  }
      function ViewAllDormRoom(){
        return view('ViewAllDormRoom');
        }
}
