<x-layout>
    <x-slot:title>
        {{-- Series - Listar Itens --}}
        {{ __('messages.app_name') }}
        </x-slot>
        <x-slot:header>
            Detalhes Série: {{ $series->nome }}

            </x-slot>
            <table class="table table-sm">
                <thead class="thead-tabela-series-topo">
                    <tr class="th-tabela-series">
                        <th scope="col" id="td-coluna-acoes-tabela-detalhes-series-season">Lançamento de ({{ count($seasons)}}) Temporada(s)</th>
                        <th scope="col"  id="td-coluna-acoes-tabela-detalhes-episodes">Episódios por Temporada</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    @foreach ($seasons as $season)
                        <tr>
                            <td id="td-coluna-acoes-tabela-detalhes-series-season"><strong>{{ $season->number }}° </strong><i>Temporada</i></td>
                            <td id="td-coluna-acoes-tabela-detalhes-episodes">
                                <span class="badge bg-primary">
                                    Epsódios {{ $season->episodes->count() }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <thead class="thead-tabela-series-topo">
                    <tr class="th-tabela-series">
                        <th scope="col" id="td-coluna-acoes-tabela-detalhes-series-season">Lançamento de ({{ count($seasons)}}) Temporada(s)</th>
                        <th scope="col"  id="td-coluna-acoes-tabela-detalhes-episodes">Episódios por Temporada</th>
                    </tr>
                </thead>
            </table>


            <br>
            <div class="col-auto">
                <a href="{{ route('series.index') }}" class="btn btn-outline-danger btn-sm mb-3 ms-2" tabindex="-1"
                    role="button" aria-disabled="true" title="Cancelar">
                    <img src="{{ asset('img/send.svg') }}" />
                    Voltar
                </a>
            </div>
</x-layout>


