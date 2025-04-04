<?php

use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return redirect()->route('blogs.index'); 
});

Route::resource('blogs', BlogController::class); 

