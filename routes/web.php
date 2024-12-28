<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Main page';
});

Route::get('/xxx', function() {
    return 'Welcome to XXX Page ';
}) -> name('xxxpage');

Route::get('/hallo', function() {
    return redirect() -> route('xxxpage');
});

Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name . '!';
});

Route::fallback(function () {
    return 'Still got somewhere!';
});
