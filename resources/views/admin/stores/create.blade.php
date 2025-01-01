<h1>Criar loja</h1>
<form action="/admin/stores/store" method="POST">
    <div>
        <label for="name">Nome loja</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="description">Descrição</label>
        <input type="text" name="description">
    </div>
    <div>
        <label for="phone">Telefone</label>
        <input type="text" name="phone">
    </div>
    <div>
        <label for="mobile_phone">Celular</label>
        <input type="text" name="mobile_phone">
    </div>
    <div>
        <label for="slug">Slug</label>
        <input type="text" name="slug">
    </div>
    <div>
        <label for="user">Usuário</label>
        <select name="user">
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit">Criar loja</button>
    </div>
</form>
