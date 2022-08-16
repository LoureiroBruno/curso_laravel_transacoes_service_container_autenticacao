<x-layout>
    <x-slot:title>
        Series - Alterar Item
        </x-slot>
        <x-slot:header>
            Editar Série: {{ $series->nome }}
            </x-slot>

            <x-series.form action="{{ route('series.update', $series->id) }}" :nome="$series->nome" :update="true" />
</x-layout>
