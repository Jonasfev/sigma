@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')
    <div class="pg-ctn w-100 d-flex flex-column align-items-center justify-content-center">
        <div class="ctn-act w-75 h-50 d-flex align-items-center justify-content-around">
            <form class="act d-flex w-25 flex-column align-items-center" action="{{route('admin.csv.create')}}" method="post" id="test" enctype="multipart/form-data">
                @csrf
                {{-- <img src="../img/importar.png" alt="Cadastrar Recurso" width="100vw" class="mt-3"> --}}
                <label for="file" class="w-100 h-100 text-center" style="cursor: pointer" >
                    <img src="../img/importar.png" alt="Editar Recurso" width="100vw" class="mt-3">
                    <input type="file" name="csv" id="file" oninput="fileNameWrite();" style="display: none">
                    <p class="mt-3 mb-2">IMPORTAR</p>
                </label>
            </form>

           
            <a href="" class="act d-flex w-25 flex-column align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="../img/exportar.png" alt="Editar Recurso" width="100vw" class="mt-3">
                <p class="my-3">EXPORTAR</p>
            </a>
        </div>
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
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                    
                @endforeach
            </ul>
        </div>
    @endif
        <div id="fileName" class="text-uppercase font-weight-bold"></div>
        
        <div class="w-50 d-flex align-items-center justify-content-around mx-auto m-5">
            <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.home')}}">VOLTAR</a>
            <input type="submit" form="test" class="btn btn-primary col-5 text-uppercase">
        </div>
    </div>
@endsection