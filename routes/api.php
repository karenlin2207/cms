<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/send_mail', 'MailController@send')->name('send_mail');

Route::group(['prefix' => 'contents'], function(){
	Route::get('/', 'Admin\ContentController@index');
	Route::delete('/{content}', 'Admin\ContentController@delete');
});
