<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie(Request $request){
    	$minutes = 1;
    	$response = new Response("Hello Laravel!");
    	$response->cookie('name','Luke',$minutes);
    	return $response;
    }
    public function getCookie(Request $request){
    	$value = $request->cookie('name');
    	echo $value;
    }
}
