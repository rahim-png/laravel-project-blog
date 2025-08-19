<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    //function for adding user

    function addu(Request $request){
        echo'this is from addu function <br>';
        $request->validate([
            'username'=> 'required | min:3 | max:15',
            'email'=> 'required | email',
            'city'=> 'required',
            'skill'=> 'required | min:1',
        ]);

        return $request->username;
       

    }
   
}





