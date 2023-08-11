<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('hola', function(){
    return "Has accedido a la ruta /";
});