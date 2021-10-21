<?php

use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

// Mailchimp
Route::post('newsletter', NewsletterController::class);

// Posts
Route::get('blog', [PostController::class, 'index'])->name('blog');
Route::get('blog/{post:slug}', [PostController::class, 'show'])->name('post.show');

Route::middleware('can:admin')->group( function () {
    // Admin Posts
    Route::resource('admin/posts', AdminPostController::class)->except(['show', 'edit', 'update']);
});


require __DIR__.'/auth.php';
