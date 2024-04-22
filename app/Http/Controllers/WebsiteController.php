<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WebsiteController extends Controller
{

    use ApiResponse;
    public function __construct()
    {
//        $this->middleware('checksecret');

    }
    public function index(){

        $obj = Customer::find(1);
//        return view('First',['myobject'=>$obj,'myvariable'=>"Hello I am variable"]);

//        $myobject = Customer::find(2);
//        $myvariable= "test";
//        return view('First',compact('myobject','myvariable'));
//
        $this->AddDataToView();
         $obj2 =  Customer::find(1);;
         return view('First')->with('myobject',$obj2)
             ->with('myvariable',1);

    }


    public function AddDataToView(){
        $added_variable = " I am data from function";
        View()->share('global_variable',$added_variable);
    }

    public function getData(){
        $obj = Customer::find(1);
        return view('template');
    }


    public function mytest(){
        $obj = Customer::find(1);
//       return  $this->SuccessResponse($obj);
        return $this->ErrorResponse('Error has occured');
    }

}
