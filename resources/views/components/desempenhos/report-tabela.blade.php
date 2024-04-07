<report-tabela>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Unidade</th>
                    <th>Cargo</th>
                    <th>Notas</th>
                </tr>
            </thead>
            <tbody>
                @php
                    // Ordenar os colaboradores pelas notas de desempenho mais recentes, da maior para a menor
                    $colaboradoresOrdenados = $colaboradores->sortByDesc(function ($colaborador) {
                        return $colaborador->cargos->max('pivot.nota_desempenho');
                    });
            
                    // Selecionar os 5 primeiros colaboradores
                    $colaboradoresSelecionados = $colaboradoresOrdenados->take(5);
                @endphp
            
                @foreach($colaboradoresSelecionados as $colaborador)
                    @php
                        $notaMaisRecente = $colaborador->cargos->max('pivot.nota_desempenho');
                        $cargosComNotaMaisRecente = $colaborador->cargos->where('pivot.nota_desempenho', $notaMaisRecente);
                        $cargosOrdenados = $cargosComNotaMaisRecente->sortByDesc('pivot.nota_desempenho');
                        $cargoMaiorNota = $cargosOrdenados->first();
                    @endphp
                    <tr>
                        <td>{{ $colaborador->nome }}</td>
                        <td>{{ $colaborador->cpf }}</td>
                        <td>{{ $colaborador->email }}</td>
                        <td>{{ $colaborador->unidades->nome_fantasia }}</td>
                        @if($cargoMaiorNota)
                            <td>{{ $cargoMaiorNota->cargo }}</td>
                            <td class="text-center">{{ $cargoMaiorNota->pivot->nota_desempenho }}</td>
                        @else
                            <td>N/A</td>
                            <td class="text-center">N/A</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>

</report-tabela>