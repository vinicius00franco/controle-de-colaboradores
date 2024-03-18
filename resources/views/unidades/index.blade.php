<x-layout title="Unidades da Empresa">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome Fantasia</th>
                    <th>Razão Social</th>
                    <th>CNPJ</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($unidades as $unidade)
                    <tr>
                        <td>{{ $unidade->nome_fantasia }}</td>
                        <td>{{ $unidade->razao_social }}</td>
                        <td>{{ $unidade->cnpj }}</td>
                        <td>
                            <div class="d-flex">
                                
                                <a href="{{ route('unidades.edit',$unidade->id) }}" class="btn btn-primary">Atualizar</a>

                                <form action="{{ route('unidades.destroy' ,$unidade->id) }}" method="POST" class="px-4">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>

                                    
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
</x-layout>