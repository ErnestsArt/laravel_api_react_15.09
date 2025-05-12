<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product', [ProductsController::class, 'index']);
Route::get('/product/create', [ProductsController::class, 'create']);
Route::post('/product', [ProductsController::class, 'store']);