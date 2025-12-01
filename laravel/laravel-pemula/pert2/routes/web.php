<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Halaman awal
Route::get('/', function () {
    return view('posts.startup');
})->name('posts.startup');

// Index / list posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Create & Store
Route::get('/posts/createpost', [PostController::class, 'create'])->name('posts.createpost');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
