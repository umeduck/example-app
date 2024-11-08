<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Sample\IndexController as SampleIndex;
use \App\Http\Controllers\Tweet\IndexController as TweetIndex;
use \App\Http\Controllers\Tweet\CreateController as TweetCreate;
use \App\Http\Controllers\Tweet\Update\IndexController as TweetUpdateIndex;
use \App\Http\Controllers\Tweet\Update\PutController as TweetUpdatePut;
use \App\Http\Controllers\Tweet\DeleteController as TweetDelete;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', [SampleIndex::class, 'show']);

Route::get('/sample/{id}', [SampleIndex::class, 'showId']);

Route::get('/tweet', TweetIndex::class)->name('tweet.index');

Route::post('/tweet/create', TweetCreate::class)->name('tweet.create');

Route::get('tweet/update/{tweetId}', TweetUpdateIndex::class)->name('tweet.update.index')->where('tweetId', '[0-9]+');

Route::put('tweet/update/{tweetId}', TweetUpdatePut::class)->name('tweet.update.put')->where('tweetId', '[0-9]+');

Route::delete('tweet/delete/{tweetId}', TweetDelete::class)->name('tweet.delete')->where('tweetId', '[0-9]+');