<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

// Home route
Route::view('/', 'home');

// Job routes
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
});

// Contact route
Route::view('/contact', 'contact');
