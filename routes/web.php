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
		Route::get('edit-post/{id}', 'DashboardController@index')->name('edit-post');

		Route::get('create-publication/', 'DashboardController@index')->name('create-publication');
		Route::get('view-publications', 'PublicationController@index')->name('view-publications');
		Route::get('edit-publications/{id}', 'DashboardController@index')->name('edit-publications');

	});


});

Route::group(['prefix' => 'post'], function(){

	Route::post('store', 'PostController@store')->name('submit-post');
	
});

Route::group(['prefix' => 'publications'], function(){

	Route::post('store', 'PublicationController@store')->name('submit-publication');
	
});

Route::get('/home', 'HomeController@index')->name('home');
