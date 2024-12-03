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
            @endforeach
        </tbody>
    </table>

    {{$stores->links()}}

@endsection