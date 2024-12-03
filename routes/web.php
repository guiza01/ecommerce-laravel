<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StoreController;

Route::get('/admin/stores', [StoreController::class, 'index']);


Route::get('/', function () { return view('welcome'); });

Route::prefix('admin')->as('admin.')->group(function () {

    // Subgrupo para 'stores'
    Route::prefix('stores')->as('stores.')->group(function () {
        Route::get('/', [StoreController::class, 'index'])->name('index');
        Route::get('/create', [StoreController::class, 'create'])->name('create');
        Route::post('/store', [StoreController::class, 'store'])->name('store');
        Route::get('/{store}/edit', [StoreController::class, 'edit'])->name('edit');
        Route::post('/update/{store}', [StoreController::class, 'update'])->name('update');
        Route::get('/destroy/{store}', [StoreController::class, 'destroy'])->name('destroy');
    });

    //SubGrupo para 'Products'
    Route::resource('products', ProductController::class);

    //Route::prefix('products')->as('product.')->group(function () {
    //    Route::get('/', [ProductController::class, 'index'])->name('index');
    //});

});
