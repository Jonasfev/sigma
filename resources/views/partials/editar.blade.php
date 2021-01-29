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
                <form action="" class="w-100 h-100 d-flex flex-column align-items-center justify-content-around">
                  <input type="text" class="text-center" placeholder="Docente" readonly>
                  <input type="text" class="form-control">
                  <input type="text" class="form-control">
                  <input type="text" class="form-control">
                  <input type="text" class="form-control">
                  <input type="text" class="form-control">
                  <input type="text" class="form-control">
                </form>
              </div>
              <div class="col-12 d-flex align-items-center justify-content-around">
                <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.recursos')}}">VOLTAR</a>
                <button class="btn btn-primary col-5">SALVAR</button>
              </div>
            </div>
        </div>
    </div>
@endsection