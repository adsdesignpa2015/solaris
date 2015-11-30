<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('cadastro', function () {
    return view('layouts.cadastro');
});

Route::get('cadastrocandidato', function () {
    return view('layouts.cadastrocandidato');
});

Route::get('cadastroempresa', function () {
    return view('layouts.cadastroempresa');
});

Route::get('contato', function () {
    return view('layouts.contato');
});

Route::get('noticias', function () {
    return view('layouts.noticias');
});

Route::get('concursos', function () {
    return view('layouts.concursos');
});

Route::get('vagas', function () {
    return view('layouts.vagas');
});

Route::get('empresas', function () {
    return view('layouts.empresas');
});