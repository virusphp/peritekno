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
Auth::routes();

Route::get('/', function() {
	return view('blog.index');
});

Route::get('/blog/detailPost', function () {
    return view('blog.detailPost');
});

Route::get('/blog/DataPost', function () {
    return view('blog.table');
});

Route::resource('categories', 'CategoryController');

Route::get('/home', 'HomeController@index')->name('home');
