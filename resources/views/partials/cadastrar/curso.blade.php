@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1>Novo curso</h1>
        <div class="bd-example bd-example-tabs w-50 h-75">
            <form class="w-100 d-flex justify-content-around" id="cadastrar-curso" action="{{route('admin.store', ['tipo' => 'curso'])}}" method="POST">
                <div class="w-45">
                    @csrf
                    <label class="mt-1 form-label" for="tipoCurso">Tipo</label>
                    <select class="form-control" name="tipoCurso">
                        <option value="CAI">CAI</option>
                        <option value="TEC">TEC</option>
                        <option value="FIC">FIC</option>
                    </select>
                    <label class="mt-1 form-label" for="siglaCurso">Sigla</label>
                    <input class="form-control" type="text" name="siglaCurso">
                    <label class="mt-1 form-label" for="nomeCurso">Nome do Curso</label>
                    <input class="form-control" type="text" name="nomeCurso">
                    <label class="mt-1 form-label" for="dataInicioCurso">Início</label>
                    <input class="form-control" type="date" name="dataInicioCurso">
                    <label class="mt-1 form-label" for="dataFimCurso">Fim</label>
                    <input class="form-control" type="date" name="dataFimCurso">
                    <label class="mt-1 form-label" for="cargaTotalHoras">Carga horária total</label>
                    <input class="form-control" type="number" name="cargaTotalHoras">
                </div>
                <div class="w-45 d-flex flex-column opcao-uc overflow-auto">
                    @foreach ($ucs as $uc)
                        <div>
                            <input type="checkbox" name="uc-{{$uc->id}}" value="{{$uc->id}}"> {{$uc->nomeUC}}
                        </div>
                    @endforeach
                </div>
            </form>
            @if ($errors->any())
            <div class="alert alert-danger my-2">
                <ul class="m-auto">
                    @foreach ($errors->all() as $error)
                        <li class="mx-0">{{$error}}</li>  
                    @endforeach
                </ul>
            </div>
            @endif          
            <div class="col-12 d-flex align-items-center justify-content-around mt-3">
                <a type="button" class="btn btn-secondary col-5" href="{{ Route('admin.recursos', ['tipo' => 'curso']) }}">VOLTAR</a>
                <button type="submit" form="cadastrar-curso" class="btn btn-primary col-5">SALVAR</button>
            </div>
        </div>
    </div>
@endsection