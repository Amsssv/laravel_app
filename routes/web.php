<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome.index');

Route::get('/about', [AboutController::class, 'about'])->name('about.index');
Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');

Route::post('api/posts', [PostController::class, 'store'])->name('post.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::patch('api/posts/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('api/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');

Route::get('/posts/update', [PostController::class, 'update']);
Route::get('/posts/delete', [PostController::class, 'delete']);
Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate']);
Route::get('/posts/update_or_create', [PostController::class, 'updateOrCreate']);
