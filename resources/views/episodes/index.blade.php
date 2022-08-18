<x-layout>
    <x-slot:title>
        {{-- Series - Listar Itens --}}
        {{ __('messages.app_name') }}
        </x-slot>
        <x-slot:header>
            Todos os Episódios da {{ $season->number }}º Temporada
            {{-- @php
                dd($season->series_id);
            @endphp --}}
            </x-slot>
            <form method="post">
                @csrf
                <table class="table table-sm">
                    <thead class="thead-tabela-series-topo">
                        <tr class="th-tabela-series">
                            <th scope="col" id="td-coluna-acoes-tabela-detalhes-series-season">Lançamento de
                                {{ count($episodes) }} Episódio(s)</th>
                            <th scope="col" id="td-coluna-acoes-tabela-detalhes-episodes">Episódios Assistidos</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($episodes as $episode)
                            <tr>
                                <td id="td-coluna-acoes-tabela-detalhes-series-season">
                                    <strong>{{ $episode->number }}° </strong>
                                    <i>Epsiódio</i>
                                </td>
                                <td id="td-coluna-acoes-tabela-detalhes-episodes">
                                    <input id="checkbox-tabela-series-episodes" type="checkbox" name="episodes[]" value="{{ $episode->id }}"  @if ($episode->watched) checked @endif />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <thead class="thead-tabela-series-topo">
                        <tr class="th-tabela-series">
                            <th scope="col" id="td-coluna-acoes-tabela-detalhes-series-season">Lançamento de
                                {{ count($episodes) }} Episódio(s)</th>
                            <th scope="col" id="td-coluna-acoes-tabela-detalhes-episodes">Episódios Assistidos</th>
                        </tr>
                    </thead>
                </table>


                <br>
                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-primary btn-sm mb-3" title="Salvar">
                        <img src="{{ asset('img/send.svg') }}" />
                        Salvar
                    </button>
                    <a href="{{ route('seasons.index', $season->series_id) }}" class="btn btn-outline-danger btn-sm mb-3 ms-2" tabindex="-1"
                        role="button" aria-disabled="true" title="Cancelar">
                        <img src="{{ asset('img/x-lg.svg') }}" />
                        Fechar
                    </a>
                </div>
            </form>
</x-layout>
