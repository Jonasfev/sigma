@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')
{{-- menu com duas ações: Recursos e o Versionamento --}}
    <div class="pg-ctn d-flex align-items-center justify-content-around m-auto w-75">
        <div class="ctn-act align-items-center col-12">
            <a href="{{Route('admin.recursos', ['tipo' => 'uc'])}}" class="act d-flex m-4 p-3 flex-column align-items-center">
                <img src="../img/editar.png" alt="Editar Recurso" width="100vw" class="mt-3">
                <p class="my-3">RECURSOS</p>
            </a>
            <a href="{{Route('admin.csv')}}" class="act d-flex m-4 p-3 flex-column align-items-center">
                <img src="../img/transferencia-de-arquivo.png" alt="Importar e Exportar" width="100vw" class="mt-3">
                <p class="my-3">VERSIONAMENTO</p>
            </a>
        </div>
    </div>
@endsection