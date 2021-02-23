@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1>Nova UC</h1>
        <div class="bd-example bd-example-tabs w-50 h-75">
            <form id="cadastrar-uc" action="{{route('admin.store', ['tipo' => 'uc'])}}" method="POST">
                @csrf
                <label class="mt-1 form-label" for="siglaUC">Sigla da UC</label>
                <input class="form-control" type="text" name="siglaUC">
                <label class="mt-1 form-label" for="nomeUC">Nome da UC</label>
                <input class="form-control" type="text" name="nomeUC">
                <input class="form-control" type="number" name="aulasSemanais" value='3' hidden>
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
            <div class="col-12 d-flex align-items-center justify-content-around mt-3">
                <a type="button" class="btn btn-secondary col-5" href="{{ Route('admin.recursos', ['tipo' => 'uc']) }}">VOLTAR</a>
            <button form="cadastrar-uc" class="btn btn-primary col-5">SALVAR</button>
            </div>
            </div>
        </div>
    </div>
@endsection