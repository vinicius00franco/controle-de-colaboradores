<form action="{{ $action }}" method="POST" class="m-1">

{{-- 
    {{ dd($colaborador->cargos);  }}
    {{ exit();  }} --}}


    @csrf

    @if($update )
    @method('PUT')
    @endif

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control"
         id="nome"
          name="nome"
          @if($update)value="{{ $colaborador->nome }}" @endif >
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" 
        id="email" 
        name="email" 
        @if($update) value="{{ $colaborador->email ?? '' }}" @endif>
    </div>

    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" 
        id="cpf" 
        name="cpf" 
        @if($update)  value="{{ $colaborador->cpf ?? '' }}" @endif>
    </div>


    @if ($update)
    <div class="form-group">
        <label for="desempenho_id">Desempenho</label>
        <select class="form-control" id="desempenho_id" name="desempenho_id">
            <option value="">Selecione um desempenho</option>
            @foreach($desempenhos as $desempenho)
                <option value="{{ $desempenho->id }}" @if(isset($colaborador->desempenho_id) && $colaborador->desempenho_id == $desempenho->id) selected @endif>{{ $desempenho->nome }}</option>
            @endforeach
        </select>
    </div>
    @endif

    @if($create)


    <div class="form-group">
        <label for="unidade_id">Unidade</label>
        <select class="form-control" id="unidade_id" name="unidade_id">
            <option value="">Selecione uma unidade</option>
            {{-- @if($update) --}}
                @foreach ($unidades as $unidade)   
                <option value="{{ $unidade->id }}">{{ $unidade->nome_fantasia }}</option>

                @endforeach
            {{-- @endif --}}

        </select>
    </div>

    <div class="form-group">
        <label for="cargo_id">Cargo</label>
        <select class="form-control" id="cargo_id" name="cargo_id">
            <option value="">Selecione um cargo</option>
            @foreach ($cargos as $cargo)
                
                <option value="{{ $cargo->cargo }}" > {{ $cargo->cargo }}</option>

            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="nota_desempenho">Nota de Desempenho (0-10)</label>
        <input type="number" class="form-control" 
        id="nota_desempenho" 
        name="nota_desempenho" min="0" max="10" 
        @if($update) value="{{ $colaborador->nota_desempenho ?? '' }}" @endif>
    </div>
    @endif

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
