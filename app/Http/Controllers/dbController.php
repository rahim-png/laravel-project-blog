<?php

namespace App\Http\Controllers;

use Carbon\Traits\ToStringFormat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;

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


         //inserting data into database ussing model query builder
         $stu=new student;
        // below line basicly generate random name like jon23 jon456 etc
        //  $stu->name = 'Herbi' . strval(rand(1, 1000));
        //  $stu->phone='456565'.random_int(1,100);
        //  $stu->batch='b4';
        //  $stu->save();
        //  if($stu->save()){
        //     echo "data inserted";
        //  }else{
        //     echo "data not inserted";    
        //  }

        //deleting data from database ussing model query builder
        // $stu=student::find(3); //find data by id
        // $stu->delete();
        // echo "data deleted";
        //updating data from database ussing model query builder
        // $stu=student::find(4); //find data by id
        // $stu->name='updated name';
        // $stu->phone='0000000';
        // $stu->batch='b1';
        // $stu->save();
        // echo "data updated";

        //or deleting data 



         return view('data',['users'=>$users ,'students'=>$students ,'dEch1'=>$dataEch1]);
    }
}
  