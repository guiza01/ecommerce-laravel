@extends('layouts.app')

@section('content')
    @if(!$store)
        <a href="{{route('admin.stores.create')}}" class="btn mt-5 btn-success">Criar loja</a>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#id</th>
                <th>Loja</th>
                <th>Total de Produtos</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $store->id }}</td>
                <td>{{ $store->name }}</td>
                <td>{{ $store->products->count() }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('admin.stores.edit', ['store' => $store->id])}}" class="btn btn-sm btn-info">EDITAR</a>
                        <form action="{{route('admin.stores.destroy', ['store' => $store->id])}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-sm btn-danger">DELETAR</button>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

@endsection
