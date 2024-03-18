<x-layout title="Editando unidade {{ $unidade->id }}" >

    <x-unidades.form :action="route('unidades.update', $unidade)" 
                      :unidade="$unidade" 
                      {{-- :nome_fantasia="$unidade->nome_fantasia" 
                      :razao_social="$unidade->razao_social" 
                      :cnpj="$unidade->cnpj"  --}}
                      :update="true">
    </x-unidades.form>

</x-layout>