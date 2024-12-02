<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StoreController;

Route::get('/admin/stores', [StoreController::class, 'index']);


Route::get('/', function () { return view('welcome'); });

Route::get('/admin/stores', [StoreController::class, 'index']);
Route::get('/admin/stores/create', [StoreController::class, 'create']);
Route::post('/admin/stores/store', [StoreController::class, 'store']);


Route::get('/model', function () {
    // Cria uma loja para um usuario
    /*$user = \App\Models\User::find(1);
    $store = $user->store()->create([
        'name' => 'Loja teste',
        'description' => 'Loja teste de produtos de informática',
        'mobile_phone' => 'xx-xxxxx-xxxx',
        'phone' => 'xx-xxxxx-xxxx',
        'slug' => 'loja-teste' 
    ]);

    dd($store);*/

    // Criar produtos para uma loja
    /*$store = \App\Models\Store::find(1);
    $product = $store->products()->create([
        'name' => 'Notebook Dell',
        'description' => 'Core I5 10GB',
        'body' => 'Qualquer coisa...',
        'price' => 2999.99,
        'slug' => 'notebook-dell'
    ]);

    dd($product);*/

    //Criar uma categoria
    /*\App\Models\Category::create([
        'name' => 'Games',
        'description' => null,
        'slug' => 'games'
    ]);

    \App\Models\Category::create([
        'name' => 'Notebooks',
        'description' => null,
        'slug' => 'notebooks'
    ]);

    return \App\Models\Category::all();*/

    //Adicionar um produto a uma categoria
    /*$product = \App\Models\Product::find(1);

    dd($product->categories()->sync([1]));*/
    
    return \App\Models\User::all();
});
