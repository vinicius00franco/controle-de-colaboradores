<x-layout title="Adicionando Desempenho">

    <div class="container">
        <x-unidades.form action=" {{ route('desempnho.store')}}"
                        :update="true"
        ></x-unidades.form>
    </div>

</x-layout>
