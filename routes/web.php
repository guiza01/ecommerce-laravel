<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StoreController;

Route::get('/admin/stores', [StoreController::class, 'index']);

Route::get('/', function () { return view('welcome'); });

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->as('admin.')->group(function () {

        // Subgrupo para 'stores'
        Route::resource('stores', StoreController::class);

        //SubGrupo para 'Products'
        Route::resource('products', ProductController::class);

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
