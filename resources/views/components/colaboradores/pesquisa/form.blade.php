<form action="{{ $action}}" method="GET" class="mb-3 ">

    @csrf
    <div class="input-group">
        <div d-flex flex-columns>
            <a href="{{ route('colaboradores.create') }}" class="btn btn-success"><i class="bi bi-person-plus-fill"></i></a>
            <a href="{{ route('dashboard') }}" class="btn btn-dark" > Todos Colaboradores</a>
            <button type="submit" class="btn btn-dark">Pesquisar</button>
        </div>
        <input type="text"
               class="form-control"
               id="query"
               name="query"
               placeholder="Pesquisar colaboradores pelo nome...">


    </div>
</form>
