<x-layout title="Desempenho dos Colaboradores">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Unidade</th>
                    <th>Colaborador</th>
                    <th>Cargo</th>
                    <th>Nota de Desempenho</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($desempenhos as $desempenho)
                    <tr>
                        <td>{{ $desempenho->colaborador->unidade->nome_fantasia }}</td>
                        <td>{{ $desempenho->colaborador->nome }}</td>
                        <td>{{ $desempenho->colaborador->cargo }}</td>
                        <td>{{ $desempenho->nota_desempenho }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
