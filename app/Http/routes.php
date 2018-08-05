<?php
use App\User;
use App\Address;
use App\Role;
use App\Post;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', 'PostController');

Route::get('/create' , function(){

    DB::insert("INSERT INTO posts (title,content) values(?,?)",['Awesome Title','Even more awesome content']);


});


