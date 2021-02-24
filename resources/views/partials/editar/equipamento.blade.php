@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')

  {{-- formulario de edição do equipamento --}}
  <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
      <h1 class="mt-5">Editar</h1>
      <div class="w-50 h-75 m-auto">
          <div class="tab-content overflow-auto" id="nav-tabContent">
            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <form action="{{Route('admin.update', ['id' => $recurso->id])}}" id="formu" class="w-100 h-100 d-flex flex-column  justify-content-around" method="POST">
                  @csrf
                  @method("PUT")
                <div class="mb-3 mt-0">
                  <input type="text" value="{{$tipo}}" id="tipo" name="tipo" hidden>
                </div>
                <div class="mb-3 mt-0">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control mt-0" id="nome" name= "Nome" value="{{$recurso->Nome}}">
                </div>
                <div class="mb-3 mt-0">
                  <label for="numPatrimonio" class="form-label">Numero do patrimonio</label>
                  <input type="number" class="form-control mt-0" id="numPatrimonio" name="numPatrimonio" value="{{$recurso->numPatrimonio}}" placeholder="Max: 10 caracteres">
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
            </div>
            <div class="col-12 d-flex align-items-center justify-content-around">
              <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.recursos', ['tipo' => 'equips'])}}">VOLTAR</a>
              <button type="submit" form="formu" class="btn btn-primary col-5 text-uppercase">SALVAR</button>
            </div>
          </div>
      </div>
  </div>
@endsection