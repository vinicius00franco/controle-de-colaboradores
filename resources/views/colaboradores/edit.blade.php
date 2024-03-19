<x-layout title="Editando Colaboradores {{ $unidade->id }}" >

    <x-colaboradores.form :action="route('colaboradores.update', $colaborador)" 
                      :unidade="$colaborador" 
                      :update="true">
    </x-colaboradores.form>

</x-layout>