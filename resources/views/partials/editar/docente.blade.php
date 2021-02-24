@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')

  {{-- formulario de edição do docente --}}
  <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
      <h1 class="mt-5">Editar</h1>
      <div class="bd-example bd-example-tabs w-50 h-75">
            <div class="w-100 d-flex flex-column align-items-end justify-content-end">
              <div class="w-50 mb-2 d-flex align-items-center justify-content-center">
                  <input id="nomeUC" name="nomeUC" type="text" class="form-control" placeholder="Filtro">
              </div>
            </div>
            <form action="{{Route('admin.update', ['id' => $recurso->id])}}" class="w-100 d-flex justify-content-around" id = "formu" method="POST">
              <div class="w-45">
                @csrf
                @method("PUT")
                <div class="mb-3 mt-0">
                  <input type="text" value="{{$tipo}}" name="tipo" id="tipo" hidden>
                </div>
                <div class="mb-3 mt-0">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control mt-0" name="Nome" id="nome" value="{{$recurso->Nome}}">
                </div>
                <div class="mb-3 mt-0">
                  <label for="Sobrenome" class="form-label">Sobrenome</label>
                  <input type="text" class="form-control mt-0" name = "Sobrenome" id="sobrenome" value="{{$recurso->Sobrenome}}">
                </div>
                <div class="mb-3 mt-0">
                  <input class="form-control" type="number" name="hmin" id="hmin" value='10' hidden>
                  <input class="form-control" type="number" name="hmax" id="hmax"  value='10' hidden>  
                </div>
              </div>
              <div class="w-45 opcao-uc d-flex flex-column overflow-auto">
                <div id="ucsPesquisadas" class="opcao-uc overflow-auto">
                  @for ($cont = 0; $cont < sizeOf($ucs); $cont++)
                      <div>
                          <input type="checkbox" name="uc-{{$ucs[$cont]->id}}" value="{{$ucs[$cont]->id}}"
                          @foreach ($recucs as $recuc)
                              @if ($recuc->ucComportada == $ucs[$cont]->id)
                                  checked
                              @endif
                          @endforeach
                          > {{$ucs[$cont]->nomeUC}}
                      </div>
                  @endfor
                </div>
              </div>
            </form>
            {{-- msgs de error caso falta algum campo esteja incopativel --}}
            @if ($errors->any())
              <div class="alert alert-danger my-2">
                  <ul class="m-auto">
                      @foreach ($errors->all() as $error)
                          <li class="mx-0">{{$error}}</li>  
                      @endforeach
                  </ul>
              </div>
            @endif 
          <div class="col-12 d-flex align-items-center justify-content-around">
            <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.recursos', ['tipo' => 'docente'])}}">VOLTAR</a>
            <button type="submit" form="formu" class="btn btn-primary col-5 text-uppercase">SALVAR</button>
          </div>
      </div>
  </div>

  <script>
    //pesquisa de UC a cada tecla pressionada
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