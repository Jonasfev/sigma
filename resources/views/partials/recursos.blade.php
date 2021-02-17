@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex h-80 flex-column align-items-center justify-content-start">
        <h1 class="mt-3">Recursos</h1>
        <div class="bd-example bd-example-tabs w-50 h-50 mt-5">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active show" id="nav-uc-tab" data-toggle="tab" href="#nav-uc" role="tab" aria-controls="nav-uc" aria-selected="false">UC</a>
                    <a class="nav-item nav-link" id="nav-doc-tab" data-toggle="tab" href="#nav-doc" role="tab" aria-controls="nav-doc" aria-selected="false">Docentes</a>
                    <a class="nav-item nav-link" id="nav-amb-tab" data-toggle="tab" href="#nav-amb" role="tab" aria-controls="nav-amb" aria-selected="false">Ambientes</a>
                    <a class="nav-item nav-link" id="nav-eqp-tab" data-toggle="tab" href="#nav-eqp" role="tab" aria-controls="nav-eqp" aria-selected="false">Equipamentos</a>
                    <a class="nav-item nav-link" id="nav-curso-tab" data-toggle="tab" href="#nav-curso" role="tab" aria-controls="nav-curso" aria-selected="false">Curso</a>
                    <a class="nav-item nav-link" id="nav-turma-tab" data-toggle="tab" href="#nav-turma" role="tab" aria-controls="nav-turma" aria-selected="false">Turma</a>
                </div>
            </nav>
            <div class="tab-content overflow-auto h-100" id="nav-tabContent">
                <div class="tab-pane fade" id="nav-doc" role="tabpanel" aria-labelledby="nav-doc-tab">
                    <a href="{{route('admin.cadastrar', ['tipo'=>"docente"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="img/add.png" class="mr-2">
                        Adicionar docente
                    </a>
                    @foreach ($docentes as $docente)
                        <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                            <div class="p-2 d-flex flex-column justify-content-around flex-fill" data-bs-toggle="modal" onclick="showSchedule({{$docente->id}}, 'docente')" data-bs-target="#recurso">
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
                
                <div class="tab-pane fade" id="nav-amb" role="tabpanel" aria-labelledby="nav-amb-tab">
                    
                    <a href="{{route('admin.cadastrar', ['tipo'=>"ambiente"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="img/add.png" class="mr-2">
                        Adicionar ambiente
                    </a>
                    @foreach ($ambientes as $ambiente)
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill" onclick="showSchedule({{$ambiente->id}}, 'ambiente')" data-bs-toggle="modal" data-bs-target="#recurso">
                            <h4 class="m-0">Ambiente Nº {{$ambiente->numAmbiente}}</h4>
                            <p class="m-0">{{$ambiente->Tipo}} - {{$ambiente->numAmbiente}}</p>
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
                <div class="tab-pane fade" id="nav-eqp" role="tabpanel" aria-labelledby="nav-eqp-tab">
                    <a href="{{route('admin.cadastrar', ['tipo'=>"equipamento"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="img/add.png" class="mr-2">
                        Adicionar equipamento
                    </a>
                    @foreach ($equip as $item)          
                        <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                            <div class="p-2 d-flex flex-column justify-content-around flex-fill" onclick="showSchedule({{$item->id}}, 'equipamento')" data-bs-toggle="modal" data-bs-target="#recurso">
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
                <div class="tab-pane fade active show" id="nav-uc" role="tabpanel" aria-labelledby="nav-uc-tab">
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exclude"  onclick="modalExclude({{$uc->id}}, '{{$uc->siglaUC}}', '{{$uc->nomeUC}}', 'uc')";>
                                    <img src="../img/excluir.png" alt="excluir" width="32px" class="mx-2">
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exclude" onclick="modalExclude({{$curso->id}}, '{{$curso->siglaCurso}}', '{{$curso->nomeCurso}}', 'curso')">
                                    <img src="../img/excluir.png" alt="excluir" width="32px" class="mx-2">
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
                    @foreach ($turmas as $t)          
                        <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                            <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">{{$t->siglaTurma}}</h4>
                            <p class="m-0 text-capitalize">@if ($t->periodo == "manha")
                                Manhã
                            @else
                                {{$t->periodo}}
                            @endif</p>
                            </div>
                            <div class="d-flex fit align-items-center justify-content-around">
                                <a href="{{route('admin.horario', ['id' => $t->id])}}">
                                    <img src="img/horario.png" alt="editar" width="32px" class="mx-2">
                                </a>
                                <a href="{{route('admin.editar', ['tipo' => "turma",'id' => $t->id])}}">
                                    <img src="img/editar.png" alt="editar" width="32px" class="mx-2">
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exclude" onclick="modalExclude({{$t->id}}, '{{$t->siglaTurma}}', '{{$t->periodo}}', 'turma')">
                                    <img src="../img/excluir.png" alt="excluir" width="32px" class="mx-2">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-50 d-flex align-items-center justify-content-around mx-auto mt-5">
                <a type="button" class="btn btn-secondary col-6" href="{{Route('home')}}">VOLTAR</a>
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
                <form action="{{route('admin.deletar')}}" id="formExclude" method="POST">
                    @method('DELETE')
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

    <div class="modal fade" id="recurso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content h-50 w-100">
                <div class="modal-body">
                    <div class="bd-example bd-example-tabs">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active show" id="nav-seg-tab" data-toggle="tab" href="#nav-seg" role="tab" aria-controls="nav-seg" aria-selected="false">Seg</a>
                                <a class="nav-item nav-link" id="nav-ter-tab" data-toggle="tab" href="#nav-ter" role="tab" aria-controls="nav-ter" aria-selected="false">Ter</a>
                                <a class="nav-item nav-link" id="nav-qua-tab" data-toggle="tab" href="#nav-qua" role="tab" aria-controls="nav-qua" aria-selected="false">Qua</a>
                                <a class="nav-item nav-link" id="nav-qui-tab" data-toggle="tab" href="#nav-qui" role="tab" aria-controls="nav-qui" aria-selected="false">Qui</a>
                                <a class="nav-item nav-link" id="nav-sex-tab" data-toggle="tab" href="#nav-sex" role="tab" aria-controls="nav-sex" aria-selected="false">Sex</a>
                            </div>
                        </nav>
                        <div class="tab-content h-100" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-seg" role="tabpanel" aria-labelledby="nav-seg-tab">
                                @for($i=0; $i<15; $i++)
                                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                                            <h4 class="m-0" id="seg-aula-{{$i}}">Aula @if($i < 5) {{$i+1}} - Manhã @elseif($i < 10) {{$i-4}} - Tarde @elseif($i < 15) {{$i-9}} - Noite @endif - Disponivel</h4>
                                        <p class="m-0">Não alocado</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            
                            <div class="tab-pane fade" id="nav-ter" role="tabpanel" aria-labelledby="nav-ter-tab">
                                @for($i=0; $i<15; $i++)
                                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                                            <h4 class="m-0" id="ter-aula-{{$i}}">Aula @if($i < 5) {{$i+1}} - Manhã @elseif($i < 10) {{$i-4}} - Tarde @elseif($i < 15) {{$i-9}} - Noite @endif - Disponivel</h4>
                                        <p class="m-0">Não alocado</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <div class="tab-pane fade" id="nav-qua" role="tabpanel" aria-labelledby="nav-qua-tab">
                                @for($i=0; $i<15; $i++)
                                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                                            <h4 class="m-0" id="qua-aula-{{$i}}">Aula @if($i < 5) {{$i+1}} - Manhã @elseif($i < 10) {{$i-4}} - Tarde @elseif($i < 15) {{$i-9}} - Noite @endif - Disponivel</h4>
                                        <p class="m-0">Não alocado</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <div class="tab-pane fade" id="nav-qui" role="tabpanel" aria-labelledby="nav-qui-tab">
                                @for($i=0; $i<15; $i++)
                                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                                            <h4 class="m-0" id="qui-aula-{{$i}}">Aula @if($i < 5) {{$i+1}} - Manhã @elseif($i < 10) {{$i-4}} - Tarde @elseif($i < 15) {{$i-9}} - Noite @endif - Disponivel</h4>
                                        <p class="m-0">Não alocado</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <div class="tab-pane fade" id="nav-sex" role="tabpanel" aria-labelledby="nav-sex-tab">
                                @for($i=0; $i<15; $i++)
                                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                                            <h4 class="m-0" id="sex-aula-{{$i}}">Aula @if($i < 5) {{$i+1}} - Manhã @elseif($i < 10) {{$i-4}} - Tarde @elseif($i < 15) {{$i-9}} - Noite @endif - Disponivel</h4>
                                        <p class="m-0">Não alocado</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showSchedule(id, tipoRecurso){
            console.log(id, tipoRecurso);

            const request = $.ajax({
                url: "/recursos/show/"+id+'/'+tipoRecurso,
                dataType: 'json',
                type: "get",
                
                error: function(response) {
                    console.log('error', response);
                },
                success: function(response) {
                    for(var reservas in response['agenda']){
                        console.log(response['agenda'][reservas]);
                    }
                }
            
            }); 
        }
</script>
@endsection