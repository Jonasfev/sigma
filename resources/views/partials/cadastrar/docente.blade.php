@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1>Novo docente</h1>
        <div class="bd-example bd-example-tabs w-50 h-75">
            <form id="cadastrar-doc" action="{{route('admin.store', ['tipo' => 'docente'])}}" method="POST">
                @csrf
                <label class="mt-1 form-label" for="Nome">Nome</label>
                <input class="form-control" type="text" name="Nome" id="Nome">
                <label class="mt-1 form-label" for="Sobrenome">Sobrenome</label>
                <input class="form-control" type="text" name="Sobrenome" id="Sobrenome">
                <label class="mt-1 form-label" for="hmin">Horas Mínimas</label>
                <input class="form-control" type="number" name="hmin" id="hmin">
                <label class="mt-1 form-label" for="hmax">Horas Máximas</label>
                <input class="form-control" type="number" name="hmax" id="hmax">
                <label class="mt-1 form-label">Incluir UC</label>
                <div class="opcao-uc d-flex flex-column overflow-auto">
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
                <a type="button" class="btn btn-secondary col-5" href="{{ Route('admin.recursos') }}">VOLTAR</a>
                <button  form="cadastrar-doc" class="btn btn-primary col-5">SALVAR</button>
            </div>
        </div>
    </div>
@endsection