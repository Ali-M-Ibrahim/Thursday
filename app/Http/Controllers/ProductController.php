<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create1(){
        $obj = new Product();
        $obj->name='Product 1';
        $obj->description="This is my product description";
        $obj->price=20.5;
        $obj->save();
        return response()->json(['message'=>'Data was created']);
    }
    public function create2(){
        Product::create([
           "name"=>"Product 2",
           "description"=>"This is my product 2 description",
           "price"=>50.5
        ]);
        return response()->json(['message'=>'Data was created']);
    }

    public function create3(Request $request){
        Product::create($request->all());
        return response()->json(['message'=>'Data was created']);
    }


    public function getElementById(){
        $obj = Product::find(3);
        return $obj;
    }

    public function getElementByCondition(){
        $obj = Product::where('name','Product 1')
            ->where('price','>',21)
            ->get();
        return $obj;
    }

    public function getElementByIdParam($id){
        $obj = Product::find($id);
        return $obj;
    }

    public function updateElement($id){
        $obj = Product::find($id);
        $obj->name='Product 1 updated';
        $obj->description="This is my product description updated";
        $obj->price=25;
        $obj->save();
        return response()->json(['message'=>'Data was updated']);
    }
    public function updateElementMass(){
        Product::where('name','Product 1 updated')
            ->update(['name'=>'Product 1']);
        return response()->json(['message'=>'Data was updated']);
    }
    public function deleteElement($id){
        $obj = Product::find($id);
        $obj->delete();
        return response()->json(['message'=>'Data was deleted']);
    }
    public function deleteMass(){
        Product::where('name','Product 1')
            ->delete();
    }

}
