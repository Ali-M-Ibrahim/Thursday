<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\SecondController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\Resource2Controller;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CreateController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "hi class";
});

Route::get('route1',function (){
    return  "this is my first route";
});

Route::get('route2',function (){
    $a= 1;
    $b= 2;
    $c = $a + $b;
    return  "The result of the summation is:" . $c ;
});

Route::get("route3",function (){
    return response()->json(["first_name"=>"ali","last_name"=>"ibrahim"]);
});

Route::get("route4",function (){
  return response()->json(["course"=>"web2","teacher"=>"ali"])
      ->header("accept","application/json")
      ->header("mykey","hello class");
});

Route::get('route5',function (){
    return response()->json(["course"=>"web2","teacher"=>"ali"])
        ->withHeaders([
            'accept'=>"application/json",
            "mykey"=>"hello team"
        ]);
});

Route::get('route6/{id}',function ($id){
    return "the passed id is:" . $id;
});

Route::get('route7/{id}/{name}',function ($id,$name){
    return "the passed id is:" . $id . " and the name is". $name;
});

Route::get('route-8',function (){
    return "this is route 8";
})->name("my-route");


//option 1
Route::get('route9',[FirstController::class,'index']);
Route::get('route10/{id}',[FirstController::class,'index2'])->name('test');
//option 2
Route::get('route11','App\Http\Controllers\FirstController@index');
//option 3
Route::get('route12', [
    'uses' => 'App\Http\Controllers\FirstController@index',
    'as' => 'customers'
]);

Route::get('route13',function(){
    return "hi";
});

Route::get('route13',[SecondController::class,'index']);
Route::get('route14/{id}','App\Http\Controllers\SecondController@store');
Route::resource('myModel',ResourceController::class);
Route::resource('myModel2',Resource2Controller::class);

Route::resources([
    'myModel3'=>ResourceController::class,
    'myModel4'=>Resource2Controller::class,

]);

Route::resource('myModel5',ResourceController::class)->only([
    'store','create'
]);

Route::resource('myModel5',ResourceController::class)->except([
    'store','create'
]);

Route::apiResource('test',ApiController::class);
Route::get('create-student',[CreateController::class,"create"]);
