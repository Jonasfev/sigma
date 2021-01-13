@extends('admin.recursos._partials.nav')

@section('button')
<a type="button" class="btn btn-primary" href="{{Route('index')}}">
    LOGOUT
</a>
@endsection

@section('content')
<div class="pg-ctn d-flex align-items-center justify-content-around m-auto w-75">
    <div class="ctn-act align-items-center col-12">
        <a href="{{Route('cadastrar.admin')}}" class="act d-flex m-4 p-3 flex-column align-items-center">
            <img src="../img/cadastro.png" alt="Cadastrar Recurso" width="100vw" class="mt-3">
            <p class="my-3">CADASTRAR RECURSO</p>
        </a>
        <a href="editar.html" class="act d-flex m-4 p-3 flex-column align-items-center">
            <img src="../img/editar.png" alt="Editar Recurso" width="100vw" class="mt-3">
            <p class="my-3">RECURSOS</p>
        </a>
        <a href="{{Route ('turma.admin')}}" class="act d-flex m-4 p-3 flex-column align-items-center">
            <img src="../img/gerenciamento.png" alt="Criar Horário" width="100vw" class="mt-3">
            <p class="my-3">CRIAR HORÁRIO</p>
        </a>
        <a href="importar_exportar.html" class="act d-flex m-4 p-3 flex-column align-items-center">
            <img src="../img/transferencia-de-arquivo.png" alt="Importar e Exportar" width="100vw" class="mt-3">
            <p class="my-3">IMPORTAR / EXPORTAR</p>
        </a>
    </div>
</div>
    
@endsection