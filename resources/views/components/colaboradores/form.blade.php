<form action="{{ $action }}" method="POST" >
    @csrf

    @if($update ?? '')
    @method('PUT')
    @endisset
        <span class="py-2">
            <div class="form-group py-2">
                <label for="nome">Nome</label>
                <input type="text" class="form-control"
                    id="nome"
                    name="nome"
                    @isset($colaborador->nome) value="{{$colaborador->nome}}" @endisset>
            </div>
            <div class="form-group py-2">
                <label for="email">Email</label>
                <input type="email" class="form-control"
                    id="email"
                    name="email"
                    @isset($colaborador->email) value="{{$colaborador->email}}" @endisset>
            </div>
            <div class="form-group py-2">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control"
                id="cpf"
                name="cpf"
                @isset($colaborador->cpf) value="{{$colaborador->cpf}}" @endisset>
            </div>
            <div class="form-group py-2">
                <label for="unidade_id">Unidade</label>
                <select class="form-control" id="unidade_id" name="unidade_id">
                    <option value="">Selecione uma unidade</option>
                    @foreach($unidades as $unidade)
                        <option value="{{ $unidade->id }}">{{ $unidade->nome_fantasia }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group py-2">
                <label for="cargo_id">Cargo</label>
                <select class="form-control" id="cargo_id" name="cargo_id">
                    <option value="">Selecione um cargo</option>
                    @foreach($cargos as $cargo)
                        <option value="{{ $cargo->id }}">{{ $cargo->cargo }}</option>
                    @endforeach
                </select>
            </div>
            
            

            <button type="submit" class="btn btn-primary ">Salvar</button>
        </span>
</form>