<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function index()
    {
        //return DB::select('SELECT * FROM users'); same as below
         $users=DB::table('users')->get();
         $students=\App\Models\student::all();
        //model function call
         $dataEch=new \App\Models\student;
         $dataEch1= $dataEch->fun();

         return view('data',['users'=>$users ,'students'=>$students ,'dEch1'=>$dataEch1]);
    }
}
