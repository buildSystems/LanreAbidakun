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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/blog', 'PostController@blog')->name('blog');

Route::get('/publications', 'PublicationController@publications')->name('publications');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::post('/user-login', 'Auth\LoginController@tryLogin')->name('user-login');

Auth::routes();

Route::group(['prefix' => 'admin'], function(){

	Route::get('login', function(){
		return redirect('login');
	});

	Route::post('logout', function(){
		return redirect('logout');
	});

	Route::group(['prefix' => 'dashboard'], function(){

		Route::get('/', 'DashboardController@index')->name('dashboard');

		Route::get('create-post/', 'DashboardController@index')->name('create-post');
		Route::get('view-posts', 'PostController@index')->name('view-posts');
		Route::get('edit-post/{id}', 'PostController@edit')->name('edit-post');
		Route::post('update-post/{id}', 'PostController@update')->name('update-post');

		Route::get('create-publication/', 'DashboardController@index')->name('create-publication');
		Route::get('view-publications', 'PublicationController@index')->name('view-publications');
		Route::get('edit-publication/{id}', 'PublicationController@edit')->name('edit-publication');
		Route::post('update-publication/{id}', 'PublicationController@update')->name('update-publication');


		Route::get('create-user/', 'UserController@create')->name('create-user');
		Route::get('view-users', 'UserController@index')->name('view-users');
		Route::get('edit-user/{id}', 'UserController@edit')->name('edit-user');
		Route::post('update-user/{id}', 'UserController@update')->name('update-user');

		Route::get('change-password/', 'UserController@changePassword')->name('change-password');
		Route::post('update-password/', 'UserController@updatePassword')->name('update-password');
	});


});

Route::group(['prefix' => 'post'], function(){

	Route::post('store', 'PostController@store')->name('submit-post');
	Route::get('show-post/{id}', 'PostController@show')->name('show-post');	
	Route::post('delete-post/{id}', 'PostController@destroy')->name('delete-post');	
	
});

Route::group(['prefix' => 'publications'], function(){

	Route::post('store', 'PublicationController@store')->name('submit-publication');
	Route::get('show-publication/{id}', 'PublicationController@show')->name('show-publication');
	Route::get('download-attachment/{id}', 'PublicationController@download')->name('download-attachment');
	Route::post('delete-publication/{id}', 'PublicationController@destroy')->name('delete-publication');	

	
});

Route::group(['prefix' => 'user'], function(){

	Route::post('store', 'UserController@store')->name('submit-user');
	
});

Route::get('/home', 'HomeController@index')->name('home');
