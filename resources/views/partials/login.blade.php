@extends('template')

@section('button')
    <a class="btn btn-primary" href="{{Route('login')}}">
        LOGIN
    </a>
@endsection

@section('content')
{{-- tela de login ou index, mostrando as siglas das turmas e seus cursos --}}
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1>Horário</h1>
        <div class="w-50">
            <form action="{{Route('index.show')}}" method="POST" class="w-100 d-flex flex-column align-items-center justify-content-center">
                <div class="w-100 d-flex align-items-center justify-content-center">
                    @csrf
                    <input name="nomeCurso" type="search" class="form-control"
                    @if ($pesq)
                    value="{{$param}}"
                    @endif
                    >
                    <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center">
                        <img src="img/search.png" alt="pesquisar">
                    </button>
                </div>
                @if ($pesq)
                    <a class="mt-2 mx-auto text-decoration-none" href="{{Route('index')}}" type="button">Limpar Pesquisa</a>
                @endif
            </form>
        </div>
        <div class="class-ctn w-50 h-50 overflow-auto d-flex flex-column align-items-center">
            @for ($cont = 0; $cont < sizeOf($turmas); $cont++)
                <a class="class row col-auto w-75 h-25 bg-light d-flex text-decoration-none text-dark" href="{{Route('visualizaHorario',
                ['id' => $turmas[$cont]->id])}}">
                    <div class="class-code w-25 h-100 bg-secondary text-center fw-bold d-flex align-items-center justify-content-center">
                        {{$turmas[$cont]->siglaTurma}}
                    </div>
                    <div class="class-info h-100 d-flex align-items-center justify-content-center fw-bold">
                        {{$cursos[$cont]->nomeCurso}}
                    </div>
                </a>
            @endfor
        </div>
    </div>

@endsection