<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//home page route

/*Route::get('home', function(){
    return view('home');
});*/
Route::get('home',[UserController::class,'home'] );

//about page route

Route::get('/about', function(){
    return view ('about');
}); 
//call userController

Route::get('user',[UserController::class,'getUser']);

Route::get('userName/{name}',[UserController::class,'userNa']);

Route::get('adminLogin',[UserController::class,'login']);
Route::get('logout/{name}',[UserController::class,'logout']);


Route::get('contact',[UserController::class,'contactF']);
Route::get('ckc',[UserController::class,'ck']);

Route::get('/sin',action: [UserController::class,'sinni']);
Route::get('/add',[UserController::class,'login']);

Route::post('/add',[UserController::class,'addu']);
