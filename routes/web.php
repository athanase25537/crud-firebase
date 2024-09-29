<?php

use App\Http\Controllers\Firebase\ContactController as ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', [ContactController::class, 'index'])
    ->name('contacts');

Route::post('/add-contact', [ContactController::class, 'store'])
    ->name('add-contact');

