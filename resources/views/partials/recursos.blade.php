@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1 class="mt-3">Recursos</h1>
        <div class="bd-example bd-example-tabs w-50 h-30 flex-fill mt-5">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active show" id="nav-doc-tab" data-toggle="tab" href="#nav-doc" role="tab" aria-controls="nav-doc" aria-selected="true">Docentes</a>
                <a class="nav-item nav-link" id="nav-amb-tab" data-toggle="tab" href="#nav-amb" role="tab" aria-controls="nav-amb" aria-selected="false">Ambientes</a>
                <a class="nav-item nav-link" id="nav-eqp-tab" data-toggle="tab" href="#nav-eqp" role="tab" aria-controls="nav-eqp" aria-selected="false">Equipamentos</a>
                <a class="nav-item nav-link" id="nav-uc-tab" data-toggle="tab" href="#nav-uc" role="tab" aria-controls="nav-uc" aria-selected="false">UC</a>
                <a class="nav-item nav-link" id="nav-curso-tab" data-toggle="tab" href="#nav-curso" role="tab" aria-controls="nav-curso" aria-selected="false">Curso</a>
                <a class="nav-item nav-link" id="nav-turma-tab" data-toggle="tab" href="#nav-turma" role="tab" aria-controls="nav-turma" aria-selected="false">Turma</a>
                </div>
            </nav>
            <div class="h-50 tab-content overflow-auto" id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-doc" role="tabpanel" aria-labelledby="nav-doc-tab">
                    <a href="{{route('admin.cadastrar', ['tipo'=>"docente"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="img/add.png" class="mr-2">
                        Adicionar docente
                    </a>
                    @foreach ($docentes as $docente)
                        <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                            <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                                <h4 class="m-0">{{$docente->Nome}} </h4>
                            <p class="m-0">{{$docente->Nome}} {{$docente->Sobrenome}}</p>
                            </div>
                            <div class="d-flex fit align-items-center justify-content-around">
                                <a href="{{route('admin.editar', ['tipo' => "docente",'id' => $docente->id])}}">
                                    <img src="../img/editar.png" alt="editar" width="32px" class="mx-2">
                                </a>
                                <a href="{{route('admin.deletar', ['tipo' => "docente",'id' => $docente->id])}}">
                                    <img src="../img/excluir.png" alt="editar" width="32px" class="mx-2">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="tab-pane fade" id="nav-amb" role="tabpanel" aria-labelledby="nav-amb-tab">
                    
                    <a href="{{route('admin.cadastrar', ['tipo'=>"ambiente"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="img/add.png" class="mr-2">
                        Adicionar ambiente
                    </a>
                    @foreach ($ambientes as $ambiente)
                        
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">Ambiente Nº {{$ambiente->numAmbiente}}</h4>
                            <p class="m-0">{{$ambiente->Tipo}} - {{$ambiente->numAmbiente}}</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="{{route('admin.editar', ['tipo' => "ambiente",'id' => $ambiente->id])}}">
                                <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="{{route('admin.deletar', ['tipo' => "ambiente",'id' => $ambiente->id])}}" >
                                <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="nav-eqp" role="tabpanel" aria-labelledby="nav-eqp-tab">
                    <a href="{{route('admin.cadastrar', ['tipo'=>"equipamento"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="img/add.png" class="mr-2">
                        Adicionar equipamento
                    </a>
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
                                <a href="{{route('admin.deletar', ['tipo' => "equipamento",'id' => $item->id])}}">
                                    <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="nav-uc" role="tabpanel" aria-labelledby="nav-uc-tab">
                    <a href="{{route('admin.cadastrar', ['tipo'=>"uc"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="img/add.png" class="mr-2">
                        Adicionar uc
                    </a>
                    @foreach ($ucs as $uc)          
                        <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                            <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">{{$uc->siglaUC}}</h4>
                                <p class="m-0">{{$uc->nomeUC}}</p>
                            </div>
                            <div class="d-flex fit align-items-center justify-content-around">
                                <a href="{{route('admin.editar', ['tipo' => "uc",'id' => $uc->id])}}">
                                    <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                                </a>
                                <a href="{{route('admin.deletar', ['tipo' => "uc",'id' => $uc->id])}}">
                                    <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="nav-curso" role="tabpanel" aria-labelledby="nav-curso-tab">
                    <a href="{{route('admin.cadastrar', ['tipo'=>"curso"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="img/add.png" class="mr-2">
                        Adicionar curso
                    </a>
                    @foreach ($cursos as $curso)          
                        <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                            <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">{{$curso->siglaCurso}}</h4>
                                <p class="m-0">{{$curso->nomeCurso}}</p>
                            </div>
                            <div class="d-flex fit align-items-center justify-content-around">
                                <a href="{{route('admin.editar', ['tipo' => "curso",'id' => $curso->id])}}">
                                    <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                                </a>
                                <a href="{{route('admin.deletar', ['tipo' => "curso",'id' => $curso->id])}}">
                                    <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="tab-pane fade" id="nav-turma" role="tabpanel" aria-labelledby="nav-turma-tab">
                    <a href="{{route('admin.cadastrar', ['tipo'=>"turma"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="img/add.png" class="mr-2">
                        Adicionar turma
                    </a>
                    @foreach ($turmas as $turma)          
                        <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                            <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">{{$turma->siglaTurma}}</h4>
                                <p class="m-0">curso da turma</p>
                            </div>
                            <div class="d-flex fit align-items-center justify-content-around">
                                <a href="{{route('admin.editar', ['tipo' => "turma",'id' => $turma->id])}}">
                                    <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                                </a>
                                <a href="{{route('admin.deletar', ['tipo' => "turma",'id' => $turma->id])}}">
                                    <img src="img/excluir.png" alt="editar" width="32px" class="mx-2">
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
            <div class="modal-content w-50">
                <div class="modal-body">
                    <P>Realmente deseja excluir o recurso  xxxxx</P>
                    <a href = "" type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" >Com certeza</a>
                    <a type="submit" class="btn btn-secondary">Obviamente não</a>
                </div>
            </div>
        </div>
    </div>
@endsection