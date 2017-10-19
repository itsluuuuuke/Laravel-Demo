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