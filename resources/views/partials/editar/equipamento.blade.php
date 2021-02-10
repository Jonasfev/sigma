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
                <form action="{{Route('admin.update', ['id' => $recurso->id])}}" id="formu" class="w-100 h-100 d-flex flex-column  justify-content-around" method="POST">
                    @csrf
                    @method("PUT")
                  <div class="mb-3 mt-0">
                    <label for="" class="form-label text-uppercase">{{$tipo}}</label>
                    <input type="text" value="{{$tipo}}" id="tipo" name="tipo" hidden>
                  </div>
                  <div class="mb-3 mt-0">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control mt-0" id="nome" name= "Nome" value="{{$recurso->Nome}}">
                  </div>
                  <div class="mb-3 mt-0">
                    <label for="numPatrimonio" class="form-label">Numero do patrimonio</label>
                    <input type="number" class="form-control mt-0" id="numPatrimonio" name="numPatrimonio" value="{{$recurso->numPatrimonio}}">
                  </div>
                  
                </form>
              </div>
              <div class="col-12 d-flex align-items-center justify-content-around">
                <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.recursos')}}">VOLTAR</a>
                <button type="submit" form="formu" class="btn btn-primary col-5 text-uppercase">SALVAR</button>
              </div>
            </div>
        </div>
    </div>
@endsection