<x-layout title="Adicionando Desempenho do {{ $colaborador->nome }} ">

        <x-desempenhos.cadastro.form action=" {{ route('colaboradores.desempenho.store' , $colaborador->id)}}"
                        :update="false"
                        :create="true"

                        :colaborador="$colaborador"
                        :cargos="$cargos"
                        >
        </x-desempenhos.cadastro.form>

</x-layout>
