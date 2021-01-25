<html>
    <head>
        <title>SGM - @yield('titulo')</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body{ padding:40px;}
            .navbar{margin-bottom:30px;}
            .card{margin:20px;}
            .card-header{color: #000;}
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a href="{{route('cidade.index')}}" class="navbar-brand"><b>SGM -Sistema de Gestão de Municípios</b></a>

        </nav>

        <div class="card">
            <div class="card-header bg-dark">
                <h3><b style="color: white";>{{ $titulo }}</b></h2>
            </div>
            <div class="card-body">
                @yield("conteudo")
            </div>
        </div>

    </body>
    <footer>
        <b>&copy;2021 - Willians Beato.</b>
    </footer>

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>

</html>