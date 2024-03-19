<form action="{{ $action }}" method="POST">
    @csrf

    @if($update ?? '')
    @method('PUT')
    @endisset

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control"
                 id="nome"
                 name="nome"
                 @isset($colaborador->nome) value="{{$colaborador->nome}}" @endisset>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control"
                 id="email"
                 name="email"
                 @isset($colaborador->email) value="{{$colaborador->email}}" @endisset>
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control"
             id="cpf"
             name="cpf"
             @isset($colaborador->cpf) value="{{$colaborador->cpf}}" @endisset>
        </div>
        <div class="form-group">
            <label for="unidade_id">Id da Unidade</label>
            <input type="number" class="form-control"
             id="unidade_id"
             name="unidade_id"
             @isset($colaborador->unidade_id) value="{{$colaborador->unidade_id}}" @endisset>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>

</form>