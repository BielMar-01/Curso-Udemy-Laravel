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

Route::prefix('/aplicacao')->group(function() {// nomes ajudam na horas da organizaçaõ

    Route::get('/', function(){
        return view('app');
    })->name('app');

    Route::get('/user', function(){
        return view('user');
    })->name('app.user');

    Route::get('/profile', function(){
        return view('profile');
    })->name('app.profile');
});

Route::get('/produtos', function() {// não precisar ser necessariamente dentro de agrupamentos
    echo "<h1> Produtos </h1>";
    echo "<ol>";
    echo "<li> Notebook </li>";
    echo "<li> Impressora </li>";
    echo "<li> Mouse </li>";
    echo "</ol>";
})->name('meusprodutos');


//Redirecionamento serve para levar voce para outra rota
Route::redirect('todosprodutos1', 'produtos', 301);


//Outro jeito de fazer redirecionamento
Route::get('todosprodutos2', function(){
    return redirect()->route('meusprodutos');
});

///////////////////////////////////

Route::post('/requisicoes', function(Request $request) {// Post é algo novo como criar usuarios ou produtos
    return 'Hello POST';   
}); // CSRF - È tratado da forma de um token para ser mais seguro todas as requisições tirando o get precisam do CSRF

Route::delete('/requisicoes', function(Request $request) {
    return 'Hello DELETE';   
});

Route::put('/requisicoes', function(Request $request) {
    return 'Hello PUT';   
});

Route::patch('/requisicoes', function(Request $request) {
    return 'Hello PATCH';   
});

Route::options('/requisicoes', function(Request $request) {
    return 'Hello OPTIONS';   
});

*/

use Illuminate\Http\Request;

Route::get('/', function () { // Route é uma classe e o get é um metodo 
    return view('welcome'); // Para listar as rotas e so colocar "$ php artisan route:list"
});

Route::get('produtos', 'MeuControlador@produtos');
Route::get('nome', 'MeuControlador@getNome');
Route::get('idade', 'MeuControlador@getIdade');
Route::get('multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');