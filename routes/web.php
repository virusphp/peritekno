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

Route::get('./well-known/achme-chellenge/znRpMpUMA3w9nwtP-A_mlUJkQHj-N5TR7m7R7JEmhE0', function() {
	return view('verified.znRpMpUMA3w9nwtP-A_mlUJkQHj-N5TR7m7R7JEmhE0');
});
Route::get('./well-known/achme-chellenge/0MKOKbGJl2Jjhq3VIUmTW1Dm3nFGeISKJf84vFp8v5E', function() {
	return view('verified.0MKOKbGJl2Jjhq3VIUmTW1Dm3nFGeISKJf84vFp8v5E');
});

Route::group(['namespace' => 'Backend', 'prefix' => 'backend'], function() {

	Route::get('home', 'HomeController@index')->name('home');
	Route::put('blog/restore/{blog}', 'BlogController@restore')->name('blog.restore');
	Route::delete('blog/force-destroy/{blog}', 'BlogController@forceDestroy')->name('blog.force-destroy');
	Route::resource('blog', 'BlogController');
	Route::post('categories/save', 'CategoryController@saveCategory')->name('categories.saveCategory');
	Route::resource('categories', 'CategoryController');
});
