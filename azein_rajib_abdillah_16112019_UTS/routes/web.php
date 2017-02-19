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
    return view('template/home');
   
});

Route::get('/index', function () {
 	return view('template/index');

});

Route::get('/login', function () {
    return view('template/login');

});

Route::get('/register', function () {
    return view('template/register');
});

Route::get('/profile', function () {
    return view('template/profile');
});

Route::get('/edit', function () {
    return view('template/edit');
});

/*Route::get('/', 'ViewController@index');
Route::get('/index', 'ViewController@index');
Route::get('/login', 'ViewController@login');
Route::get('/register', 'ViewController@register');
Route::get('/profile', 'ViewController@profile');
Route::get('/edit', 'ViewController@edit');