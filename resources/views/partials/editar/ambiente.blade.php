@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')

    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1 class="mt-5">Editar</h1>
        <div class="w-50 h-75 m-auto">
            <div class="tab-content overflow-auto" id="nav-tabContent">
              <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <form action="{{Route('admin.update', ['id' => $recurso->id])}}" class="w-100 h-100 d-flex flex-column  justify-content-around" id="formu" method="POST">
                  @csrf
                  @method("PUT")
                  <div class="mb-3 mt-0">
                    <label for="" class="form-label text-uppercase">{{$tipo}}</label>
                    <input type="text" value="{{$tipo}}" id="tipo" name="tipo" hidden>
                  </div>
                  <div class="mb-3 mt-0">
                    <label for="tipo" class="form-label">Tipo</label>
                    <select class="form-control" name="Tipo">
                      <option value="Lab" 
                      @if ($recurso->Tipo == 'Lab')
                        selected                          
                      @endif>Laboratório</option>
                      <option value="Ofc"
                      @if ($recurso->Tipo == 'Ofc')
                        selected                          
                      @endif>Oficina</option>
                      <option value="Sala"
                      @if ($recurso->Tipo == 'Sala')
                        selected                          
                      @endif>Sala</option>
                    </select>
                  </div>
                  <div class="mb-3 mt-0">
                    <label for="numAmbiente" class="form-label">Número do Ambiente</label>
                    <input type="number" class="form-control mt-0" id="numAmbiente" name="numAmbiente" value="{{$recurso->numAmbiente}}">
                  </div>
                  <div class="mb-3 mt-0">
                    <label for="Hmax" class="form-label">Alunos Comportados</label>
                    <input type="number" class="form-control mt-0" id="Hmax" name="alunosComportados" value="{{$recurso->alunosComportados}}">
                  </div>
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
                @if ($errors->any())
                  <div class="alert alert-danger my-2">
                      <ul class="m-auto">
                          @foreach ($errors->all() as $error)
                              <li class="mx-0">{{$error}}</li>  
                          @endforeach
                      </ul>
                  </div>
                @endif 
              </div>
              <div class="col-12 d-flex align-items-center justify-content-around">
                <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.recursos')}}">VOLTAR</a>
                <button type="submit" form="formu" class="btn btn-primary col-5 text-uppercase">SALVAR</button>
              </div>
            </div>
        </div>
    </div>
@endsection