@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')

    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1 class="mt-5">Editar {{$tipo}}</h1>
        <div class="w-50 h-75 m-auto">
            <div class="tab-content overflow-auto" id="nav-tabContent">
              <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <form action="{{Route('admin.update', ['id' => $recurso->id])}}" id="formu" class="w-100 h-100 d-flex flex-column  justify-content-around" method="POST">
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
                  <label class="mt-1 form-label" for="dataInicioCurso">Início</label>
                  <input class="form-control" type="date" name="dataInicioCurso" value="{{$recurso->dataInicioCurso}}">
                  <label class="mt-1 form-label" for="dataFimCurso">Fim</label>
                  <input class="form-control" type="date" name="dataFimCurso" value="{{$recurso->dataFimCurso}}">
                  <label class="mt-1 form-label" for="cargaTotalHoras">Carga horária total</label>
                  <input class="form-control" type="number" name="cargaTotalHoras" value="{{$recurso->cargaTotalHoras}}">
                  <div class="mb-3 mt-0">
                    <label class="mt-1 form-label" for="hmax">Incluir UC</label>
                    <div class="opcao-uc d-flex flex-column overflow-auto">
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
              </div>
              <div class="col-12 d-flex align-items-center justify-content-around">
                <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.recursos', ['tipo' => 'curso'])}}">VOLTAR</a>
                <button type="submit" form="formu" class="btn btn-primary col-5 text-uppercase">SALVAR</button>
              </div>
            </div>
        </div>
    </div>
@endsection