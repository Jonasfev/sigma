@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')

  {{-- formulario de edição do curso --}}
  <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
      <h1 class="mt-5">Editar {{$tipo}}</h1>
      <div class="bd-example bd-example-tabs w-50 h-75">
          <div class="w-100 d-flex flex-column align-items-end justify-content-end">
            <div class="mb-2 w-50 d-flex align-items-center justify-content-center">
                <input id="nomeUC" name="nomeUC" type="text" class="form-control" placeholder="Filtro">
            </div>
          </div>
          <form class="w-100 d-flex justify-content-around" action="{{Route('admin.update', ['id' => $recurso->id])}}" id="formu" class="w-100 h-100 d-flex flex-column  justify-content-around" method="POST">
            <div class="w-45">
              @csrf
              @method("PUT")
              <input type="text" value="{{$tipo}}" id="tipo" name="tipo" hidden>
              <label class="mt-1 form-label" for="tipoCurso">Tipo</label>
              <select class="form-control" name="tipoCurso">
                  <option value="CAI" 
                  @if ($recurso->tipoCurso == 'CAI')
                    selected                          
                  @endif>CAI</option>
                  <option value="TEC"
                  @if ($recurso->tipoCurso == 'TEC')
                    selected                          
                  @endif>TEC</option>
                  <option value="FIC"
                  @if ($recurso->tipoCurso == 'FIC')
                    selected                          
                  @endif>FIC</option>
              </select>
              <label class="mt-1 form-label" for="siglaCurso">Sigla</label>
              <input class="form-control" type="text" name="siglaCurso" value="{{$recurso->siglaCurso}}">
              <label class="mt-1 form-label" for="nomeCurso">Nome do Curso</label>
              <input class="form-control" type="text" name="nomeCurso" value="{{$recurso->nomeCurso}}">
              <input class="form-control" type="date" name="dataInicioCurso" value='2021-02-22' hidden>
              <input class="form-control" type="date" name="dataFimCurso" value='2021-02-22' hidden>
              <input class="form-control" type="number" name="cargaTotalHoras" value='10' hidden>  
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
        <div class="col-12 mt-3 d-flex align-items-center justify-content-around">
          <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.recursos', ['tipo' => 'curso'])}}">VOLTAR</a>
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