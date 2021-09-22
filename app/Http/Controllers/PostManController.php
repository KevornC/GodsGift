<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostManController extends Controller
{
    public function Api(Request $request){
      return ['course'=>'PHP', 'Duration'=>'6 months'];
    }
}
