<card >

    {{-- card colaboradores - inic  io --}}
    


    <div class="row ">



        @foreach ($colaboradores as $colaborador)
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="card ">
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                
                <div class="mb-4">
                    
                    <h5 class="card-title text-center" style="height: 4rem;">{{ $colaborador->nome }}</h5>
                    <p class="card-text text-center">CPF: {{ $colaborador->cpf }}</p>
                    <p class="card-text text-center">Email: {{ $colaborador->email }}</p>

                    {{-- cargos / desempenho --}}
                </div>

                <div>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('colaboradores.desempenho.create', $colaborador->id) }}" class="btn btn-success mb-3 d-flex align-items-center justify-content-center" >
                            <i class="bi bi-plus-circle-dotted"></i>
                        </a>
                        <p class="mb-0 ml-2">Atribuir Nota</p>
                    </div>
                    
                    
                
                    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                        <div class="mr-md-2">
                            <p class="card-text font-weight-bold text-center mb-3">Cargos</p>
                            @foreach ($colaborador->cargos as $cargo)
                            <p class="text-center">{{ $cargo->cargo }}</p>
                            @endforeach
                        </div>
                        <div class="ml-md-2 mt-2 mt-md-0">
                            <p class="card-text font-weight-bold text-center mb-3">Notas</p>
                            @foreach ($colaborador->cargos as $cargo)
                            <p class="text-center">{{ $cargo->pivot->nota_desempenho }}</p>
                            @endforeach
                        </div>
                        <div class="ml-md-2 mt-2 mt-md-0">
                            <p class="card-text font-weight-bold text-center mb-3"></p>
                            @foreach ($colaborador->cargos as $cargo)
                            <div class="d-flex justify-content-center px-3">
                                <a href="{{ route('colaboradores.desempenho.edit', $colaborador) }}" class="btn btn-warning btn-sm mb-2 text-center mx-1" style="width: 2rem;">E</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                    
                </div>
            </div>
        </div>
        
        @endforeach
    </div>

    @if ($colaboradores instanceof Illuminate\Pagination\LengthAwarePaginator)
    {{ $colaboradores->links() }}
    @endif


    {{-- card unidades - fim --}}

</card>