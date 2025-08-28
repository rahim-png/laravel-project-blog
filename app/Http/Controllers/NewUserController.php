<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class NewUserController extends Controller
{
    //

    function login(Request $request) {

        $username = $request->validate(
            [
                'user' => 'required|min:5|max:20',
                'password' => 'required|min:5|max:20'
            ],
            [
                'user.required' => 'user name is required //testing',
                
                'password.required' => 'password is required//testing'
               
            ]   
        );

        
         $request->session()->put('user',$request->Input('user'));
            
         return redirect('profile')->with('user', $username['user']);
        
    
    }

    //logout function here
    function logout(Request $request) {
        // Remove 'user' data from the session
        $request->session()->forget('user');
        echo 'You have been logged out.';
        
        return redirect('Login');
    }
    
}

