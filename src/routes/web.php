<?php

use Illuminate\Support\Facades\Route;

Route::prefix('telescope')->middleware('telescope')->group(function() {    
    Route::get('external', function() {
        return view('telescope-app::authcode');
    });
});