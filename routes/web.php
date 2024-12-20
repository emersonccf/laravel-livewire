<?php

use App\Livewire\{
    ShowTweets
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('tweets', ShowTweets::class)->name('tweets.index')->middleware('auth');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
