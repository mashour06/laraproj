<?php


use App\Http\Controllers\Products\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('product/{id}', [ProductController::class, 'showProduct']); 