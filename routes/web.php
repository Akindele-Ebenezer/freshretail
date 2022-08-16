<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
 
Route::get('/', [HomeController::class, 'index'])->name('Home'); 

Route::get('/About', [HomeController::class, 'about'])->name('About');

Route::get('/Shop', [HomeController::class, 'shop'])->name('Shop'); 

Route::get('/Contact', [HomeController::class, 'contact'])->name('Contact'); 

Route::get('/Solutions', [HomeController::class, 'solutions'])->name('Solutions'); 

Route::get('/Login', [HomeController::class, 'login'])->name('Login'); 

Route::get('/CreateAccount', [HomeController::class, 'create_account'])->name('CreateAccount'); 

Route::get('/ShoppingCart', [HomeController::class, 'shopping_cart'])->name('ShoppingCart'); 

Route::get('/Purchase', [HomeController::class, 'Purchase'])->name('Purchase'); 