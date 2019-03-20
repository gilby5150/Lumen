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
    return $router->app->version();
});

/**
 * Routes for resource siswa-controller
 */

/**
 * Routes for resource siswa
 */
$router->post('siswa', 'SiswasController@add');
$router->get('/siswa', 'SiswasController@read');
$router->post('/siswa/{id}', 'SiswasController@update');
$router->delete('/siswa/{id}', 'SiswasController@delete');


/**
 * Routes for resource kelas
 */
$router->post('kelas', 'KelasController@add');
$router->get('/kelas', 'KelasController@read');
$router->post('/kelas/{id}', 'KelasController@update');
$router->delete('/kelas/{id}', 'KelasController@delete');
