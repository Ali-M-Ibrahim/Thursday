<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
//        return "hello my class";
        return response()->json(["course"=>"web2","teacher"=>"ali"])
            ->withHeaders([
                'accept'=>"application/json",
                "mykey"=>"hello team"
            ]);
    }

    public function index2($id){
        return "the parameter is " .$id;
    }
}
