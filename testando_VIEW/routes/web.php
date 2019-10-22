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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    phpinfo();
});

Route::get('/hello-world/{n}/{idade?}', function (Request $r, $nome, $idade="-") {
    echo($r->id);
    dd($r);
    return "Hello world, $nome!\nVc tem $idade anos.";
});

Route::middleware('verifica-hora')->get('/boa-tarde/{nome?}', function($nome="") {
    echo($nome);
    $nome = "<script>alert('CODIGO HACKEADO');</script>";
    return view('boatarde', ['nome' => $nome]);
})->where('nome', '[A-Za-z]+');

// Route::view('/boa-tarde/{nome}', 'boatarde', ['nome' => 'Nome']);