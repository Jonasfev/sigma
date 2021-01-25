@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1 class="mt-3">Recursos</h1>
        <div class="bd-example bd-example-tabs w-50 h-45 flex-fill mt-5">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Docentes</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Ambientes</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Equipamentos</a>
                </div>
            </nav>
            <div class="h-75 tab-content overflow-auto" id="nav-tabContent">
                <div class="tab-pane h-100 fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Kleber</h4>
                            <p class="m-0">Kleber Gelli</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="{{Route('admin.editar')}}">
                                <img src="../img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="{{Route('admin.editar')}}">
                                <img src="../img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Kleber</h4>
                            <p class="m-0">Kleber Gelli</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Kleber</h4>
                            <p class="m-0">Kleber Gelli</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Kleber</h4>
                            <p class="m-0">Kleber Gelli</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Kleber</h4>
                            <p class="m-0">Kleber Gelli</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane h-100 fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Lab-64</h4>
                            <p class="m-0">Laboratório de informática</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Lab-64</h4>
                            <p class="m-0">Laboratório de informática</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Lab-64</h4>
                            <p class="m-0">Laboratório de informática</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Lab-64</h4>
                            <p class="m-0">Laboratório de informática</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Lab-64</h4>
                            <p class="m-0">Laboratório de informática</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane h-100 fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Cabeçote</h4>
                            <p class="m-0">1321321321321</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Cabeçote</h4>
                            <p class="m-0">1321321321321</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Cabeçote</h4>
                            <p class="m-0">1321321321321</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Cabeçote</h4>
                            <p class="m-0">1321321321321</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Cabeçote</h4>
                            <p class="m-0">1321321321321</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Cabeçote</h4>
                            <p class="m-0">1321321321321</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="">
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-50 d-flex align-items-center justify-content-around mx-auto mt-5">
                <a type="button" class="btn btn-secondary col-6" href="{{Route('admin.home')}}">VOLTAR</a>
            </div>
        </div>
    </div>
@endsection