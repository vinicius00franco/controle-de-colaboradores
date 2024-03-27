<x-layout title="Dashboard"  >

    <div>
        <x-unidades.card :unidades="$unidades" />
    </div>
     <!-- Pesquisa de Colaboradores -->

    
    <div>
        <div>
            <a href="{{ route('colaboradores.create') }}" class="btn btn-primary mb-2">Criar colaborador</a>

            <div class = "col-12 py-6">
                <x-desempenhos.pesquisa.form  :action="  route('colaboradores.show') "  />
            </div>
        
            <x-colaboradores.card :colaboradores="$colaboradores"/>
        </div>
    </div>

</x-layout>
