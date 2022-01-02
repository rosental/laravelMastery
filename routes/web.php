<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/hello-world', function () {
//    return view('hello-world');
//});
//
////Parametro dinamico
//Route::get('/hello/{name}', function ($name) {
//    return 'Hello, ' . $name;
//});
//
////Parametro nao e obrigatorio, passa o ponto de interrogacao no parametro
//// e no callback da funcao estabelece um valor defult
//Route::get('/hello/{name?}', function ($name = null) {
//    return 'Hello, ' . $name;
//});

//Rota pelo controller passando o nome do metodo
Route::get('/hello-world', [App\Http\Controllers\HelloWordController::class, 'helloWorld']);

Route::get('/hello/{name?}', [App\Http\Controllers\HelloWordController::class, 'hello']);

//Obedece os verbos HTTP
//Route::get ou Route::post ou Route::put ou Route::patch ou Route::delete
