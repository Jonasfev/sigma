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
            <form action="{{Route('index.show')}}" method="POST" class="w-100 d-flex flex-column align-items-center justify-content-center">
                <div class="w-100 d-flex align-items-center justify-content-center">
                    @csrf
                    <input name="nomeCurso" type="text" class="form-control"
                    @if ($pesq)
                    value="{{$param}}"
                    @endif
                    >
                    <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center">
                        <img src="img/search.png" alt="pesquisar">
                    </button>
                </div>
                @if ($pesq)
                    <a class="my-1 mx-auto" href="{{Route('index')}}">Limpar filtro</a>
                @endif
            </form>
        </div>
        <div class="class-ctn w-50 h-50 overflow-auto d-flex flex-column align-items-center">
            @for ($cont = 0; $cont < sizeOf($turmas); $cont++)
                <div class="class row col-auto w-75 h-25 bg-light d-flex"  data-bs-toggle="modal" data-bs-target="#horario">
                    <div class="class-code w-25 h-100 bg-secondary text-center fw-bold d-flex align-items-center justify-content-center">
                        {{$turmas[$cont]->siglaTurma}}
                    </div>
                    <div class="class-info h-100 d-flex align-items-center justify-content-center fw-bold">
                        {{$cursos[$cont]->nomeCurso}}
                    </div>
                </div>
            @endfor
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