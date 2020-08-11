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
    return redirect('/home');
});

Route::group(['middleware'=>'guest'], function(){
    Route::get('/login','AuthController@loginPage');
    Route::get('/register','AuthController@registerPage');
});

Route::get('/logout','AuthController@logout');
Route::post('/login','AuthController@login');
Route::post('/register','AuthController@register');
Route::get('/products','ProductController@productPage')->middleware('my.auth');
Route::get('/home','ProductController@homePage');
Route::get('/users','AdminController@usersPage')->middleware('role:admin');
Route::post('/delete','AdminController@deleteUser');