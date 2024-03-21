<x-layout title="Desempenho dos Colaboradores">
    <div class="container">
        <a href="{{ route('colaboradores.create') }}" class="btn btn-primary mb-2">Criar Colaborador</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Unidade</th>
                    <th>Cargo</th>
                    <th>Nota de Desempenho</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($colaboradores as $colaborador)
                    <tr>
                        <td>{{ $colaborador->id }}</td>
                        <td>{{ $colaborador->nome }}</td>
                        <td>{{ $colaborador->cpf }}</td>
                        <td>{{ $colaborador->email }}</td>
                        <td>{{ $colaborador->unidades->nome_fantasia }}</td>
                        <td>{{ $colaborador->cargos->cargo }}</td>
                        <td>{{ $colaborador->nota_desempenho }}</td>
                        <td>
                            <a href="{{ route('desempenho.edit', $colaborador->id) }}" class="btn btn-sm btn-primary">Editar Desempenho</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>