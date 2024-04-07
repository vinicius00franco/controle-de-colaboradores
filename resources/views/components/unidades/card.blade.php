<card>

    {{-- card unidades - inicio --}}

    {{ $slot }}

    <div class="d-flex flex-column">
        <a href="{{ route('unidades.create') }}" class="btn btn-success mb-2">Criar Unidade</a>
    </div>
    <div class="row">
        @foreach ($unidades as $unidade) <!-- Limita a exibição a 4 unidades -->
        <div class="col-12 col-md-6 col-lg-4 col-xl-2">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $unidade->nome_fantasia }}</h5>
                    <p class="card-text"><strong>Razão Social:</strong> {{ $unidade->razao_social }}</p>
                    <p class="card-text"><strong>CNPJ:</strong> {{ $unidade->cnpj }}</p>
                    
                </div>
            </div>
        </div>
        @endforeach


        @if ($unidades instanceof Illuminate\Pagination\LengthAwarePaginator)
            {{ $unidades->links() }}
        @endif

    </div>


    {{-- card unidades - fim --}}

</card>