<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/tienda-online', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/venta-de-laptops', function () {
    return view('venta');
})->name('ventas');

Route::get('/contactanos', function () {
    return view('contacto');
})->name('contactos');