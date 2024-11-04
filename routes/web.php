<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Sample\IndexController as Sample;
use \App\Http\Controllers\Tweet\IndexController as Tweet;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', [Sample::class, 'show']);

Route::get('/sample/{id}', [Sample::class, 'showId']);

Route::get('/tweet', Tweet::class);