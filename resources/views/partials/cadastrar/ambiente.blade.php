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
            <div class="w-100 d-flex flex-column align-items-end justify-content-end">
                <div class="mb-2 w-50 d-flex align-items-center justify-content-center">
                    <input id="nomeUC" name="nomeUC" type="text" class="form-control" placeholder="Filtro">
                </div>
            </div>
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
                    <input class="form-control" type="number" name="alunosComportados" value='10' hidden>
                </div>                
                <div class="w-45 d-flex flex-column">
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
                <a type="button" class="btn btn-secondary col-5" href="{{ Route('admin.recursos', ['tipo' => 'ambiente']) }}">VOLTAR</a>
                <button form="cadastrar-amb" class="btn btn-primary col-5">SALVAR</button>
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