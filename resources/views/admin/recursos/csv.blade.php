@extends('admin.recursos._partials.nav')


@section('button')
<a type="button" class="btn btn-primary" href="{{Route('index')}}">
    LOGOUT
</a>
@endsection

@section('content')

<div class="pg-ctn d-flex flex-column align-items-center justify-content-center m-auto w-75">
    <div class="ctn-act align-items-center col-12">
        <a href="#" class="act d-flex m-4 p-3 flex-column align-items-center">
            <img src="../img/importar.png" alt="Cadastrar Recurso" width="100vw" class="mt-3">
            <p class="my-3">IMPORTAR</p>
        </a>
        <a href="#" class="act d-flex m-4 p-3 flex-column align-items-center">
            <img src="../img/exportar.png" alt="Editar Recurso" width="100vw" class="mt-3">
            <p class="my-3">EXPORTAR</p>
        </a>
    </div>
    <div class="col-3 d-flex justify-content-center mt-5">
        <a type="button" class="btn btn-secondary col-5" href="{{Route('home.admin')}}">VOLTAR</a>
    </div>
</div>
    
@endsection