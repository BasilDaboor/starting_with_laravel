<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TestController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store');
Route::get('posts/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');

Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');

Route::put('/posts/{post}', [PostsController::class, 'update'])->name('posts.update');
