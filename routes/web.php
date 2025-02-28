<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () { return to_route('login'); });

Auth::routes(['register'=>false]);
Route::get('/home', [HomeController::class, 'index'])->name('home');
