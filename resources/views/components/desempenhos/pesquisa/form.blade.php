<form action="{{ $action}}" method="GET" class="mb-3 ">

    @csrf
    <div class="input-group">
        <input type="text"
               class="form-control"
               id="query"
               name="query"
               placeholder="Pesquisar colaboradores pelo nome...">

        <div d-flex flex-columns>
            <a href="{{ route('dashboard') }}" class="btn btn-primary" > Todos Colaboradores</a>
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </div>
    </div>
</form>
