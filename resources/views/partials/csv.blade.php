@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')
    <div class="pg-ctn w-100 d-flex flex-column align-items-center justify-content-center">
        <div class="ctn-act w-75 h-50 d-flex align-items-center justify-content-around">
            <a href="#" class="act d-flex w-25 flex-column align-items-center">
                <img src="../img/importar.png" alt="Cadastrar Recurso" width="100vw" class="mt-3">
                <p class="my-3">IMPORTAR</p>
            </a>
            <form action="{{route('admin.csv.create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="csv" id ="file">
                <button type="submit">Enviar</button>
            </form>
        <a href="{{route('admin.csv.export')}}" class="act d-flex w-25 flex-column align-items-center">
                <img src="../img/exportar.png" alt="Editar Recurso" width="100vw" class="mt-3">
                <p class="my-3">EXPORTAR</p>
            </a>
        </div>
        <a type="button" class="btn btn-secondary m-lg-4" href="{{Route('admin.home')}}">VOLTAR</a>
    </div>
@endsection