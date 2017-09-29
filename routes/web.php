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
Route::get('/ui', function () {
	return view('pages.home');
});
Route::get('/result', function () {
	return view('pages.result');
});
Route::get('/test-extend', function () {
	return view('pages.result');
});
Route::get('/login2', function () {
	return view('pages.login');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
