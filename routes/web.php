<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/product', 'ProductController@index');
$router->get('/product/{id}', 'ProductController@show');
$router->post('/product', 'ProductController@create');
$router->put('/product/{id}', 'ProductController@update');
$router->delete('/product/{id}', 'ProductController@delete');
