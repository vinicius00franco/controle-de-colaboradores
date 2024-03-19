<x-layout title="Editando unidade {{ $unidade->id }}" >

    <x-unidades.form :action="route('unidades.update', $unidade)" 
                      :unidade="$unidade" 
                      :update="true">
    </x-unidades.form>

</x-layout>