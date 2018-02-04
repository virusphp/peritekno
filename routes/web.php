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


Route::get('/', 'BlogController@blog')->name('blog');

Route::get('/coba', function() {
	return view('blog.coba');
});

Route::get('blog/detailpost/{slug}', [
	'uses' => 'BlogController@detailpost',
	'as'   => 'detailpost'
]);

Route::resource('categories', 'CategoryController');

Route::group(['prefix' => 'backend'], function() {

	Route::get('home', 'Backend\HomeController@index')->name('home');
	Route::resource('blog', 'Backend\BlogController');
});
