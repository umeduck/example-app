<?php

use App\Http\Controllers\ProfileController;
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

// Sample
Route::get('/sample', [SampleIndex::class, 'show']);

Route::get('/sample/{id}', [SampleIndex::class, 'showId']);

// Tweet
Route::get('/tweet', TweetIndex::class)->name('tweet.index');

Route::middleware('auth')->group(function () {
    Route::post('/tweet/create', TweetCreate::class)->name('tweet.create');

    Route::get('tweet/update/{tweetId}', TweetUpdateIndex::class)->name('tweet.update.index')->where('tweetId', '[0-9]+');
    
    Route::put('tweet/update/{tweetId}', TweetUpdatePut::class)->name('tweet.update.put')->where('tweetId', '[0-9]+');
    
    Route::delete('tweet/delete/{tweetId}', TweetDelete::class)->name('tweet.delete')->where('tweetId', '[0-9]+');
});

// Laravel Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
