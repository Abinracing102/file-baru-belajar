<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\AboutController;


Route::get('/', [Postcontroller::class, 'welcome']);
Route::get('/about', [AboutController::class, 'about']);