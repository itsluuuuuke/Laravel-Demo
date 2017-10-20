<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function index(){
    	return view('uploadfile');
    }

    public function showUploadFile(Request $request){
    	$file = $request->file('image');

    	//display file name
    	echo "<br>file name: ".$file->getClientOriginalName();

    	//display file extension
    	echo "<br>file extension: ".$file->getClientOriginalExtension();

    	//display file real path
    	echo "<br>file real path: ".$file->getRealPath();

    	//display file size
    	echo "<br>file size: ".$file->getSize();

    	//Display File Mime Type
      	echo '<br>File Mime Type: '.$file->getMimeType();
   		
   		//Move Uploaded file
   		$destinationPath = 'uploads';
   		$file->move($destinationPath, $file->getClientOriginalName());
    }
}
