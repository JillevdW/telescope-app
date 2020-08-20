<?php

use Illuminate\Support\Facades\Route;
use JillevdW\TelescopeApp\Middleware\Authorize;

Route::prefix('api')->group(function() {    
    Route::namespace('\Laravel\Telescope\Http\Controllers')->prefix('telescope/ext')->middleware(Authorize::class)->group(function() {
        Route::get('requests', 'RequestController@index');
        Route::get('events', 'EventsController@index');
        Route::get('queries', 'QueriesController@index');
        Route::get('views', 'ViewsController@index');
        Route::get('jobs', 'QueueController@index');
        Route::get('exceptions', 'ExceptionController@index');
    });
});