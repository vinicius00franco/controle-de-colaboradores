<x-layout title="Colaboradores"  >
    
    <div>
        <div>
            <div class = "col-12 mx-3">
                <x-colaboradores.pesquisa.form  :action=" route('colaboradores.show') "  />
            </div>
        
            <x-colaboradores.card :colaboradores="$colaboradores"/>
        </div>
    </div>
  
    <div>
        <x-unidades.card :unidades="$unidades">
            <h1 class=""> Unidades</h1>
        </x-unidades.card>
    </div>


    <h1 class="my-5"> Relatórios</h1>

    <x-relatorio.accordion :unidades="$unidadesTotalRelatorio " >
        <x-desempenhos.report-tabela :colaboradores="$colaboradoresTotalRelatorio " />
    </x-relatorio.accordion>

</x-layout>
