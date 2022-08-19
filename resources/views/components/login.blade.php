<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="{{ asset('js/login.js') }}">
</head>

<body>
    <div class="container">

        <h1>
            <p class="header">{{ $header }}</p>
        </h1>

        {{ $slot }}

        <br>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- @if (session('success'))
            <div class="alert alert-success">
                <img src="{{ asset('img/check-lg.svg') }}" />
                {{ session('success') }}

            </div>
        @elseif (session('danger'))
            <div class="alert alert-danger">
                <img src="{{ asset('img/info.svg') }}" />
                {{ session('danger') }}
            </div>
        @endif --}}


    </div>
</body>

</html>