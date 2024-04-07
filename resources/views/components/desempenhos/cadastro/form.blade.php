<form action="{{ $action }}" method="POST" class="m-1">


    
        @csrf
    
        @if($update )
        @method('PUT')
        @endif
    
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" 
            id="nome" 
            name="nome" 
            value="{{ $colaborador->nome }}">
        </div>
    
        @if ($create)
        <div class="form-group">
            <label for="unidade_id">Unidade</label>
            <select class="form-control" id="unidade_id" name="unidade_id">
                <option value="">Selecione uma unidade</option>
                <option value="{{ $colaborador->unidade_id }}">{{ $colaborador->nome_fantasia }}</option>
            </select>
        </div>
        @endif
    
        <div class="form-group">
            <label for="cargo_id">Cargo</label>
            @if($update)
            <input class="form-control" id="cargo_id" name="cargo_id"
            value="{{ $cargo->id }}">
            @endif

            @if($create)
            <select class="form-control" id="cargo_id" name="cargo_id">
                <option value="">Selecione um cargo</option>                        
                @foreach ($cargos as $cargo)
                    
                    <option value="{{ $cargo->id }}" > {{ $cargo->cargo }}</option>
    
                @endforeach
            @endif
            </select>
        </div>
    
        {{-- @if ($create)
        <div class="form-group">
            <label for="desempenho_id">Desempenho</label>
            <select class="form-control" id="desempenho_id" name="desempenho_id">
                <option value="">Selecione um desempenho</option>
                @foreach($desempenhos as $desempenho)
                    <option value="{{ $desempenho->id }}" @if(isset($colaborador->desempenho_id) && $colaborador->desempenho_id == $desempenho->id) selected @endif>{{ $desempenho->nome }}</option>
                @endforeach
            </select>
        </div>
        @endif --}}
    
        

        <div class="form-group">
            <label for="nota_desempenho">Nota de Desempenho (0-10)</label>
            <input type="number" class="form-control" 
            id="nota_desempenho" 
            name="nota_desempenho" min="0" max="10" 
            @if($update) value="{{ $colaborador->nota_desempenho ?? '' }}" @endif  >
        </div>
        
    
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    