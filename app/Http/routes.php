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

$app->get('/', function () use ($app) {
    $app_version = $app->version();
    $text_body = "version: {$app_version} \n please goto /api/v1/books";
    return $text_body;
});

$app->group(['prefix' => 'api/v1', 'middleware' => 'oauth'], function($app)
{
    $app->get('books','BooksController@index');

    $app->get('books/{id}','BooksController@show');

    $app->post('books','BooksController@create');

    $app->put('books/{id}','BooksController@update');

    $app->delete('books/{id}','BooksController@destroy');
});
