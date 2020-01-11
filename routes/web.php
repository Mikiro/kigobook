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

Route::get('/', 'PostController@index');


Auth::routes();
    
Route::get('/home', 'PostController@index')->name('home');


// ユーザ機能
Route::group(['middleware' => ['auth']], function () {

    Route::get('posts/springWords', 'PostController@SpringWords')->name('posts.springWords');
    Route::get('posts/springWordPost/{id}','PostController@SpringWordPost')->name('posts.springWordPost');
    
    Route::get('posts/summerWords', 'PostController@summerWords')->name('posts.summerWords');
    Route::get('posts/summerWordPost/{id}', 'PostController@SummerWordPost')->name('posts.summerWordPost');
    
    Route::get('posts/fallWords', 'PostController@fallWords')->name('posts.fallWords');
    Route::get('posts/fallWordPost/{id}', 'PostController@FallWordPost')->name('posts.fallWordPost');
    
    Route::get('posts/winterWords', 'PostController@WinterWords')->name('posts.winterWords');
    Route::get('posts/winterWordPost/{id}', 'PostController@WinterWordPost')->name('posts.winterWordPost');
    
    Route::get('posts/newYearWords', 'PostController@newYearWords')->name('posts.newYearWords');
    Route::get('posts/newYearWordPost/{id}', 'PostController@newYearWordPost')->name('posts.newYearWordPost');
    
    Route::get('posts/search', 'PostController@search')->name('posts.search');
    Route::get('posts/result', 'PostController@result')->name('posts.result');
    Route::post('posts/result', 'PostController@result')->name('posts.result');
    Route::get('posts/kigobook', 'PostController@kigobook')->name('posts.kigobook');
    
    Route::resource('posts', PostController::class);
    

});

