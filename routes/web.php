<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/item', function () {
    return view('item');
})->name('item');

Route::get('/picture', function () {
    return view('picture');
})->name('picture');
