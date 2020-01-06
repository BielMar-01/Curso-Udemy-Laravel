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

Route::get('/seunome/{nome?}', function($nome=null){ // Adicionando a ? torna o parametro opcional
    if (isset($nome))
        echo "Ola! Seja bem vindo, $nome!"; 
    else 
        echo "voce não digitou nenhum nome.";
});

Route::get('/rotacomregras/{nome}/{n}', function($nome, $n){
    for($i=0;$i<$n;$i++)
        echo "Ola! Seja bem vindo, $nome!  <br> ";  
})->where('nome', '[A-Za-z]+')// Regras são feitas com where
    ->where('n', '[0-9]+');

    Route::prefix('/app')->group(function() {

        Route::get('/', function(){
            return view('app');
        });

        Route::get('/user', function(){
            return view('user');
        });

        Route::get('/profile', function(){
            return view('profile');
        });
    });
    