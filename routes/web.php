<?php

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
    $creador = "Creador por Daniela";
    return ($creador);
});

$router->group(['middleware' => []], function () use ($router) {
    $router->get('/gender', ['uses'=>'GendersController@insertGender']);
    $router->get('/people', ['uses'=>'PeopleController@insertPersona']);
 });
 