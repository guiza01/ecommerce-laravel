@extends('layouts.app')

@section('content')
<h1 class="mt-5">Editando Loja</h1>
<form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label>Nome loja</label>
            <input type="text" name="name" class="form-control" value="{{$store->name}}">
    </div>

    <div class="form-group">
        <label>Descrição</label>
            <input type="text" name="description" id="" class="form-control" value="{{$store->description}}">
    </div>
    
    <div class="form-group">
        <label>Telefone</label>
            <input type="text" name="phone" id="" class="form-control" value="{{$store->phone}}">
    </div>
    
    <div class="form-group">
        <label>Celular/Whastapp</label>
            <input type="text" name="mobile_phone" id="" class="form-control" value="{{$store->mobile_phone}}">
    </div>
    
    <div class="form-group">
        <label>Slug</label>
            <input type="text" name="slug" id="" class="form-control" value="{{$store->slug}}">
    </div>
    
    <div class="form-group">
        <button class="btn btn-success mt-2 btn-lg" type="submit">Atualizar loja</button>
    </div>
</form>

@endsection