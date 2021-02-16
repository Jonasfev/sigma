@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')

    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1 class="mt-5">Editar</h1>
        <div class="w-50 h-75 m-auto">
            <div class="tab-content overflow-auto" id="nav-tabContent">
              <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <form action="{{Route('admin.update', ['id' => $recurso->id])}}" class="w-100 h-100 d-flex flex-column  justify-content-around" id = "formu" method="POST">
                  @csrf
                  @method("PUT")
                  <div class="mb-3 mt-0">
                    <label for="" class="form-label text-uppercase">{{$tipo}}</label>
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
                    <label for="Hmin" class="form-label">Horas Mínimas</label>
                    <input type="number" class="form-control mt-0" name="hmin" id="Hmin" value="{{$recurso->hMin}}">
                  </div>
                  <div class="mb-3 mt-0">
                    <label for="Hmax" class="form-label">Horas Máximas</label>
                    <input type="number" class="form-control mt-0" name="hmax" id="Hmax" value="{{$recurso->hMax}}">
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