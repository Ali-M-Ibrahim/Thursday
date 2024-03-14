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

    public function getAll(){
        $obj = Product::all(); // select * from products;
        return $obj;
    }

    public function getByName($name){
        $obj = Product::where('name',$name)->get(); // select * from products where name=$name;
        return $obj;
    }

    public function getByNameAndPrice($name,$price){
        $obj = Product::where('name',$name)
            ->where('price',$price)
            ->get(); // select * from products where name=$name and price = $price;
        return $obj;
    }

    public function getByNameAndPriceGreater($name,$price){
        $obj = Product::where('name',$name)
            ->where('price','>=' ,$price)
            ->get(); // select * from products where name=$name and price = $price;
        return $obj;
    }


    public function getFirstByNameAndPriceGreater($name,$price){
        $obj = Product::where('name',$name)
            ->where('price','>=' ,$price)
            ->first(); // select * from products where name=$name and price = $price limit 1;
        return $obj;
    }


    public function getFirstProduct($name){
        $obj = Product::firstWhere('name',$name);
//        $obj = Product::where('name',$name)->first();
        return $obj;
    }

    public function getProductById($id){
        $obj = Product::find($id); // select *  from products where id=$id;
        return $obj;
    }

    public function getByNameOrPrice($name,$price){
        $obj = Product::where('name',$name)
            ->Orwhere('price',$price)
            ->get(); // select * from products where name=$name or price = $price;
        return $obj;
    }

    public function getProductBySeveralId($id1,$id2,$id3){
        $obj = Product::where('id',$id1)
        ->orWhere('id',$id2)
            ->orWhere('id',$id3)->get()
        ; // select *  from products where id=$id11 or id=$id2 or id=$id3;
        return $obj;
    }

    public function getProductInSeveralId($id1,$id2,$id3){
        $obj = Product::whereIn('id',[$id1,$id2,$id3])->get() ;
        // select *  from products where id in ($id1,$id2,$id3);
        return $obj;
    }

    public function getProductWherePriceBetween($price1,$price2){
        $obj = Product::whereBetween('price',[$price1,$price2])
         ->get()
        ; // select *  from products where id=$id11 or id=$id2 or id=$id3;
        return $obj;
    }

    public function getCountWherePriceBetween($price1,$price2){
        $obj = Product::whereBetween('price',[$price1,$price2])
            ->count()
        ; // select count(*)  from products where price between $price1 and $price2
        return $obj;
    }

    public function getMinIdWherePriceBetween($price1,$price2){
        $obj = Product::whereBetween('price',[$price1,$price2])
            ->min('id')
        ; // select  min(id) from products where price between $price1 and $price2
        return $obj;
    }

    public function getMaxIdWherePriceBetween($price1,$price2){
        $obj = Product::whereBetween('price',[$price1,$price2])
            ->max('id')
        ; // select  min(id) from products where price between $price1 and $price2
        return $obj;
    }


    public function getAvgIdWherePriceBetween($price1,$price2){
        $obj = Product::whereBetween('price',[$price1,$price2])
            ->avg('price')
        ; // select  avg(price) from products where id=$id11 or id=$id2 or id=$id3;
        return $obj;
    }


    public function getProductWherePriceBetweenSelect($price1,$price2){
        $obj = Product::whereBetween('price',[$price1,$price2])
            ->select(['name','description'])
            ->get()
        ; // select name,description  from products where id=$id11 or id=$id2 or id=$id3;
        return $obj;
    }



    public function getElementByIdOrFail($id){
        $obj = Product::findOrFail($id);
        return $obj;
    }


    public function getFirstProductOrFail($name){
        $obj = Product::where('name',$name)
            ->firstOrFail(); // select * from products where name=$name and price = $price limit 1;
        return $obj;
    }

    public function getFirstProductOr($name){
        $obj = Product::where('name',$name)
            ->firstOr(function(){
                return "hi";
            }
            );
        return $obj;
    }


    public function getProductBySeveralIdOrderByDesc($id1,$id2,$id3){
        $obj = Product::where('id',$id1)
            ->orWhere('id',$id2)
            ->orWhere('id',$id3)
            ->orderBy('id','desc')
            ->get()
        ; // select *  from products where id=$id11 or id=$id2 or id=$id3;
        return $obj;
    }


}
