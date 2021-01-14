<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <title>SENAI</title>
</head>
<body class="d-flex flex-column">
    <nav class="navbar navbar-dark bg-dark d-flex">
    <a href="{{Route('home.admin')}}">
        <img src="" alt="Logo do senai">
        </a>
        @yield('button')
    </nav>

        @yield('content')

</body>
</html>