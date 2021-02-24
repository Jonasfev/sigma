@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')
{{-- janela de importar e exportar csv --}}
    <div class="pg-ctn w-100 d-flex flex-column align-items-center justify-content-center">
        <div class="ctn-act w-75 h-50 d-flex align-items-center justify-content-around">
            {{-- formulario para importar csv e enviá-lo --}}
            <form class="act d-flex w-25 flex-column align-items-center" action="{{route('admin.csv.create')}}" method="post" id="csvCreate" enctype="multipart/form-data">
                @csrf
                <label for="file" class="w-100 h-100 text-center" style="cursor: pointer" >
                    <img src="../img/importar.png" alt="Editar Recurso" width="100vw" class="mt-3">
                    <input type="file" name="csv" id="file" oninput="fileNameWrite();" style="display: none">
                    <p class="mt-3 mb-2">IMPORTAR</p>
                </label>
            </form>
            {{-- rota para exportar csv (download) --}}
            <a href="" class="act d-flex w-25 flex-column align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="../img/exportar.png" alt="Editar Recurso" width="100vw" class="mt-3">
                <p class="my-3">EXPORTAR</p>
            </a>
        </div>

        {{-- modal para informar o nome do csv antes de exportá-lo --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action= {{route('admin.csv.export')}} class="d-flex flex-column justify-content-center" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="fileName" class="form-label">Salvar como: </label>
                                <input type="text" class="form-control" name="fileName" aria-describedby="emailHelp" required>
                            </div> 
                            <button type="submit" class="btn btn-primary">DOWNLOAD</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- lista de erro caso haja --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="m-auto">
                @foreach ($errors->all() as $error)
                    <li class="mx-0">{{$error}}</li>  
                @endforeach
            </ul>
        </div>
        @endif
        <div id="fileName" class="text-uppercase font-weight-bold"></div>
        
        <div class="w-50 d-flex align-items-center justify-content-around mx-auto m-5">
            <a type="button" class="btn btn-secondary col-5" href="{{Route('home')}}">VOLTAR</a>
            <input type="submit" form="csvCreate" class="btn btn-primary col-5 text-uppercase">
        </div>
    </div>
@endsection