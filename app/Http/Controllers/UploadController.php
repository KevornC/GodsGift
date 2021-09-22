<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UploadController extends Controller
    {
      function fileupload(Request $req)
          {
            // $photo = $request->file('image')->getClientOriginalName();
            $photo=$req->file('file')->getClientOriginalName();
            $destination = base_path() . '/public/images';
            $req->file('file')->move($destination, $photo);
            $req->Session()->put('photo',$photo);
              return view("newimage");

            // return $req->file($filename)->store('docs');
          }
    }
