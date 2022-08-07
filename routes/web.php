<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
 
Route::get('/', [HomeController::class, 'index'])->name('Home'); 

Route::get('/About', [HomeController::class, 'about'])->name('About');

Route::get('/Shop', [HomeController::class, 'shop'])->name('Shop'); 

Route::get('/Contact', [HomeController::class, 'contact'])->name('Contact'); 

Route::get('/Solutions', [HomeController::class, 'solutions'])->name('Solutions'); 