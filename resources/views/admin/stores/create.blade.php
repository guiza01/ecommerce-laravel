<h1>Criar Loja</h1>
<form action="/admin/stores/store" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label>Nome loja</label>
            <input type="text" name="name" id="">
    </div>
    <div>
        <label>Descrição</label>
            <input type="text" name="description" id="">
    </div>
    <div>
        <label>Telefone</label>
            <input type="text" name="phone" id="">
    </div>
    <div>
        <label>Celular/Whastapp</label>
            <input type="text" name="mobile_phone" id="">
    </div>
    <div>
        <label>Slug</label>
            <input type="text" name="slug" id="">
    </div>
    <div>
        <label>Usuário</label>
            <select name="user">
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
    </div>
    <div>
        <button type="submit">Cadastrar</button>
    </div>
</form>
