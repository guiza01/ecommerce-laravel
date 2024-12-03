@extends('layouts.app')

@section('content')
    <a href="{{route('admin.stores.create')}}" class="btn mt-5 btn-success">Criar loja</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#id</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
            <tr>
                <td>{{ $store->id }}</td>
                <td>{{ $store->name }}</td>
                <td>
                    <a href="{{route('admin.stores.edit', ['store' => $store->id])}}" class="btn btn-sm btn-info">EDITAR</a>
                    <a href="{{route('admin.stores.destroy', ['store' => $store->id])}}" class="btn btn-sm btn-danger">EXCLUIR</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$stores->links()}}

@endsection