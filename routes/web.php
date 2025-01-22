<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'login'])->name('login');

Route::get('/signup', [PageController::class, 'signup'])->name('signup');
