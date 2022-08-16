<form action={{ $action }} method="POST">
    @csrf

    @if ($update)
        @method('PUT')
        <div class="row mb-3">
            <div class="col-12">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome"
                    placeholder="Nome de descrição da série" autofocus
                    @isset($nome) value="{{ $nome }}" @endisset>
            </div>
        </div>
    @else
        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome de descrição da série"
                    autofocus @isset($nome) value="{{ $nome }}" @endisset>
            </div>
            <div class="col-2">
                <label for="seasonQty" class="form-label">Qtd / Temporadas</label>
                <input type="text" class="form-control" id="seasonQty" name="seasonQty"
                    placeholder="Número de Temporadas"
                    @isset($seasonQty) value="{{ $seasonQty }}" @endisset>
            </div>
            <div class="col-2">
                <label for="episodesPerSeason" class="form-label">Epsódios / Temporada</label>
                <input type="text" class="form-control" id="episodesPerSeason" name="episodesPerSeason"
                    placeholder="Epsódios por Temporada"
                    @isset($episodesPerSeason) value="{{ $episodesPerSeason }}" @endisset>
            </div>
        </div>
    @endif

    <div class="col-auto">
        <button type="submit" class="btn btn-outline-primary btn-sm mb-3" title="Salvar">
            <img src="{{ asset('img/send.svg') }}" />
            Salvar
        </button>
        <a href="{{ route('series.index') }}" class="btn btn-outline-danger btn-sm mb-3 ms-2" tabindex="-1"
            role="button" aria-disabled="true" title="Cancelar">
            <img src="{{ asset('img/x-lg.svg') }}" />
            Fechar
        </a>
    </div>
</form>
