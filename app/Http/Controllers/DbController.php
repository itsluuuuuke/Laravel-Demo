<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DbController extends Controller
{
    public function index(){
    	$data = DB::select('select * from client where id = 1');
    	print_r($data);
    }
}
