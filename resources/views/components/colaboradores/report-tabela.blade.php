<report-tabela>

    @php
        // Ordenar as unidades pelo número de colaboradores de forma decrescente
        $unidadesOrdenadas = $unidades->sortByDesc(function ($unidade) {
            return $unidade->colaboradores()->count();
        });

        // Limitar a 5 unidades
        $unidadesLimitadas = $unidadesOrdenadas->take(10);
    @endphp

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome Fantasia</th>
                    <th>Razão Social</th>
                    <th>CNPJ</th>
                    <th class="text-center" >Total de Colaboradores</th>
                </tr>
            </thead>
            <tbody>
                @foreach($unidadesLimitadas as $unidade)
                <tr>
                    <td>{{ $unidade->nome_fantasia }}</td>
                    <td>{{ $unidade->razao_social }}</td>
                    <td>{{ $unidade->cnpj }}</td>
                    <td class="text-center">{{ $unidade->colaboradores()->count() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</report-tabela>