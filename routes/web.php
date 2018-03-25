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

Route::get('/coba', function() {
	return view('blog.coba');
});

Route::get('/form', function() {
	return view('backend.blog._form');
});

// Start From THis Route
Auth::routes();


Route::get('/', 'BlogController@blog')->name('blog');


Route::get('blog/{post}', [
	'uses' => 'BlogController@show',
	'as'   => 'detailpost'
]);

Route::get('category/{category}', [
	'uses' => 'BlogController@category',
	'as'   => 'category'
]);

Route::get('author/{author}', [
	'uses' => 'BlogController@author',
	'as'   => 'author'
]);

Route::group(['namespace' => 'Backend', 'prefix' => 'backend'], function() {

	Route::get('home', 'HomeController@index')->name('home');
	Route::put('blog/restore/{blog}', 'BlogController@restore')->name('blog.restore');
	Route::resource('blog', 'BlogController');
	Route::post('categories/save', 'CategoryController@saveCategory')->name('categories.saveCategory');
	Route::resource('categories', 'CategoryController');
});
