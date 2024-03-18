<form action="{{ $action }}" method="POST">
    @csrf

    @if($update ?? '')
    @method('PUT')
    @endisset


    <div class="form-group py-2">
        <label for="nome_fantasia">Nome Fantasia:</label>
        <input type="text" class="form-control"
                id="nome_fantasia"
                name="nome_fantasia"
                @isset($unidade->nome_fantasia) value="{{$unidade->nome_fantasia}}" @endisset>
    </div>
    <div class="form-group py-2">
        <label for="razao_social">Razão Social:</label>
        <input type="text" class="form-control"
                id="razao_social"
                name="razao_social"
                @isset($unidade->razao_social) value="{{$unidade->razao_social}}" @endisset>
    </div>
    <div class="form-group py-2">
        <label for="cnpj">CNPJ:</label>
        <input type="text" class="form-control"
                id="cnpj"
                name="cnpj"
                @isset($unidade->cnpj) value="{{$unidade->cnpj}}" @endisset>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    {{-- <a href="{{ route('unidades.destroy') }}" type="submit" >Deletar</a> --}}


</form>