<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/passagem-de-parametro/{id}', function ($id) {
    return $id;
});


Route::get('/novo-arquivo', [AlunoController::class, 'index']);
