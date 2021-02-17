@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1>Novo ambiente</h1>
        <div class="bd-example bd-example-tabs w-50 h-75">
            <form class="w-100 d-flex justify-content-around" id="cadastrar-amb" action="{{route('admin.store', ['tipo' => 'ambiente'])}}" method="POST">
                <div class="w-45">
                    @csrf
                    <label class="mt-1 form-label" for="tipo">Tipo</label>
                    <select class="form-control" name="tipo">
                        <option value="Lab">Laboratório</option>
                        <option value="Ofc">Oficina</option>
                        <option value="Sala">Sala</option>
                    </select>
                    <label class="mt-1 form-label" for="numAmbiente">Número do Ambiente</label>
                    <input class="form-control" type="number" name="numAmbiente">
                    <label class="mt-1 form-label" for="alunosComportados">Alunos Comportados</label>
                    <input class="form-control" type="number" name="alunosComportados">
                </div>                
                <div class="w-45 opcao-uc d-flex flex-column overflow-auto">
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
                <a type="button" class="btn btn-secondary col-5" href="{{ Route('admin.recursos', ['tipo' => 'ambiente']) }}">VOLTAR</a>
                <button form="cadastrar-amb" class="btn btn-primary col-5">SALVAR</button>
            </div>
        </div>
    </div>
@endsection