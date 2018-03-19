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

Route::group(['prefix' => 'backend'], function() {

	Route::get('home', 'Backend\HomeController@index')->name('home');
	Route::resource('blog', 'Backend\BlogController');
	Route::post('categories/save', 'Backend\CategoryController@saveCategory')->name('categories.saveCategory');
	Route::resource('categories', 'Backend\CategoryController');
});
