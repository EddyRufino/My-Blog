<?php

use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

// Posts
Route::get('blog', [PostController::class, 'index'])->name('blog');
Route::get('blog/{post:slug}', [PostController::class, 'show'])->name('post.show');

// Admin Posts
Route::get('posts/create', [AdminPostController::class, 'create'])->name('post.create');
Route::post('posts', [AdminPostController::class, 'store'])->name('post.store');

require __DIR__.'/auth.php';
