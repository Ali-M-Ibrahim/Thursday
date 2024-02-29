<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function index(){
        return "hi haidar";
    }

    public function store($id){
        return "the id is:" .$id;
    }
}
