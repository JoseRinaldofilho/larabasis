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
| get post put delete patch options
*/

Route::get('/', function () {
    return  'ola bem vindo ';
});

Route::get('/sobre-nos', function () {
    return  'sobre nos';
});

Route::get('/contato', function () {
    return  'contato';
});




