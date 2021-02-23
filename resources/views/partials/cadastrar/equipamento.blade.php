@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1>Novo Equipamento</h1>
        <div class="bd-example bd-example-tabs w-50 h-75">
            <form id="cadastrar-eqp" action="{{route('admin.store', ['tipo' => 'equips'])}}" method="POST">
                @csrf
                <label class="mt-1 form-label" for="Nome">Nome</label>
                <input class="form-control" type="text" name="Nome">
                <label class="mt-1 form-label" for="numPatrimonio">Nº Patrimônio</label>
                <input class="form-control" type="number" name="numPatrimonio" placeholder="Max: 10 caracteres">
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
                <a type="button" class="btn btn-secondary col-5" href="{{ Route('admin.recursos', ['tipo' => 'equips']) }}">VOLTAR</a>
                <button form="cadastrar-eqp" class="btn btn-primary col-5">SALVAR</button>
            </div>
        </div>
    </div>
@endsection