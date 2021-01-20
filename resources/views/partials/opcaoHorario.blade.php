@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')
    <div class="pg-ctn w-100 d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-center m-2">Selecionar Curso</h1>
        <div class="ctn-act w-75 h-50 d-flex align-items-center justify-content-around">
            <a href="{{Route('admin.turmaTec')}}" class="act d-flex w-25 flex-column align-items-center">
                <p class="my-3 font-weight-bold h1">TÉCNICO</p>
            </a>
            <a href="{{Route('admin.turmaCai')}}" class="act d-flex w-25 flex-column align-items-center">
                <p class="my-3 font-weight-bold h1">CAI</p>
            </a>
        </div>
        <div class="w-50 d-flex align-items-center justify-content-around mx-auto m-5">
            <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.home')}}">VOLTAR</a>
        </div>
    </div>
@endsection