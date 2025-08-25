<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\JasonController;
use App\Http\Controllers\DbController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\cuntryChack;

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
    return view('about');
})->middleware(CuntryChack::class);
//call userController

Route::get('user',[UserController::class,'getUser']);

Route::get('userName/{name}',[UserController::class,'userNa']);

Route::get('adminLogin',[UserController::class,'login']);
Route::get('logout/{name}',[UserController::class,'logout']);


Route::get('contact',[UserController::class,'contactF']);
Route::get('ckc',[UserController::class,'ck']);


//useingroute controller grouping
Route::controller(UserController::class)->group(function(){
    
Route::get('/sin','sinni')->middleware(cuntryChack::class);

Route::get('/add','login');

Route::post('/add', 'addu')->middleware(middleware: AgeCheck::class);
});

//database route
Route::get('/data', [DbController::class, 'index']);

//jason route
Route::get('/jason', [App\Http\Controllers\JasonController::class, 'index']);