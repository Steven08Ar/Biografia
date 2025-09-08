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
Route::get('/adolescencia', function () {
    return view('adolescencia');
})->name('adolescencia');
Route::get('/actualidad', function () {
    return view('actualidad');
})->name('actualidad');
Route::get('/futuro', function () {
    return view('futuro');
})->name('futuro');
Route::get('/menu', function () {
    return view('menu');
})->name('menu');
Route::get('/primeraexp', function () {
    return view('experiencia.primeraexp');
})->name('primeraexp');
