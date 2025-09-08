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
Route::get('/segundaexp', function () {
    return view('experiencia.segundaexp');
})->name('segundaexp');
Route::get('/terceraexp', function () {
    return view('experiencia.terceraexp');
})->name('terceraexp');
Route::get('/habilidaduno', function () {
    return view('habilidades.habilidaduno');
})->name('habilidaduno');
Route::get('/habilidaddos', function () {
    return view('habilidades.habilidaddos');
})->name('habilidaddos');
Route::get('/habilidadtres', function () {
    return view('habilidades.habilidadtres');
})->name('habilidadtres');
Route::get('/colegio', function () {
    return view('academia.colegio');
})->name('colegio');
Route::get('/universidad', function () {
    return view('academia.universidad');
})->name('universidad');
