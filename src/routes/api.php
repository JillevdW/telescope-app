<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function() {    
    Route::namespace('\Laravel\Telescope\Http\Controllers')->prefix('telescope/ext')->group(function() {
        Route::get('requests', 'RequestController@index');
        Route::get('events', 'EventsController@index');
        Route::get('queries', 'QueriesController@index');
        Route::get('views', 'ViewsController@index');
        Route::get('jobs', 'QueueController@index');
        Route::get('exceptions', 'ExceptionController@index');
    });
});