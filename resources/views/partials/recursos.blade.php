@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')
{{-- mostra os recursos geral(para cadastro, edição e deletar) --}}
    <div class="pg-ctn bg-light d-flex h-80 flex-column align-items-center justify-content-start">
        <h1 class="mt-3">Recursos</h1>
        <div class="bd-example bd-example-tabs w-50 h-50 mt-5">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a  @if ($tipo == 'uc')
                    class="nav-item nav-link active show"
                    @else
                    class="nav-item nav-link"
                @endif  id="nav-uc-tab" data-toggle="tab" href="#nav-uc" role="tab" aria-controls="nav-uc" aria-selected="false">UC</a>
                    <a @if ($tipo == 'docente')
                    class="nav-item nav-link active show"
                    @else
                    class="nav-item nav-link"
                @endif id="nav-doc-tab" data-toggle="tab" href="#nav-doc" role="tab" aria-controls="nav-doc" aria-selected="true">Docentes</a>
                    <a @if ($tipo == 'ambiente')
                    class="nav-item nav-link active show"
                    @else
                    class="nav-item nav-link"
                @endif id="nav-amb-tab" data-toggle="tab" href="#nav-amb" role="tab" aria-controls="nav-amb" aria-selected="false">Ambientes</a>
                    <a @if ($tipo == 'equips')
                    class="nav-item nav-link active show"
                    @else
                    class="nav-item nav-link"
                @endif id="nav-eqp-tab" data-toggle="tab" href="#nav-eqp" role="tab" aria-controls="nav-eqp" aria-selected="false">Equipamentos</a>
                    <a @if ($tipo == 'curso')
                    class="nav-item nav-link active show"
                    @else
                    class="nav-item nav-link"
                @endif id="nav-curso-tab" data-toggle="tab" href="#nav-curso" role="tab" aria-controls="nav-curso" aria-selected="false">Curso</a>
                    <a @if ($tipo == 'turma')
                    class="nav-item nav-link active show"
                    @else
                    class="nav-item nav-link"
                @endif id="nav-turma-tab" data-toggle="tab" href="#nav-turma" role="tab" aria-controls="nav-turma" aria-selected="false">Turma</a>
                </div>
            </nav>
            <div class="tab-content overflow-auto h-100" id="nav-tabContent">
                <div @if ($tipo == 'docente')
                class="tab-pane fade active show"
                @else
                class="tab-pane fade"
            @endif id="nav-doc" role="tabpanel" aria-labelledby="nav-doc-tab">
                    <a href="{{route('admin.cadastrar', ['tipo'=>"docente"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="/img/add.png" class="mr-2">
                        Adicionar docente
                    </a>
                    <form action="{{route('admin.search', ['tipo' => 'docente'])}}" method="POST" class="w-50 d-flex flex-column mx-auto align-items-center justify-content-center">
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            @csrf
                            <input name="nome" type="search" class="form-control"
                            @if ($pesq)
                            value="{{$param}}"
                            @endif
                            >
                            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center">
                                <img src="../img/search.png" alt="pesquisar">
                            </button>
                        </div>
                        @if ($pesq)
                            <a class="mt-2 mx-auto text-decoration-none" href="{{Route('admin.recursos', ['tipo' => 'docente'])}}" type="button">Limpar Pesquisa</a>
                        @endif
                    </form>
                    @foreach ($docentes as $docente)
                        <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                            <div class="p-2 d-flex flex-column justify-content-around flex-fill" data-bs-toggle="modal" onclick="showSchedule({{$docente->id}}, 'docente')" data-bs-target="#recurso">
                                <h4 class="m-0">{{$docente->Nome}}</h4>
                            <p class="m-0">{{$docente->Nome}} {{$docente->Sobrenome}}</p>
                            </div>
                            <div class="d-flex fit align-items-center justify-content-around">
                                <a href="{{route('admin.editar', ['tipo' => "docente",'id' => $docente->id])}}">
                                    <img src="/img/editar.png" alt="editar" width="32px" class="mx-2">
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exclude" onclick="modalExclude({{$docente->id}}, '{{$docente->Nome}}', '{{$docente->Sobrenome}}', 'docente');">
                                    <img src="/img/excluir.png" alt="excluir" width="32px" class="mx-2">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div @if ($tipo == 'ambiente')
                class="tab-pane fade active show"
                @else
                class="tab-pane fade"
            @endif id="nav-amb" role="tabpanel" aria-labelledby="nav-amb-tab">
                    <a href="{{route('admin.cadastrar', ['tipo'=>"ambiente"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="/img/add.png" class="mr-2">
                        Adicionar ambiente
                    </a>
                    <form action="{{route('admin.search', ['tipo' => 'ambiente'])}}" method="POST" class="w-50 d-flex flex-column mx-auto align-items-center justify-content-center">
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            @csrf
                            <input name="nome" type="search" class="form-control"
                            @if ($pesq)
                            value="{{$param}}"
                            @endif
                            >
                            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center">
                                <img src="../img/search.png" alt="pesquisar">
                            </button>
                        </div>
                        @if ($pesq)
                            <a class="mt-2 mx-auto text-decoration-none" href="{{Route('admin.recursos', ['tipo' => 'ambiente'])}}" type="button">Limpar Pesquisa</a>
                        @endif
                    </form>
                    @foreach ($ambientes as $ambiente)
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill" onclick="showSchedule({{$ambiente->id}}, 'ambiente')" data-bs-toggle="modal" data-bs-target="#recurso">
                            <h4 class="m-0">Ambiente Nº {{$ambiente->numAmbiente}}</h4>
                            <p class="m-0">{{$ambiente->Tipo}} - {{$ambiente->numAmbiente}}</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="{{route('admin.editar', ['tipo' => "ambiente",'id' => $ambiente->id])}}">
                                <img src="/img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exclude"  onclick="modalExclude({{$ambiente->id}}, '{{$ambiente->Tipo}}', '{{$ambiente->numAmbiente}}', 'ambiente')";>
                                <img src="/img/excluir.png" alt="excluir" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div @if ($tipo == 'equips')
                class="tab-pane fade active show"
                @else
                class="tab-pane fade"
            @endif id="nav-eqp" role="tabpanel" aria-labelledby="nav-eqp-tab">
                    <a href="{{route('admin.cadastrar', ['tipo'=>"equipamento"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="/img/add.png" class="mr-2">
                        Adicionar equipamento
                    </a>
                    <form action="{{route('admin.search', ['tipo' => 'equips'])}}" method="POST" class="w-50 d-flex flex-column mx-auto align-items-center justify-content-center">
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            @csrf
                            <input name="nome" type="search" class="form-control"
                            @if ($pesq)
                            value="{{$param}}"
                            @endif
                            >
                            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center">
                                <img src="../img/search.png" alt="pesquisar">
                            </button>
                        </div>
                        @if ($pesq)
                            <a class="mt-2 mx-auto text-decoration-none" href="{{Route('admin.recursos', ['tipo' => 'equips'])}}" type="button">Limpar Pesquisa</a>
                        @endif
                    </form>
                    @foreach ($equips as $item)
                        <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                            <div class="p-2 d-flex flex-column justify-content-around flex-fill" onclick="showSchedule({{$item->id}}, 'equipamento')" data-bs-toggle="modal" data-bs-target="#recurso">
                            <h4 class="m-0">{{$item->Nome}}</h4>
                                <p class="m-0">{{$item->numPatrimonio}}</p>
                            </div>
                            <div class="d-flex fit align-items-center justify-content-around">
                                <a href="{{route('admin.editar', ['tipo' => "equips",'id' => $item->id])}}">
                                    <img src="/img/editar.png" alt="editar" width="32px" class="mx-2">
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exclude"  onclick="modalExclude({{$item->id}}, '{{$item->Nome}}', '{{$item->numPatrimonio}}', 'equipamento');"> 
                                    <img src="/img/excluir.png" alt="excluir" width="32px" class="mx-2">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div @if ($tipo == 'uc')
                class="tab-pane fade active show"
                @else
                class="tab-pane fade"
            @endif id="nav-uc" role="tabpanel" aria-labelledby="nav-uc-tab">
                    <a href="{{route('admin.cadastrar', ['tipo'=>"uc"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="/img/add.png" class="mr-2">
                        Adicionar uc
                    </a>
                    <form action="{{route('admin.search', ['tipo' => 'uc'])}}" method="POST" class="w-50 d-flex flex-column mx-auto align-items-center justify-content-center">
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            @csrf
                            <input name="nome" type="search" class="form-control"
                            @if ($pesq)
                            value="{{$param}}"
                            @endif
                            >
                            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center">
                                <img src="../img/search.png" alt="pesquisar">
                            </button>
                        </div>
                        @if ($pesq)
                            <a class="mt-2 mx-auto text-decoration-none" href="{{Route('admin.recursos', ['tipo' => 'uc'])}}" type="button">Limpar Pesquisa</a>
                        @endif
                    </form>
                    @for ($cont = 0; $cont < sizeOf($ucs); $cont++)          
                    <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                        <h4 class="m-0">{{$ucs[$cont]->siglaUC}}</h4>
                            <p class="m-0">{{$ucsNome[$cont]->nomeUC}}</p>
                        </div>
                        <div class="d-flex fit align-items-center justify-content-around">
                            <a href="{{route('admin.editar', ['tipo' => "uc",'id' => $ucs[$cont]->id])}}">
                                <img src="/img/editar.png" alt="editar" width="32px" class="mx-2">
                            </a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exclude"  onclick="modalExclude({{$ucs[$cont]->id}}, '{{$ucs[$cont]->siglaUC}}', '{{$ucs[$cont]->nomeUC}}', 'uc')";>
                                <img src="/img/excluir.png" alt="excluir" width="32px" class="mx-2">
                            </a>
                        </div>
                    </div>
                    @endfor
                </div>
                <div @if ($tipo == 'curso')
                class="tab-pane fade active show"
                @else
                class="tab-pane fade"
            @endif id="nav-curso" role="tabpanel" aria-labelledby="nav-curso-tab">
                    <a href="{{route('admin.cadastrar', ['tipo'=>"curso"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="/img/add.png" class="mr-2">
                        Adicionar curso
                    </a>
                    <form action="{{route('admin.search', ['tipo' => 'curso'])}}" method="POST" class="w-50 d-flex flex-column mx-auto align-items-center justify-content-center">
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            @csrf
                            <input name="nome" type="search" class="form-control"
                            @if ($pesq)
                            value="{{$param}}"
                            @endif
                            >
                            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center">
                                <img src="../img/search.png" alt="pesquisar">
                            </button>
                        </div>
                        @if ($pesq)
                            <a class="mt-2 mx-auto text-decoration-none" href="{{Route('admin.recursos', ['tipo' => 'curso'])}}" type="button">Limpar Pesquisa</a>
                        @endif
                    </form>
                    @foreach ($cursos as $curso)          
                        <div class="border border-secondary rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                            <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                            <h4 class="m-0">{{$curso->siglaCurso}}</h4>
                                <p class="m-0">{{$curso->nomeCurso}}</p>
                            </div>
                            <div class="d-flex fit align-items-center justify-content-around">
                                <a href="{{route('admin.editar', ['tipo' => "curso",'id' => $curso->id])}}">
                                    <img src="/img/editar.png" alt="editar" width="32px" class="mx-2">
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exclude" onclick="modalExclude({{$curso->id}}, '{{$curso->siglaCurso}}', '{{$curso->nomeCurso}}', 'curso')">
                                    <img src="/img/excluir.png" alt="excluir" width="32px" class="mx-2">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div @if ($tipo == 'turma')
                class="tab-pane fade active show"
                @else
                class="tab-pane fade"
            @endif id="nav-turma" role="tabpanel" aria-labelledby="nav-turma-tab">
                    <a href="{{route('admin.cadastrar', ['tipo'=>"turma"])}}" class="d-flex align-items-center justify-content-center mt-3">
                        <img src="/img/add.png" class="mr-2">
                        Adicionar turma
                    </a>
                    <form action="{{route('admin.search', ['tipo' => 'turma'])}}" method="POST" class="w-50 d-flex flex-column mx-auto align-items-center justify-content-center">
                        <div class="w-100 d-flex align-items-center justify-content-center">
                            @csrf
                            <input name="nome" type="search" class="form-control"
                            @if ($pesq)
                            value="{{$param}}"
                            @endif
                            >
                            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center">
                                <img src="../img/search.png" alt="pesquisar">
                            </button>
                        </div>
                        @if ($pesq)
                            <a class="mt-2 mx-auto text-decoration-none" href="{{Route('admin.recursos', ['tipo' => 'turma'])}}" type="button">Limpar Pesquisa</a>
                        @endif
                    </form>
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
                                    <img src="/img/horario.png" alt="editar" width="32px" class="mx-2">
                                </a>
                                <a href="{{route('admin.editar', ['tipo' => "turma",'id' => $t->id])}}">
                                    <img src="/img/editar.png" alt="editar" width="32px" class="mx-2">
                                </a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exclude" onclick="modalExclude({{$t->id}}, '{{$t->siglaTurma}}', '{{$t->periodo}}', 'turma')">
                                    <img src="/img/excluir.png" alt="excluir" width="32px" class="mx-2">
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

    {{-- modal para exclusão do recurso --}}
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

    {{-- modal para a visualização de recurso alocado ou não --}}
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
                                    <div class="border border-success shadow rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                                            <h4 class="m-0" id="seg-aula-{{$i}}">Aula @if($i < 5) {{$i+1}} - Manhã @elseif($i < 10) {{$i-4}} - Tarde @elseif($i < 15) {{$i-9}} - Noite @endif - Disponivel</h4>
                                        <p class="m-0">Não alocado</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            
                            <div class="tab-pane fade" id="nav-ter" role="tabpanel" aria-labelledby="nav-ter-tab">
                                @for($i=0; $i<15; $i++)
                                    <div class="border border-success shadow rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                                            <h4 class="m-0" id="ter-aula-{{$i}}">Aula @if($i < 5) {{$i+1}} - Manhã @elseif($i < 10) {{$i-4}} - Tarde @elseif($i < 15) {{$i-9}} - Noite @endif - Disponivel</h4>
                                        <p class="m-0">Não alocado</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <div class="tab-pane fade" id="nav-qua" role="tabpanel" aria-labelledby="nav-qua-tab">
                                @for($i=0; $i<15; $i++)
                                    <div class="border border-success shadow rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                                            <h4 class="m-0" id="qua-aula-{{$i}}">Aula @if($i < 5) {{$i+1}} - Manhã @elseif($i < 10) {{$i-4}} - Tarde @elseif($i < 15) {{$i-9}} - Noite @endif - Disponivel</h4>
                                        <p class="m-0">Não alocado</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <div class="tab-pane fade" id="nav-qui" role="tabpanel" aria-labelledby="nav-qui-tab">
                                @for($i=0; $i<15; $i++)
                                    <div class="border border-success shadow rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
                                        <div class="p-2 d-flex flex-column justify-content-around flex-fill">
                                            <h4 class="m-0" id="qui-aula-{{$i}}">Aula @if($i < 5) {{$i+1}} - Manhã @elseif($i < 10) {{$i-4}} - Tarde @elseif($i < 15) {{$i-9}} - Noite @endif - Disponivel</h4>
                                        <p class="m-0">Não alocado</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <div class="tab-pane fade" id="nav-sex" role="tabpanel" aria-labelledby="nav-sex-tab">
                                @for($i=0; $i<15; $i++)
                                    <div class="border border-success shadow rounded col-10 h-15 mt-4 mx-auto d-flex bg-light">
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
        //função para verificar e chamar o recurso alocado ou não
        function showSchedule(id, tipoRecurso){
            erase();

            const request = $.ajax({
                url: "/recursos/show/"+id+'/'+tipoRecurso,
                dataType: 'json',
                type: "get",
                
                error: function(response) {
                    console.log('error', response);
                },
                success: function(response) {
                    var sligaTurma;
                    for(var reservas in response['agenda']){
                        for(var turmas in response['turma']){
                            if(response['agenda'][reservas].idTurma == response['turma'][turmas].id){
                                siglaTurma = 'Já alocado na ' + response['turma'][turmas].siglaTurma;
                            }
                        }
                        switch(response['agenda'][reservas].diaSemana){
                            case 'Seg':
                                if(response['agenda'][reservas].periodo == 'manha'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#seg-aula-0').text("Aula 1 - Manhã - Indisponível");
                                            $('h4#seg-aula-0').next().text(siglaTurma);
                                            $('h4#seg-aula-0').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-0').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#seg-aula-1').text("Aula 2 - Manhã - Indisponível");
                                            $('h4#seg-aula-1').next().text(siglaTurma);
                                            $('h4#seg-aula-1').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-1').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#seg-aula-2').text("Aula 3 - Manhã - Indisponível");
                                            $('h4#seg-aula-2').next().text(siglaTurma);
                                            $('h4#seg-aula-2').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-2').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#seg-aula-3').text("Aula 4 - Manhã - Indisponível");
                                            $('h4#seg-aula-3').next().text(siglaTurma);
                                            $('h4#seg-aula-3').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-3').parent().parent().addClass("border-danger");
                                            break;
                                        case 5:
                                            $('h4#seg-aula-4').text("Aula 5 - Manhã - Indisponível");
                                            $('h4#seg-aula-4').next().text(siglaTurma);
                                            $('h4#seg-aula-4').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-4').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                } else if(response['agenda'][reservas].periodo == 'tarde'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#seg-aula-5').text("Aula 1 - Tarde - Indisponível");
                                            $('h4#seg-aula-5').next().text(siglaTurma);
                                            $('h4#seg-aula-5').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-5').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#seg-aula-6').text("Aula 2 - Tarde - Indisponível");
                                            $('h4#seg-aula-6').next().text(siglaTurma);
                                            $('h4#seg-aula-6').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-6').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#seg-aula-7').text("Aula 3 - Tarde - Indisponível");
                                            $('h4#seg-aula-7').next().text(siglaTurma);
                                            $('h4#seg-aula-7').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-7').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#seg-aula-8').text("Aula 4 - Tarde - Indisponível");
                                            $('h4#seg-aula-8').next().text(siglaTurma);
                                            $('h4#seg-aula-8').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-8').parent().parent().addClass("border-danger");
                                            
                                            break;
                                        case 5:
                                            $('h4#seg-aula-9').text("Aula 5 - Tarde - Indisponível");
                                            $('h4#seg-aula-9').next().text(siglaTurma);
                                            $('h4#seg-aula-9').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-9').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                } else if(response['agenda'][reservas].periodo == 'noite'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#seg-aula-10').text("Aula 1 - Noite - Indisponível");
                                            $('h4#seg-aula-10').next().text(siglaTurma);
                                            $('h4#seg-aula-10').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-10').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#seg-aula-11').text("Aula 2 - Noite - Indisponível");
                                            $('h4#seg-aula-11').next().text(siglaTurma);
                                            $('h4#seg-aula-11').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-11').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#seg-aula-12').text("Aula 3 - Noite - Indisponível");
                                            $('h4#seg-aula-12').next().text(siglaTurma);
                                            $('h4#seg-aula-12').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-12').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#seg-aula-13').text("Aula 4 - Noite - Indisponível");
                                            $('h4#seg-aula-13').next().text(siglaTurma);
                                            $('h4#seg-aula-13').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-13').parent().parent().addClass("border-danger");
                                            break;
                                        case 5:
                                            $('h4#seg-aula-14').text("Aula 5 - Noite - Indisponível");
                                            $('h4#seg-aula-14').next().text(siglaTurma);
                                            $('h4#seg-aula-14').parent().parent().removeClass("border-success");
                                            $('h4#seg-aula-14').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                }
                                break;

                            case 'Ter':
                            if(response['agenda'][reservas].periodo == 'manha'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#ter-aula-0').text("Aula 1 - Manhã - Indisponível");
                                            $('h4#ter-aula-0').next().text(siglaTurma);
                                            $('h4#ter-aula-0').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-0').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#ter-aula-1').text("Aula 2 - Manhã - Indisponível");
                                            $('h4#ter-aula-1').next().text(siglaTurma);
                                            $('h4#ter-aula-1').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-1').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#ter-aula-2').text("Aula 3 - Manhã - Indisponível");
                                            $('h4#ter-aula-2').next().text(siglaTurma);
                                            $('h4#ter-aula-2').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-2').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#ter-aula-3').text("Aula 4 - Manhã - Indisponível");
                                            $('h4#ter-aula-3').next().text(siglaTurma);
                                            $('h4#ter-aula-3').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-3').parent().parent().addClass("border-danger");
                                            break;
                                        case 5:
                                            $('h4#ter-aula-4').text("Aula 5 - Manhã - Indisponível");
                                            $('h4#ter-aula-4').next().text(siglaTurma);
                                            $('h4#ter-aula-4').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-4').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                } else if(response['agenda'][reservas].periodo == 'tarde'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#ter-aula-5').text("Aula 1 - Tarde - Indisponível");
                                            $('h4#ter-aula-5').next().text(siglaTurma);
                                            $('h4#ter-aula-5').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-5').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#ter-aula-6').text("Aula 2 - Tarde - Indisponível");
                                            $('h4#ter-aula-6').next().text(siglaTurma);
                                            $('h4#ter-aula-6').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-6').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#ter-aula-7').text("Aula 3 - Tarde - Indisponível");
                                            $('h4#ter-aula-7').next().text(siglaTurma);
                                            $('h4#ter-aula-7').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-7').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#ter-aula-8').text("Aula 4 - Tarde - Indisponível");
                                            $('h4#ter-aula-8').next().text(siglaTurma);
                                            $('h4#ter-aula-8').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-8').parent().parent().addClass("border-danger");
                                            
                                            break;
                                        case 5:
                                            $('h4#ter-aula-9').text("Aula 5 - Tarde - Indisponível");
                                            $('h4#ter-aula-9').next().text(siglaTurma);
                                            $('h4#ter-aula-9').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-9').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                } else if(response['agenda'][reservas].periodo == 'noite'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#ter-aula-10').text("Aula 1 - Noite - Indisponível");
                                            $('h4#ter-aula-10').next().text(siglaTurma);
                                            $('h4#ter-aula-10').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-10').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#ter-aula-11').text("Aula 2 - Noite - Indisponível");
                                            $('h4#ter-aula-11').next().text(siglaTurma);
                                            $('h4#ter-aula-11').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-11').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#ter-aula-12').text("Aula 3 - Noite - Indisponível");
                                            $('h4#ter-aula-12').next().text(siglaTurma);
                                            $('h4#ter-aula-12').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-12').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#ter-aula-13').text("Aula 4 - Noite - Indisponível");
                                            $('h4#ter-aula-13').next().text(siglaTurma);
                                            $('h4#ter-aula-13').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-13').parent().parent().addClass("border-danger");
                                            break;
                                        case 5:
                                            $('h4#ter-aula-14').text("Aula 5 - Noite - Indisponível");
                                            $('h4#ter-aula-14').next().text(siglaTurma);
                                            $('h4#ter-aula-14').parent().parent().removeClass("border-success");
                                            $('h4#ter-aula-14').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                }
                                break;
                            case 'Qua':
                            if(response['agenda'][reservas].periodo == 'manha'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#qua-aula-0').text("Aula 1 - Manhã - Indisponível");
                                            $('h4#qua-aula-0').next().text(siglaTurma);
                                            $('h4#qua-aula-0').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-0').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#qua-aula-1').text("Aula 2 - Manhã - Indisponível");
                                            $('h4#qua-aula-1').next().text(siglaTurma);
                                            $('h4#qua-aula-1').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-1').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#qua-aula-2').text("Aula 3 - Manhã - Indisponível");
                                            $('h4#qua-aula-2').next().text(siglaTurma);
                                            $('h4#qua-aula-2').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-2').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#qua-aula-3').text("Aula 4 - Manhã - Indisponível");
                                            $('h4#qua-aula-3').next().text(siglaTurma);
                                            $('h4#qua-aula-3').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-3').parent().parent().addClass("border-danger");
                                            break;
                                        case 5:
                                            $('h4#qua-aula-4').text("Aula 5 - Manhã - Indisponível");
                                            $('h4#qua-aula-4').next().text(siglaTurma);
                                            $('h4#qua-aula-4').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-4').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                } else if(response['agenda'][reservas].periodo == 'tarde'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#qua-aula-5').text("Aula 1 - Tarde - Indisponível");
                                            $('h4#qua-aula-5').next().text(siglaTurma);
                                            $('h4#qua-aula-5').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-5').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#qua-aula-6').text("Aula 2 - Tarde - Indisponível");
                                            $('h4#qua-aula-6').next().text(siglaTurma);
                                            $('h4#qua-aula-6').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-6').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#qua-aula-7').text("Aula 3 - Tarde - Indisponível");
                                            $('h4#qua-aula-7').next().text(siglaTurma);
                                            $('h4#qua-aula-7').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-7').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#qua-aula-8').text("Aula 4 - Tarde - Indisponível");
                                            $('h4#qua-aula-8').next().text(siglaTurma);
                                            $('h4#qua-aula-8').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-8').parent().parent().addClass("border-danger");
                                            
                                            break;
                                        case 5:
                                            $('h4#qua-aula-9').text("Aula 5 - Tarde - Indisponível");
                                            $('h4#qua-aula-9').next().text(siglaTurma);
                                            $('h4#qua-aula-9').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-9').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                } else if(response['agenda'][reservas].periodo == 'noite'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#qua-aula-10').text("Aula 1 - Noite - Indisponível");
                                            $('h4#qua-aula-10').next().text(siglaTurma);
                                            $('h4#qua-aula-10').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-10').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#qua-aula-11').text("Aula 2 - Noite - Indisponível");
                                            $('h4#qua-aula-11').next().text(siglaTurma);
                                            $('h4#qua-aula-11').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-11').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#qua-aula-12').text("Aula 3 - Noite - Indisponível");
                                            $('h4#qua-aula-12').next().text(siglaTurma);
                                            $('h4#qua-aula-12').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-12').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#qua-aula-13').text("Aula 4 - Noite - Indisponível");
                                            $('h4#qua-aula-13').next().text(siglaTurma);
                                            $('h4#qua-aula-13').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-13').parent().parent().addClass("border-danger");
                                            break;
                                        case 5:
                                            $('h4#qua-aula-14').text("Aula 5 - Noite - Indisponível");
                                            $('h4#qua-aula-14').next().text(siglaTurma);
                                            $('h4#qua-aula-14').parent().parent().removeClass("border-success");
                                            $('h4#qua-aula-14').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                }
                                break;  
                            case 'Qui':
                            if(response['agenda'][reservas].periodo == 'manha'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#qui-aula-0').text("Aula 1 - Manhã - Indisponível");
                                            $('h4#qui-aula-0').next().text(siglaTurma);
                                            $('h4#qui-aula-0').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-0').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#qui-aula-1').text("Aula 2 - Manhã - Indisponível");
                                            $('h4#qui-aula-1').next().text(siglaTurma);
                                            $('h4#qui-aula-1').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-1').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#qui-aula-2').text("Aula 3 - Manhã - Indisponível");
                                            $('h4#qui-aula-2').next().text(siglaTurma);
                                            $('h4#qui-aula-2').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-2').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#qui-aula-3').text("Aula 4 - Manhã - Indisponível");
                                            $('h4#qui-aula-3').next().text(siglaTurma);
                                            $('h4#qui-aula-3').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-3').parent().parent().addClass("border-danger");
                                            break;
                                        case 5:
                                            $('h4#qui-aula-4').text("Aula 5 - Manhã - Indisponível");
                                            $('h4#qui-aula-4').next().text(siglaTurma);
                                            $('h4#qui-aula-4').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-4').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                } else if(response['agenda'][reservas].periodo == 'tarde'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#qui-aula-5').text("Aula 1 - Tarde - Indisponível");
                                            $('h4#qui-aula-5').next().text(siglaTurma);
                                            $('h4#qui-aula-5').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-5').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#qui-aula-6').text("Aula 2 - Tarde - Indisponível");
                                            $('h4#qui-aula-6').next().text(siglaTurma);
                                            $('h4#qui-aula-6').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-6').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#qui-aula-7').text("Aula 3 - Tarde - Indisponível");
                                            $('h4#qui-aula-7').next().text(siglaTurma);
                                            $('h4#qui-aula-7').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-7').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#qui-aula-8').text("Aula 4 - Tarde - Indisponível");
                                            $('h4#qui-aula-8').next().text(siglaTurma);
                                            $('h4#qui-aula-8').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-8').parent().parent().addClass("border-danger");
                                            
                                            break;
                                        case 5:
                                            $('h4#qui-aula-9').text("Aula 5 - Tarde - Indisponível");
                                            $('h4#qui-aula-9').next().text(siglaTurma);
                                            $('h4#qui-aula-9').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-9').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                } else if(response['agenda'][reservas].periodo == 'noite'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#qui-aula-10').text("Aula 1 - Noite - Indisponível");
                                            $('h4#qui-aula-10').next().text(siglaTurma);
                                            $('h4#qui-aula-10').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-10').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#qui-aula-11').text("Aula 2 - Noite - Indisponível");
                                            $('h4#qui-aula-11').next().text(siglaTurma);
                                            $('h4#qui-aula-11').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-11').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#qui-aula-12').text("Aula 3 - Noite - Indisponível");
                                            $('h4#qui-aula-12').next().text(siglaTurma);
                                            $('h4#qui-aula-12').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-12').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#qui-aula-13').text("Aula 4 - Noite - Indisponível");
                                            $('h4#qui-aula-13').next().text(siglaTurma);
                                            $('h4#qui-aula-13').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-13').parent().parent().addClass("border-danger");
                                            break;
                                        case 5:
                                            $('h4#qui-aula-14').text("Aula 5 - Noite - Indisponível");
                                            $('h4#qui-aula-14').next().text(siglaTurma);
                                            $('h4#qui-aula-14').parent().parent().removeClass("border-success");
                                            $('h4#qui-aula-14').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                }
                                break;
                            case 'Sex':
                            if(response['agenda'][reservas].periodo == 'manha'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#sex-aula-0').text("Aula 1 - Manhã - Indisponível");
                                            $('h4#sex-aula-0').next().text(siglaTurma);
                                            $('h4#sex-aula-0').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-0').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#sex-aula-1').text("Aula 2 - Manhã - Indisponível");
                                            $('h4#sex-aula-1').next().text(siglaTurma);
                                            $('h4#sex-aula-1').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-1').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#sex-aula-2').text("Aula 3 - Manhã - Indisponível");
                                            $('h4#sex-aula-2').next().text(siglaTurma);
                                            $('h4#sex-aula-2').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-2').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#sex-aula-3').text("Aula 4 - Manhã - Indisponível");
                                            $('h4#sex-aula-3').next().text(siglaTurma);
                                            $('h4#sex-aula-3').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-3').parent().parent().addClass("border-danger");
                                            break;
                                        case 5:
                                            $('h4#sex-aula-4').text("Aula 5 - Manhã - Indisponível");
                                            $('h4#sex-aula-4').next().text(siglaTurma);
                                            $('h4#sex-aula-4').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-4').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                } else if(response['agenda'][reservas].periodo == 'tarde'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#sex-aula-5').text("Aula 1 - Tarde - Indisponível");
                                            $('h4#sex-aula-5').next().text(siglaTurma);
                                            $('h4#sex-aula-5').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-5').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#sex-aula-6').text("Aula 2 - Tarde - Indisponível");
                                            $('h4#sex-aula-6').next().text(siglaTurma);
                                            $('h4#sex-aula-6').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-6').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#sex-aula-7').text("Aula 3 - Tarde - Indisponível");
                                            $('h4#sex-aula-7').next().text(siglaTurma);
                                            $('h4#sex-aula-7').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-7').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#sex-aula-8').text("Aula 4 - Tarde - Indisponível");
                                            $('h4#sex-aula-8').next().text(siglaTurma);
                                            $('h4#sex-aula-8').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-8').parent().parent().addClass("border-danger");
                                            
                                            break;
                                        case 5:
                                            $('h4#sex-aula-9').text("Aula 5 - Tarde - Indisponível");
                                            $('h4#sex-aula-9').next().text(siglaTurma);
                                            $('h4#sex-aula-9').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-9').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                } else if(response['agenda'][reservas].periodo == 'noite'){
                                    switch(response['agenda'][reservas].aula){
                                        case 1:
                                            $('h4#sex-aula-10').text("Aula 1 - Noite - Indisponível");
                                            $('h4#sex-aula-10').next().text(siglaTurma);
                                            $('h4#sex-aula-10').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-10').parent().parent().addClass("border-danger");
                                            break;
                                        case 2:
                                            $('h4#sex-aula-11').text("Aula 2 - Noite - Indisponível");
                                            $('h4#sex-aula-11').next().text(siglaTurma);
                                            $('h4#sex-aula-11').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-11').parent().parent().addClass("border-danger");
                                            break;
                                        case 3:
                                            $('h4#sex-aula-12').text("Aula 3 - Noite - Indisponível");
                                            $('h4#sex-aula-12').next().text(siglaTurma);
                                            $('h4#sex-aula-12').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-12').parent().parent().addClass("border-danger");
                                            break;    
                                        case 4:
                                            $('h4#sex-aula-13').text("Aula 4 - Noite - Indisponível");
                                            $('h4#sex-aula-13').next().text(siglaTurma);
                                            $('h4#sex-aula-13').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-13').parent().parent().addClass("border-danger");
                                            break;
                                        case 5:
                                            $('h4#sex-aula-14').text("Aula 5 - Noite - Indisponível");
                                            $('h4#sex-aula-14').next().text(siglaTurma);
                                            $('h4#sex-aula-14').parent().parent().removeClass("border-success");
                                            $('h4#sex-aula-14').parent().parent().addClass("border-danger");
                                            break;
                                    }

                                }
                                break;
                                    
                            }
  
                        }
                }
            
            }); 
        }

        // função para zerer e sobrescrever quando for selecionado outro recurso para visualização
        function erase(){
            for(i=0; i<15; i++){
                if(i<5){
                    $('h4#seg-aula-'+i).text("Aula " + (i+1) + " - Manhã - Disponível");
                    $('h4#seg-aula-'+i).next().text("Não alocado");
                    $('h4#seg-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#seg-aula-'+i).parent().parent().addClass("border-success");
                    $('h4#ter-aula-'+i).text("Aula " + (i+1) + " - Manhã - Disponível");
                    $('h4#ter-aula-'+i).next().text("Não alocado");
                    $('h4#ter-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#ter-aula-'+i).parent().parent().addClass("border-success");
                    $('h4#qua-aula-'+i).text("Aula " + (i+1) + " - Manhã - Disponível");
                    $('h4#qua-aula-'+i).next().text("Não alocado");
                    $('h4#qua-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#qua-aula-'+i).parent().parent().addClass("border-success");
                    $('h4#qui-aula-'+i).text("Aula " + (i+1) + " - Manhã - Disponível");
                    $('h4#qui-aula-'+i).next().text("Não alocado");
                    $('h4#qui-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#qui-aula-'+i).parent().parent().addClass("border-success");
                    $('h4#sex-aula-'+i).text("Aula " + (i+1) + " - Manhã - Disponível");
                    $('h4#sex-aula-'+i).next().text("Não alocado");
                    $('h4#sex-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#sex-aula-'+i).parent().parent().addClass("border-success");
                } else if(i<10){
                    $('h4#seg-aula-'+i).text("Aula " + (i-4) + " - Tarde - Disponível");
                    $('h4#seg-aula-'+i).next().text("Não alocado");
                    $('h4#seg-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#seg-aula-'+i).parent().parent().addClass("border-success");
                    $('h4#ter-aula-'+i).text("Aula " + (i-4) + " - Tarde - Disponível");
                    $('h4#ter-aula-'+i).next().text("Não alocado");
                    $('h4#ter-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#ter-aula-'+i).parent().parent().addClass("border-success");
                    $('h4#qua-aula-'+i).text("Aula " + (i-4) + " - Tarde - Disponível");
                    $('h4#qua-aula-'+i).next().text("Não alocado");
                    $('h4#qua-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#qua-aula-'+i).parent().parent().addClass("border-success");
                    $('h4#qui-aula-'+i).text("Aula " + (i-4) + " - Tarde - Disponível");
                    $('h4#qui-aula-'+i).next().text("Não alocado");
                    $('h4#qui-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#qui-aula-'+i).parent().parent().addClass("border-success");
                    $('h4#sex-aula-'+i).text("Aula " + (i-4) + " - Tarde - Disponível");
                    $('h4#sex-aula-'+i).next().text("Não alocado");
                    $('h4#sex-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#sex-aula-'+i).parent().parent().addClass("border-success");

                }else if(i<15){
                    $('h4#seg-aula-'+i).text("Aula " + (i-9) + " - Noite - Disponível");
                    $('h4#seg-aula-'+i).next().text("Não alocado");
                    $('h4#seg-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#seg-aula-'+i).parent().parent().addClass("border-success");
                    $('h4#ter-aula-'+i).text("Aula " + (i-9) + " - Noite - Disponível");
                    $('h4#ter-aula-'+i).next().text("Não alocado");
                    $('h4#ter-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#ter-aula-'+i).parent().parent().addClass("border-success");
                    $('h4#qua-aula-'+i).text("Aula " + (i-9) + " - Noite - Disponível");
                    $('h4#qua-aula-'+i).next().text("Não alocado");
                    $('h4#qua-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#qua-aula-'+i).parent().parent().addClass("border-success");
                    $('h4#qui-aula-'+i).text("Aula " + (i-9) + " - Noite - Disponível");
                    $('h4#qui-aula-'+i).next().text("Não alocado");
                    $('h4#qui-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#qui-aula-'+i).parent().parent().addClass("border-success");
                    $('h4#sex-aula-'+i).text("Aula " + (i-9) + " - Noite - Disponível");
                    $('h4#sex-aula-'+i).next().text("Não alocado");
                    $('h4#sex-aula-'+i).parent().parent().removeClass("border-danger");
                    $('h4#sex-aula-'+i).parent().parent().addClass("border-success");
                }
            }
        }
        
</script>
@endsection