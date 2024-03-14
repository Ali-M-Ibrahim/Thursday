<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Customer;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    public function getCustomerById($id){

         $obj = Customer::find($id);


       $data= [
           'customerdata'=>$obj,
            'customer_info'=> $obj->getCustomerInfo,
           'accounts'=>$obj->getAccounts,
           'services'=>$obj->getServices

        ];




       return response()->json($data);
    }
}
