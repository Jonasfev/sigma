@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1>Novo docente</h1>
        <div class="bd-example bd-example-tabs w-50 h-75">
            <form id="cadastrar-doc" action="{{route('admin.store', ['tipo' => 'docente'])}}" method="POST">
                @csrf
                <label class="mt-1 form-label" for="Nome">Nome</label>
                <input class="form-control" type="text" name="Nome" id="Nome" required>
                <label class="mt-1 form-label" for="Sobrenome">Sobrenome</label>
                <input class="form-control" type="text" name="Sobrenome" id="Sobrenome" required>
                <label class="mt-1 form-label" for="hmin">Horário mínimo</label>
                <input class="form-control" type="number" name="hmin" id="hmin" required>
                <label class="mt-1 form-label" for="hmax">Horário máximo</label>
                <input class="form-control" type="number" name="hmax" id="hmax" required>
                <label class="mt-1 form-label" for="hmax">Incluir UC</label>
                <div class="opcao-uc d-flex flex-column overflow-auto">
                    @foreach ($ucs as $uc)
                        <div>
                            <input type="checkbox" name="uc-{{$uc->id}}" value="{{$uc->id}}"> {{$uc->nomeUC}}
                        </div>
                    @endforeach
                </div>
            </form>        
            <div class="col-12 d-flex align-items-center justify-content-around mt-3">
                <a type="button" class="btn btn-secondary col-5" href="{{ Route('admin.recursos') }}">VOLTAR</a>
                <button  form="cadastrar-doc" class="btn btn-primary col-5">SALVAR</button>
            </div>
        </div>
    </div>
@endsection