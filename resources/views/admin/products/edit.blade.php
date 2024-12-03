@extends('layouts.app')

@section('content')
<h1 class="mt-5">Atualizar Produto</h1>
    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label>Nome Produto</label>
                <input type="text" name="name" value="{{$product->name}}" class="form-control">
        </div>

        <div class="form-group">
            <label>Descrição</label>
                <input type="text" name="description" value="{{$product->description}}" class="form-control">
        </div>
        <div class="form-group">
            <label>Conteúdo</label>
            <textarea name="price" cols="30" rows="10"  class="form-control">{{$product->body}}</textarea>
        </div>
        
        <div class="form-group">
            <label>Preço</label>
                <input type="text" name="price" value="{{$product->price}}" class="form-control">
        </div>
        
        <div class="form-group">
            <label>Slug</label>
                <input type="text" name="slug" value="{{$product->slug}}" class="form-control">
        </div>
        
        
        <div class="form-group">
            <button class="btn btn-success mt-2 btn-lg" type="submit">Atualizar</button>
        </div>
    </form>

@endsection