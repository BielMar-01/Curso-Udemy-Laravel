<?php

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

Route::get('/', function () { // Route é uma classe e o get é um metodo 
    return view('welcome'); // Para listar as rotas e so colocar "$ php artisan route:list"
});

Route::get('/ola/{nome}/{sobrenome}', function($nome, $sobrenome){ // Pode se usar echo ou Return
    return "Ola! Seja bem vindo, $nome $sobrenome!"; 
});