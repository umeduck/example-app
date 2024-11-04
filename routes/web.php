<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Sample\IndexController as SampleIndex;
use \App\Http\Controllers\Tweet\IndexController as TweetIndex;
use \App\Http\Controllers\Tweet\CreateController as TweetCreate;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', [SampleIndex::class, 'show']);

Route::get('/sample/{id}', [SampleIndex::class, 'showId']);

Route::get('/tweet', TweetIndex::class)->name('tweet.index');

Route::post('/tweet/create', TweetCreate::class)->name('tweet.create');