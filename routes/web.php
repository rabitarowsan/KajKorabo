<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Models\Service;

Route::get('/', function () {
    return view('okayy');
});

Route::get('/services', [
    ServiceController::class, 'services'])->name('services');


Route::get('/products', [
    ServiceController::class, 'products'])->name('products');




// Route::get('/products/{category}', [
//     ServiceController::class, 'category'
//     ])->name('products.category');