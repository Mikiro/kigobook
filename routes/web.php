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
    
Route::get('/home', 'HomeController@index')->name('home');


// ユーザ機能
Route::group(['middleware' => ['auth']], function () {

    Route::get('posts/spring', 'PostController@Spring')->name('posts.spring');
    Route::get('posts/summer', 'PostController@Summer')->name('posts.summer');
    Route::get('posts/fall', 'PostController@Fall')->name('posts.fall');
    Route::get('posts/winter', 'PostController@Winter')->name('posts.winter');
    Route::get('posts/search', 'PostController@search')->name('posts.search');
    
    Route::resource('posts', PostController::class);

});

