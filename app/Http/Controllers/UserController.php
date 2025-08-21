<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\uppercase;
use App\Rules\fisup;
use Illuminate\Http\Request;
use App\Rules\firstletterUp;
use Illuminate\Support\Facades\view;


class UserController extends Controller
{
     function getUser(){
        return "rahim";
    }
  
    
    //function for take user name and display it in userNameB page

    function userNa($name){
    return view('userNameb',['n'=> $name]);
    }

    //login page view
function login(){
    return view('admin.login');
}

function logout($p){
    return view('admin.logout',['d'=>$p]);
}
//contact page


    function contactF(){
        return view('contact');
    }

    //chacking view is exitest

    function ck(){
        if(view::exists('sign')){
            return view('sign');
        }else{
            echo "view not found";
        }
        
    }

    //singnin in function
    function sinni(){
        return view('admin.signni');
    }
    // a function for if else and foreatch loops check

    

      //home view 
    function home(){
         $name='rahim';
         $users=['ray','max','filip','pater'];
        return view('home',['na'=>$name, 'us'=>$users]);
        
    } 

    //function for adding user request

    function addu(Request $request){
        echo'this is from addu function <br>';
       
        $request->validate([
            //this is basically validation rule.
            'username'=> 'required|min:3|max:15|uppercase',
            'email'=> 'required|email',
            'city'=> ['required', new Fisup],
            'skill'=> 'required|min:1',
        ],[
            //inside you can write your own validate rule error massage .
            'username.required'=> 'username con not be empty',
            'email.email'=> 'are you made? this email is not valid and fill the email again',
            'username.min'=>'username min characters should be 3',
            'username.max'=>'username max characters limit is 15',
            
        ]);
            //checking all input valu like username, city,email.
        return [$request->username, $request->city, $request->email];
       

    }
   
}





