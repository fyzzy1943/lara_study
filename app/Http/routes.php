<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function(){
//     return view('welcome');
    
// });

// Route::get('/', 'ArticleController@index');
Route::get('/', function(){
    return view('index.index');
});

Route::get('user/{name?}', function($name='jj'){
    return 'Hello '.$name;
});
