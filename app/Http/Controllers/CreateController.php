<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;

class CreateController extends Controller
{
  public function create(){
      
      $obj = new Student();
      $obj->first_name= "Ali";
      $obj->last_name= "ibrahim";
//      $obj->address= "baabda";
      $obj->age= 28;
//      $obj->is_registered= true;
      $obj->telephone= "123";
      $obj->save();

      return "ok";
  }
}
