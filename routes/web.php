<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//First Routing demo --Required parameters
Route::get('ID/{id}', function($id){
	echo 'id = ' . $id;
});

//Second Routing demo --Optional parameters
//Try: http://127.0.0.1/user
//or http://127.0.0.1/user/anotherUser
Route::get('/user/{name?}', function($name = 'Luke'){
	echo 'username: ' . $name; 
});

//Route redirect demo
Route::redirect('/redirect','/',301);

//Middleware and controller demo
Route::get('role', 'TestController@index')->middleware('role:editor');

//Terminable Middleware
Route::get('terminate', 'ABCController@index')->middleware('terminate');

//utilizing two middleware demo
Route::get('/usercontroller/path','UserController@showPath')->middleware('first','second');

//Resource controller
Route::resource('photo','PhotoController');

//retrieving the request uri
Route::get('/foo/bar', 'UriController@index');

//set view
Route::get('/register',function(){
	return view('register');
});
//retrieve input
Route::post('/user/register','UserRegistration@postRegister');

//set and get cookies
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');

//basic response
Route::get('/basic_response',function(){
	return 'Hello Response';
});

//attaching headers and cookies
Route::get('/header',function(){
	return response('Hello',200)
		->header('Content-Type','text/html')
		->cookie('name','Luke');
});

//JSON response 
//case sensative!
Route::get('JSON',function(){
	return response()->json(['name' => 'Luke', 'city' => 'Guangzhou']);
});

//view demo
Route::get('/test',function(){
	//return view('test', ['name' => 'Luke']); //passing data to a view
	return view('test');
});
Route::get('/test2',function(){
	//return view('test', ['name' => 'Luke']); //passing data to a view
	return view('test2');
});

//blade template demo
Route::get('blade',function(){
	return view('page');
});

//database demo
Route::get('database','DbController@index');

//laravelcollective demo
Route::get('form',function(){
	return view('form');
});
Route::post('form/submit','FormController@postFormInfo');