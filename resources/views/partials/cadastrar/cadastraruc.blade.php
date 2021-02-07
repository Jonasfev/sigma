@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1>Nova UC</h1>
        <div class="bd-example bd-example-tabs w-50 h-75">
            <form id="cadastrar-uc" action="{{route('admin.store', ['tipo' => 'uc'])}}" method="POST">
                @csrf
                <label class="mt-1 form-label" for="siglaUC">Sigla da UC</label>
                <input class="form-control" type="text" name="siglaUC">
                <label class="mt-1 form-label" for="nomeUC">Nome da UC</label>
                <input class="form-control" type="text" name="nomeUC">
                <label class="mt-1 form-label" for="aulasSemanais">Nº de aulas semanais</label>
                <input class="form-control" type="number" name="aulasSemanais">
            </form>
            <div class="col-12 d-flex align-items-center justify-content-around mt-3">
                <a type="button" class="btn btn-secondary col-5" href="{{ Route('admin.recursos') }}">VOLTAR</a>
            <button form="cadastrar-uc" class="btn btn-primary col-5">SALVAR</button>
            </div>
            </div>
        </div>
    </div>
@endsection