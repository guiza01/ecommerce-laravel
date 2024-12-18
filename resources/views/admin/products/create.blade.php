@extends('layouts.app')

@section('content')
    <h1 class="mt-5">Criar Produto</h1>
    <form action="{{route('admin.products.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label>Nome Produto</label>
                <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
            @error('name')
                <div class="invalid-feedback" >
                {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Descrição</label>
                <input type="text" name="description" id="" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}">

            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Conteúdo</label>
            <textarea name="body" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror" value="{{old('body')}}"></textarea>

            @error('body')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Preço</label>
                <input type="text" name="price" id="" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">

            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Slug</label>
                <input type="text" name="slug" id="" class="form-control @error('slug') is-invalid @enderror" value="{{old('slug')}}">

            @error('slug')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <button class="btn btn-success mt-2 btn-lg" type="submit">Cadastrar</button>
        </div>
    </form>

@endsection
