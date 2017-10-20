<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistration extends Controller
{
    public function postRegister(Request $request){
    	//Retrieve from name field
    	$name = $request->input('name');
    	echo "<br>name: ".$name;

    	//Retrieve from username field
    	$username = $request->input('username');
    	echo "<br>username: ".$username;

    	//Retrieve from password field
    	$password = $request->input('password');
    	echo "<br>password: ".$password;

    }
}
