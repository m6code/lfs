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

// To load a page from the resources/views/pages/ folder
Route::get('/about', function() {
    return view('pages.about');
});

// Get request for a user : laravelapp.me/user/Anyname/Anyid
// will return Hello Anyname your id is Anyid
Route::get('/user/{name}/{id}', function($name, $id) {
    return 'Hello '.$name.' your id is '.$id;
});