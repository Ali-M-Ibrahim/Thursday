<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    public function index(){
        return view('UploadImage');
    }

    public function method1(Request $request){
        $filename = time() . '-' . $request->file('myfile')->getClientOriginalName();
        $request->file('myfile')->move('myImages',$filename);
        $path_to_store= 'myImages/'.$filename;
        return  $path_to_store;
    }


    public function method2(Request $request){
        $filename = time() . '-' . $request->file('myfile')->getClientOriginalName();
        $request->file('myfile')->storeAs('public/myImages',$filename);
        $path_to_store= 'storage/myImages/'.$filename;
        $obj = new Image();
        $obj->image_path=$path_to_store;
        $obj->save();
        return  response()->json(["code"=>200]);
    }

    public function displayObject(){
        $obj = Image::first();
        return view('displayImage')->with('obj',$obj);
    }


    public function method3(Request $request){
        $path_to_store = $request->file('myfile')->store('public/myImages');
        $path =  str_replace('public', 'storage', $path_to_store);
        return  $path;
    }
}
