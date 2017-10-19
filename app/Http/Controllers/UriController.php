<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UriController extends Controller
{
    public function index(Request $request){
    	//Usage of path method
    	$path = $request->path();
    	echo "<br>path Method:". $path;

    	//Usage of is method
    	$pattern = $request->is('foo/*');
    	echo "<br>is Method: ". $pattern;

    	//Usage of url method
    	$url = $request->url();
    	echo "<br>url Method: ". $url;
    }
}
