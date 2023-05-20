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
$router->get('/courses1','User1Controller@index');
$router->post('/courses1', 'User1Controller@add');
$router->get('/courses1/{course_id}', 'User1Controller@show'); // get user by id
$router->put('/courses1/{course_id}','User1Controller@update'); // update user record
$router->delete('/courses1/{course_id}', 'User1Controller@delete'); //delete record

$router->get('/courses2','User2Controller@index');
$router->post('/courses2', 'User2Controller@add');
$router->get('/courses2/{course_id}', 'User2Controller@show'); // get user by id
$router->put('/courses2/{course_id}','User2Controller@update'); // update user record
$router->delete('/courses2/{course_id}', 'User2Controller@delete'); //delete record