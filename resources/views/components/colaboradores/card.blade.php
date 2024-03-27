<card >

    {{-- card unidades - inicio --}}
    


    <div class="row">
        @foreach ($colaboradores as $colaborador)
        <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h5 class="card-title">{{ $colaborador->nome }}</h5>
                    <p class="card-text">CPF: {{ $colaborador->cpf }}</p>
                    <p class="card-text">Email: {{ $colaborador->email }}</p>
                    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                        <div class="mr-md-2 text-center">
                            <p class="card-text font-weight-bold">Cargos</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Cargo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($colaborador->cargos as $cargo)
                                    <tr>
                                        <td>{{ $cargo->cargo }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="ml-md-2 mt-2 mt-md-0 text-center">
                            <p class="card-text font-weight-bold">Notas</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nota de Desempenho</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($colaborador->cargos as $cargo)
                                    <tr>
                                        <td>{{ $cargo->pivot->nota_desempenho }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
        @endforeach
    </div>


    {{-- card unidades - fim --}}

</card>