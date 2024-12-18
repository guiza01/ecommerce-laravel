@extends('layouts.app')

@section('content')
    <a href="{{route('admin.products.create')}}" class="btn mt-5 btn-success">Criar Produto</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>R$ {{ number_format( $product->price, 2, ',', '.' )}}</td>
                <td>
                    <div class="btn-group">
                    <a href="{{route('admin.products.edit', ['product' => $product->id])}}" class="btn btn-sm btn-info">EDITAR</a>
                    <form action="{{route('admin.products.destroy', ['product' => $product->id])}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-sm btn-danger">DELETAR</button>
                    </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$products->links()}}

@endsection