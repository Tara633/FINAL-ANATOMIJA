<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/novi-anatomija-projekt', function () {
    return view('novi-anatomija-projekt');
})->name('novi.anatomija.projekt');


Route::get('/kontakt', function () {
    return view('kontakt');
})->name('kontakt');


Route::get('/o-nama', function () {
    return view('o-nama');
})->name('o-nama');


Route::get('/novosti', function () {
    return view('novosti');
})->name('novosti');


Route::get('/misici-dlana', function () {
    return view('misici-dlana');
})->name('misici-dlana');


Route::get('/misici-glave', function () {
    return view('misici-glave');
})->name('misici-glave');


Route::get('/misici-leda', function () {
    return view('misici-leda');
})->name('misici-leda');


Route::get('/misici-nadlaktice-podlaktice', function () {
    return view('misici-nadlaktice-podlaktice');
})->name('misici-nadlaktice-podlaktice');


Route::get('/misici-stopala', function () {
    return view('misici-stopala');
})->name('misici-stopala');


Route::get('/misici-vrata-i-trupa', function () {
    return view('misici-vrata-i-trupa');
})->name('misici-vrata-i-trupas');


Route::get('/rendgenska-anatomija', function () {
    return view('rendgenska-anatomija');
})->name('rendgenska-anatomija');



Route::get('/sustavna-anatomija', function () {
    return view('sustavna-anatomija');
})->name('sustavna-anatomija');


Route::get('/topografska-anatomija', function () {
    return view('topografska-anatomija');
})->name('topografska-anatomija');