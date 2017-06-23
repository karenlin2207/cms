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

Auth::routes();

Route::group(['prefix' => 'addmin'], function(){
	Route::get('/', 'HomeController@index')->name('home');
	Route::group(['prefix' => 'contents'], function(){
		Route::get('/create', 'Admin\ContentController@create')->name('content.create');
		Route::get('/edit/{file_name}', 'Admin\ContentController@edit')->name('content.edit');
		Route::post('/', 'Admin\ContentController@store')->name('content.store');
		Route::put('/{content}', 'Admin\ContentController@update')->name('content.update');				
	});
});

Route::get('/{file_name}', 'Admin\ContentController@show')->name('content.show');



