<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StoreController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/admin/stores', [StoreController::class, 'index']);

Route::get('/', function () { return view('welcome'); })->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->as('admin.')->group(function () {

        // Subgrupo para 'stores'
        Route::resource('stores', StoreController::class);

        //SubGrupo para 'Products'
        Route::resource('products', ProductController::class);

        //SubGrupo para 'Categories'
        Route::resource('categories', CategoryController::class);

    });
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
