<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <link rel="shortcut icon" href="/img/sigma.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <title>SIGMA</title>
</head>
<body class="d-flex flex-column">
    {{-- barra de navegação --}}
    <nav class="navbar navbar-dark bg-dark d-flex px-5">
        <a href="{{Route('home')}}">
            <img src="/img/logo-senai.png" alt="Logo do senai" data-toggle="tooltip" data-placement="bottom" title="Home">
        </a>
        @if (isset($turma))
        <h3 class="text-white">{{$turma->siglaTurma}}</h3>
        @endif
        {{-- botão feito e chamado em outro template(login.blade.php) --}}
        @yield('button')
    </nav>
    {{-- conteudo feito e chamado em outro template(login.blade.php) --}}
        @yield('content')

</body>
</html>