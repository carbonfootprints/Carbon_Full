<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('default');

Route::get('/default', function () {
    return view('admin.default');
})->name('default');
