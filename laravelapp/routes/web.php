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

Route::get('/hello', function () {
    //return view('Hello You!!!');
    return 'Hello You!!!';
});

// to submit a for to route
//Route::post('/hello', function () {
    //return view('Hello You!!!');
  //  return 'Hello You!!!';
//});

Route::get('/about', function() {
    return view('pages.about');
});

// Get request for a user : laravelapp.me/user/Anyname
// will return Hello Anyname
Route::get('/user/{id}', function($id) {
    return 'Hello '.$id;
});

