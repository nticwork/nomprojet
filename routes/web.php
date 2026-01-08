<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/env', function () {     
dd(env('APP_KEY')); 
});

Route::get('/hello', function () {     
return response('<h1>Hello From Vercel </H1>')
});