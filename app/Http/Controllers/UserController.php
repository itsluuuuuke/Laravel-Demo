<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index(){
    	echo '<br>User Controller.';
    }
    public function showPath(Request $request){
    	$uri = $request->path();
    	echo '<br>uri: '.$uri;

    	$url = $request->url();
    	echo '<br>url: '.$url;

    	$method = $request->method();
    	echo '<br>method: '.$method;
    }
}
