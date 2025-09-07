<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('nombre');
})->name('nombre');
Route::get('/procedencia', function () {
    return view('procedencia');
})->name('procedencia');
Route::get('/niñez', function () {
    return view('niñez');
})->name('niñez');
