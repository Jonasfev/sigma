@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1>Novo Equipamento</h1>
        <div class="bd-example bd-example-tabs w-50 h-75">
            <form id="cadastrar-eqp" action="">
                <label class="mt-1 form-label" for="Nome">Nome</label>
                <input class="form-control" type="text" name="Nome">
                <label class="mt-1 form-label" for="numPatrimonio">Nº Patrimônio</label>
                <input class="form-control" type="number" name="numPatrimonio">
            </form>    
            <div class="col-12 d-flex align-items-center justify-content-around mt-3">
                <a type="button" class="btn btn-secondary col-5" href="{{ Route('admin.recursos') }}">VOLTAR</a>
                <button class="btn btn-primary col-5">SALVAR</button>
            </div>
        </div>
    </div>
@endsection