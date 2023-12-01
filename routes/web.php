<?php

use Illuminate\Support\Facades\Route;

// Connect with controller
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::post('/sendContacts', [HomeController::class, 'sendContacts']);