<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return redirect()->route('blogs.index');
});

// Resourceful routes for blogs
Route::resource('blogs', BlogController::class)->except(['show']);

// If you need the show route with a different implementation
Route::get('blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');