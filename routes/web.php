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

Route::get('.well-known/acme-challenge/2LOWPlGwjIoPeYnKOV66Z_28Uo2XJ7F0ean9IQQFufE', function() {
	return view('verified.2LOWPlGwjIoPeYnKOV66Z_28Uo2XJ7F0ean9IQQFufE');
})->name('verified.satu');
Route::get('.well-known/acme-challenge/hBtbPAdgn_wLiWTr5fJcf0UnFazSVE8ubT5vsLuqhCM', function() {
	return view('verified.hBtbPAdgn_wLiWTr5fJcf0UnFazSVE8ubT5vsLuqhCM');
})->name('verified.dua');

Route::group(['namespace' => 'Backend', 'prefix' => 'backend'], function() {

	Route::get('home', 'HomeController@index')->name('home');
	Route::put('blog/restore/{blog}', 'BlogController@restore')->name('blog.restore');
	Route::delete('blog/force-destroy/{blog}', 'BlogController@forceDestroy')->name('blog.force-destroy');
	Route::resource('blog', 'BlogController');
	Route::post('categories/save', 'CategoryController@saveCategory')->name('categories.saveCategory');
	Route::resource('categories', 'CategoryController');
});
