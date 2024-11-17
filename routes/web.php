<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'about']);
Route::get('/posts', [PostController::class, 'index']);
