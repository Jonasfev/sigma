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
            <div class="w-100 d-flex flex-column align-items-end justify-content-end">
                <div class="mb-2 w-50 d-flex align-items-center justify-content-center">
                    <input id="nomeUC" name="nomeUC" type="text" class="form-control" placeholder="Filtro">
                </div>
            </div>
            <form class="w-100 d-flex justify-content-around" id="cadastrar-doc" action="{{route('admin.store', ['tipo' => 'docente'])}}" method="POST">
                <div class="w-45">
                    @csrf
                    <label class="mt-1 form-label" for="Nome">Nome</label>
                    <input class="form-control" type="text" name="Nome" id="Nome">
                    <label class="mt-1 form-label" for="Sobrenome">Sobrenome</label>
                    <input class="form-control" type="text" name="Sobrenome" id="Sobrenome">
                    <input class="form-control" type="number" name="hmin" id="hmin" value='10' hidden>
                    <input class="form-control" type="number" name="hmax" id="hmax"  value='10' hidden>
                </div>
                <div class="w-45 opcao-uc d-flex flex-column overflow-auto">
                    <div id="ucsPesquisadas" class="opcao-uc overflow-auto">
                        @foreach ($ucs as $uc)
                            <div>
                                <input type="checkbox" name="uc-{{$uc->id}}" value="{{$uc->id}}"> {{$uc->nomeUC}}
                            </div>
                        @endforeach
                    </div>
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
                <a type="button" class="btn btn-secondary col-5" href="{{ Route('admin.recursos', ['tipo' => 'docente']) }}">VOLTAR</a>
                <button  form="cadastrar-doc" class="btn btn-primary col-5">SALVAR</button>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function(){
            $("#nomeUC").on("keyup", function() {
              var value = $(this).val().toLowerCase();
            $("#ucsPesquisadas *").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                $("#ucsPesquisadas").children("div").children("input").removeAttr("style");
            });
          });
        });
    </script>
@endsection