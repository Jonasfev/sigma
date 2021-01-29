@extends('template')

@section('button')
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">
        LOGIN
    </button>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1>Horário</h1>
        <div class="w-50">
            <form action="#" class="d-flex align-items-center justify-content-center">
                <input type="text" class="form-control">
                <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center">
                    <img src="img/search.png" alt="pesquisar">
                </button>
            </form>
        </div>
        <div class="class-ctn w-50 h-50 overflow-auto d-flex flex-column align-items-center">
            @php
                $salas = ['1DTA#Desenvolvimento de sistemas', '2DTA#Desenvolvimento de sistemas', '3DTA#Desenvolvimento de sistemas', '4DTA#Desenvolvimento de sistemas', '5DTA#Desenvolvimento de sistemas'];
            @endphp
            @foreach ($salas as $sala)
                <div class="class row col-auto w-75 h-25 bg-light d-flex"  data-bs-toggle="modal" data-bs-target="#horario">
                    <div class="class-code w-25 h-100 bg-secondary text-center fw-bold d-flex align-items-center justify-content-center">
                        @php
                            $sala = explode('#', $sala);
                        @endphp
                        {{$sala[0]}}
                    </div>
                    <div class="class-info h-100 d-flex align-items-center justify-content-center fw-bold">
                        {{$sala[1]}}
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content w-50">
                <div class="modal-body">
                    <form action= {{ Route('admin.home') }} class="d-flex flex-column justify-content-center">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Usuário</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="12345-6">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******">
                        </div>
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="horario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    Horário
                </div>
            </div>
        </div>
    </div>
@endsection