<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/passagem-de-parametro/{id}', function ($id) {
    return $id;
});


Route::get('/teste', [TesteController::class, 'index']);