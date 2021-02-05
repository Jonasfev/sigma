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
                <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    @foreach ($docentes as $docente)
                        <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                            <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                                <h4 class="m-0">{{$docente->Nome}}</h4>
                            <p class="m-0">{{$docente->Nome}} {{$docente->Sobrenome}}</p>
                            </div>
                            <div class="d-flex fit align-items-center justify-content-around">
                                <a href="{{route('admin.editar', ['tipo' => "docente",'id' => $docente->id])}}">
                                    <img src="../img/editar.png" alt="editar" width="32px" class="mx-2">
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exclude" onclick="modalExclude({{$docente->id}}, '{{$docente->Nome}}', '{{$docente->Sobrenome}}', 'docente');">
                                    <img src="../img/excluir.png" alt="excluir" width="32px" class="mx-2">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    @foreach ($ambientes as $ambiente)
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Ambiente Nº {{$ambiente->numAmbiente}}</h4>
                            <p class="m-0">{{$ambiente->Tipo}}</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="{{route('admin.editar', ['tipo' => "ambiente",'id' => $ambiente->id])}}">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exclude"  onclick="modalExclude({{$ambiente->id}}, '{{$ambiente->Tipo}}', '{{$ambiente->numAmbiente}}', 'ambiente')";>
                                <img src="../img/excluir.png" alt="excluir" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    @foreach ($equip as $item)          
                        <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                            <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">{{$item->Nome}}</h4>
                                <p class="m-0">{{$item->numPatrimonio}}</p>
                            </div>
                            <div class="d-flex fit align-items-center justify-content-around">
                                <a href="{{route('admin.editar', ['tipo' => "equipamento",'id' => $item->id])}}">
                                    <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exclude"  onclick="modalExclude({{$item->id}}, '{{$item->Nome}}', '{{$item->numPatrimonio}}', 'equipamento');"> 
                                    <img src="../img/excluir.png" alt="excluir" width="32px" class="mx-2">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-50 d-flex align-items-center justify-content-around mx-auto mt-5">
                <a type="button" class="btn btn-secondary col-6" href="{{Route('admin.home')}}">VOLTAR</a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exclude" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content w-75">
                <div class="modal-header text-uppercase">
                    Excluir
                </div>
                <div class="modal-body text-center" id="msgExclude">
                </div>
                <form action="{{route('admin.deletar')}}" id="formExclude">
                    @csrf
                    <input type="text" name="tipo" id="tipoRecurso" hidden>
                    <input type="text" name="id" id="idRecurso" hidden>
                </form>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary mx-auto mb-2 col-4" data-bs-dismiss="modal">Não</button>
                    <button type="submit" form="formExclude" id="btnExclude" class="btn btn-primary mx-auto mb-2 col-4">Sim</button>
                </div>
            </div>
        </div>
    </div>
@endsection