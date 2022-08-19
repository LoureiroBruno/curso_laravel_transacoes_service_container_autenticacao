<x-layout>
    <x-slot:title>
        Series - lay
        </x-slot>
        <x-slot:header>
            Cadastrar Usuário
            </x-slot>
            <form method="post">
                @csrf

                <div class="form-group">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirma Senha</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>

                <br>
                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-primary btn-sm mb-3" title="Salvar">
                        <img src="{{ asset('img/send.svg') }}" />
                        Salvar
                    </button>
                    <a href="{{ route('login') }}" class="btn btn-outline-danger btn-sm mb-3 ms-2" tabindex="-1"
                        role="button" aria-disabled="true" title="Cancelar">
                        <img src="{{ asset('img/x-lg.svg') }}" />
                        Fechar
                    </a>
                </div>

            </form>
</x-layout>
