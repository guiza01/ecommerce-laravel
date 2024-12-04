@extends('layouts.app')

@section('content')
    <h1 class="mt-5">Criar Loja</h1>
    <form action="{{route('admin.stores.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Nome loja</label>
                <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Descrição</label>
                <input type="text" name="description" id="" class="form-control @error('description') is-invalid @enderror">
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Telefone</label>
                <input type="text" name="phone" id="" class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Celular/Whastapp</label>
                <input type="text" name="mobile_phone" id="" class="form-control @error('mobile_phone') is-invalid @enderror">
            @error('mobile_phone')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Slug</label>
                <input type="text" name="slug" id="" class="form-control @error('slug') is-invalid @enderror">
            @error('slug')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label>Usuário</label>
                <select name="user" class="form-control">
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
        </div>

        <div class="form-group">
            <button class="btn btn-success mt-2 btn-lg" type="submit">Cadastrar</button>
        </div>
    </form>

@endsection
