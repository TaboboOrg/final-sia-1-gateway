<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

Route::group([

    'prefix' => 'api'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('user-profile', 'AuthController@me');

});

$router->get('/books','User1Controller@index');
$router->post('/books', 'User1Controller@add');
$router->get('/books/{bookid}', 'User1Controller@show'); // get user by id
$router->put('/books/{bookid}','User1Controller@update'); // update user record
$router->delete('/books/{bookid}', 'User1Controller@delete'); //delete record

$router->get('/author','User2Controller@index');
$router->post('/author', 'User2Controller@add');
$router->get('/author/{authorid}', 'User2Controller@show'); // get user by id
$router->put('/author/{authorid}','User2Controller@update'); // update user record
$router->delete('/author/{authorid}', 'User2Controller@delete'); //delete record
