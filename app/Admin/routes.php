<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\HomeController;
// use App\Admin\Controllers\EditorController;


Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('/users', UserController::class);
    $router->resource('/edit', EditorController::class);
});



