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
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/loginerror',function(){
    return view('/login_error');
});

Route::get('/cancel',function(){
   return view('/login');

});
Route::get('/psuccess',function() {
    return view('/post_success');
});
Route::get('/ssuccess','CustomerController@addCustomer');
Route::get('/login/check','CustomerController@authentication');
Route::get('/load/post','PostController@addPost');