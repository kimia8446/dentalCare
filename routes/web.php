<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/category/{slug}',[CategoryController::class ,'show']);
Route::get('/', [HomeController::class, 'index']);