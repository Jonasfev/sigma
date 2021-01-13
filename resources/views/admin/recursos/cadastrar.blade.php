@extends('admin.recursos._partials.nav')

@section('button')
<a type="button" class="btn btn-primary" href="{{Route('index')}}">
    LOGOUT
</a>
@endsection

@section('content')
<div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
    <h1>Cadastrar</h1>
    <div class="bd-example bd-example-tabs w-50 h-75">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Recurso</a>
              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">UC</a>
              <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Curso</a>
            </div>
        </nav>
        <div class="tab-content overflow-auto" id="nav-tabContent">
          <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form action="" class="w-100 h-100 d-flex flex-column align-items-center justify-content-around">
              <select type="text" class="form-select">
                <option value="">Docente</option>
                <option value="">Ambiente</option>
                <option value="">Equipamento</option>
              </select>
              <input type="text" class="form-control">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
            </form>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <form action="" class="w-100 h-100 d-flex flex-column align-items-center justify-content-around">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
            </form>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <form action="" class="w-100 h-100 d-flex flex-column align-items-center justify-content-around">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
            </form>
          </div>
          <div class="col-12 d-flex align-items-center justify-content-around">
            <a type="button" class="btn btn-secondary col-5" href="{{ Route('home.admin') }}">VOLTAR</a>
            <button class="btn btn-primary col-5">SALVAR</button>
          </div>
        </div>
      </div>
</div>
    
@endsection
