<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $stores = \App\Models\Store::all();
        return view('admin.products.create', compact('stores'));
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();

        $store = \App\Models\Store::find($data['store']);
        $store->products()->create($data);

        flash('Produto criado com sucesso!')->success();
        return redirect()->route('admin.products.index');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $product)
    {
        $product = $this->product->findOrFail($product);

        return view('admin.products.edit', compact('product'));
    }

    public function update(ProductRequest $request, string $product)
    {
        $data = $request->all();

        $product = $this->product->find($product);
        $product->update($data);

        flash('Produto atualizado com sucesso!')->success();
        return redirect()->route('admin.products.index');

    }

    public function destroy(string $product)
    {
        $product = $this->product->find($product);
        $product->delete();

        flash('Produto removido com sucesso!')->success();
        return redirect()->route('admin.products.index');
    }
}
