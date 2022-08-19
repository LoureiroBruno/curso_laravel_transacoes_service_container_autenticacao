<x-layout>
    <x-slot:title>
        {{-- Series - Listar Itens --}}
        {{ __('messages.app_name') }}
        </x-slot>
        <x-slot:header>
            Todas as Temporadas de {{ $series->nome }}
            {{-- @php
                dd($seasons);
            @endphp --}}
            </x-slot>
            <table class="table table-sm">
                <thead class="thead-tabela-series-topo">
                    <tr class="th-tabela-series">
                        <th scope="col" id="td-coluna-acoes-tabela-detalhes-series-season">Lançamento de ({{ count($seasons)}}) Temporada(s)</th>
                        <th scope="col"  id="td-coluna-acoes-tabela-detalhes-episodes">Total de ({{ $seasons[0]->episodes->count() }}) Episódio(s)</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    @foreach ($seasons as $season)
                        <tr>
                            <td id="td-coluna-acoes-tabela-detalhes-series-season"><a href="{{ route('episodes.index', $season->id) }}" class="btn btn-warning btn-sm mb-2" tabindex="-1" role="button"
                                aria-disabled="true" title="Registrar os episódios">
                                <strong>{{ $season->number }}° </strong><i>Temporada</i></a>
                            </td>
                            <td id="td-coluna-acoes-tabela-detalhes-episodes">
                                <span id="bg-tabela-series-episodes" class="badge bg-danger">
                                 {{ $season->numberOfWatchedEpisodes() }} | {{ $season->episodes->count() }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <thead class="thead-tabela-series-topo">
                    <tr class="th-tabela-series">
                        <th scope="col" id="td-coluna-acoes-tabela-detalhes-series-season">Lançamento de ({{ count($seasons)}}) Temporada(s)</th>
                        <th scope="col"  id="td-coluna-acoes-tabela-detalhes-episodes">Total de ({{ $seasons[0]->episodes->count() }}) Episódio(s)</th>
                    </tr>
                </thead>
            </table>


            <br>
            <div class="col-auto">
                <a href="{{ route('series.index') }}" class="btn btn-outline-danger btn-sm mb-3 ms-2" tabindex="-1"
                    role="button" aria-disabled="true" title="Cancelar">
                    <img src="{{ asset('img/x-lg.svg') }}" />
                    Fechar
                </a>
            </div>
</x-layout>