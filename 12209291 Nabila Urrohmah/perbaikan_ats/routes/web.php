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

$router->post('/login', 'AuthController@authenticate');

// STUFF USER
$router->get('/user', 'UserController@index');
$router->post('/user', 'UserController@store');
$router->get('/user/trash', 'UserController@deleted');
$router->delete('/user/permanent', 'UserController@permanentDeleteAll');
$router->delete('/user/permanent/{id}', 'UserController@permanentDelete');
$router->put('/user/restore/{id}', 'UserController@restore');
$router->put('/user/restore', 'UserController@restoreAll');
$router->get('/user/{id}', 'UserController@show');
$router->put('/user/{id}', 'UserController@update');
$router->delete('/user/{id}', 'UserController@destroy');

// Stuf Inbound Stuff
$router->get('/stuff-inbound', 'InboundStuffController@index');
$router->post('/stuff-inbound', 'InboundStuffController@store');
$router->get('/stuff-inbound/trash', 'InboundStuffController@deleted');
$router->delete('/stuff-inbound/permanent', 'InboundStuffController@permanentDeleteAll');
$router->delete('/stuff-inbound/permanent/{id}', 'InboundStuffController@permanentDelete');
$router->put('/stuff-inbound/restore/{id}', 'InboundStuffController@restore');
$router->put('/stuff-inbound/restore', 'InboundStuffController@restoreAll');
$router->get('/stuff-inbound/{id}', 'InboundStuffController@show');
$router->put('/stuff-inbound/{id}', 'InboundStuffController@update');
$router->delete('/stuff-inbound/{id}', 'InboundStuffController@destroy');