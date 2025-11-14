<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;

Route::get('/', [Postcontroller::class, 'welcome']);