
<x-layout title="Editando desempenho {{ $colaborador->nome }}" >


    @csrf

    @if($update ?? '')
    @method('PUT')
    @endisset

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <x-desempenhos.form action="{{ route('desempenho.update', $colaborador->id) }}"
                        method="post">

    </x-desempenhos.form>

</x-layout>