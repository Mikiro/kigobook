<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('users', UserController::class); //追記やで
    $router->resource('posts', PostController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('words', WordController::class);

    
});

