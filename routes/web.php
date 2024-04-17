<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nuestra-tienda', function () {
    return view('nosotros');
});

Route::get('/venta-de-laptops', function () {
    return view('venta');
});

Route::get('/contactanos', function () {
    return view('contacto');
});