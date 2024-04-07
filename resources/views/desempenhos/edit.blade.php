
<x-layout title="Colaborador: {{ $colaborador->nome }} / Desempenho: {{$desempenho}}" >

    <x-desempenhos.cadastro.form action="{{ route('colaboradores.desempenho.update', $colaborador->id) }}"
                        :update="true"
                        :create="false"
                        :desempenho="$desempenho"
                        :colaborador="$colaborador"
                        :cargo="$cargo"
                        >

    </x-desempenhos.cadastro.form>

</x-layout>