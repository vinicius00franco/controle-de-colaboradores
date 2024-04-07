<x-layout title="Adicionando Colaboradores">

    <div class="container">
        <x-colaboradores.form action=" {{ route('colaboradores.store')}}"
         :unidades="$unidades"
         :cargos="$cargos"
         :update="false"
         :create="true"
         
         ></x-colaboradores.form>
    </div>

</x-layout>
