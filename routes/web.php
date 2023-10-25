<?php

use App\Http\Controllers\ProductImportController;
use Illuminate\Support\Facades\Route;

Route::get('products-import', [ProductImportController::class, 'index'])->name('products.import.index');

Route::post('products-import', [ProductImportController::class, 'store'])->name('products.import.store');


