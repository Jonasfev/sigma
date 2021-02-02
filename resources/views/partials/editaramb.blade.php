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
                <form action="{{Route('admin.update', ['id' => $recurso->id])}}" class="w-100 h-100 d-flex flex-column  justify-content-around" id="formu" method="POST">
                  @csrf
                  @method("PUT")
                  <div class="mb-3 mt-0">
                    <label for="" class="form-label text-uppercase">{{$tipo}}</label>
                    <input type="text" value="{{$tipo}}" id="tipo" name="tipo" hidden>
                  </div>
                  <div class="mb-3 mt-0">
                  <label for="Tipo" class="form-label">Tipo</label>
                  <input type="text" class="form-control mt-0" id="Tipo" name="Tipo" value="{{$recurso->Tipo}}">
                  </div>
                  <div class="mb-3 mt-0">
                    <label for="numAmbiente" class="form-label">Numero do Ambiente</label>
                    <input type="number" class="form-control mt-0 w-15" id="numAmbiente" name="numAmbiente" value="{{$recurso->numAmbiente}}">
                  </div>
                  <div class="mb-3 mt-0">
                    <label for="Hmax" class="form-label">Alunos Comportados</label>
                    <input type="number" class="form-control mt-0 w-15" id="Hmax" name="alunosComportados" value="{{$recurso->alunosComportados}}">
                  </div>

                
                </form>
              </div>
              <div class="col-12 d-flex align-items-center justify-content-around">
                <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.recursos')}}">VOLTAR</a>
                <input type="submit" form="formu" class="btn btn-primary col-5 text-uppercase">
              </div>
            </div>
        </div>
    </div>
@endsection