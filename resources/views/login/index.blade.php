<x-login>
    <x-slot:title>
        Series - Login
        </x-slot>
        <x-slot:header>
            Login
            </x-slot>
            <form method="post">
                @csrf
                <div class="container">
                    <div class="form-group">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <button class="btn btn-secondary mt-3">
                        Entrar
                    </button>

                    <div class="login-registro">
                        <p class="login-registro-form">Não possui uma conta de acesso?
                            <a href="{{ route('users.create') }}">Registrar</a>
                          </p>
                    </div>
                </div>
            </form>
</x-login>
