<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function postFormInfo(Request $request){
    	//print email from laravel collective form
    	echo "postFormInfo";
    	$email = $request->input('email');
    	echo "<br>name: ".$email;
    }
}
