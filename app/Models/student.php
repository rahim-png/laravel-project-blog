<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class student extends Model
{
    //
    public $timestamps=false; //if you dont want created_at and updated_at field in database
    use HasFactory;
    //protected $table='students'; //if table name is different from model name

     function fun(){
        
         $test='test function from model new ';
         return $test;
    }
  
}
