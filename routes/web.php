<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bem-vindo', function () {
    return view('bem-vindo');
});

Route::get('/hello-world', function () {
    return view('helloWorld');
});

Route::get('/apresentacao/{$id}', function ($id) {
    return $id;
});

