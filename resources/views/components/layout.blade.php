<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    {{-- css - DataTables --}}
    <script type="stylesheet" src="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"></script>
    {{-- js - DataTables --}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" href="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

</head>

<body>
    <div class="container">
        <h1>
            <p class="header">{{ $header }}</p>
        </h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                <img src="{{ asset('img/check-lg.svg') }}" />
                {{ session('success') }}

            </div>
        @elseif (session('danger'))
            <div class="alert alert-danger">
                <img src="{{ asset('img/info.svg') }}" />
                {{ session('danger') }}
            </div>
        @endif

        {{ $slot }}
    </div>
</body>

</html>
