@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1>Cadastrar</h1>
        <div class="bd-example bd-example-tabs w-50 h-75">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active show" id="nav-doc-tab" data-toggle="tab" href="#nav-doc" role="tab" aria-controls="nav-doc" aria-selected="true">Docente</a>
                <a class="nav-item nav-link" id="nav-amb-tab" data-toggle="tab" href="#nav-amb" role="tab" aria-controls="nav-amb" aria-selected="false">Ambiente</a>
                <a class="nav-item nav-link" id="nav-eqp-tab" data-toggle="tab" href="#nav-eqp" role="tab" aria-controls="nav-eqp" aria-selected="false">Equipamento</a>
                <a class="nav-item nav-link" id="nav-uc-tab" data-toggle="tab" href="#nav-uc" role="tab" aria-controls="nav-uc" aria-selected="false">UC</a>
                <a class="nav-item nav-link" id="nav-curso-tab" data-toggle="tab" href="#nav-curso" role="tab" aria-controls="nav-curso" aria-selected="false">Curso</a>
                <a class="nav-item nav-link" id="nav-turma-tab" data-toggle="tab" href="#nav-turma" role="tab" aria-controls="nav-turma" aria-selected="false">Turma</a>
                </div>
            </nav>
            <div class="tab-content overflow-auto" id="nav-tabContent">
            <div class="tab-pane fade active show" id="nav-doc" role="tabpanel" aria-labelledby="nav-doc-tab">
                <form id="cadastrar-doc" action="">
                    <label class="mt-1 form-label" for="Nome">Nome</label>
                    <input class="form-control" type="text" name="Nome" id="Nome">
                    <label class="mt-1 form-label" for="Sobrenome">Sobrenome</label>
                    <input class="form-control" type="text" name="Sobrenome" id="Sobrenome">
                    <label class="mt-1 form-label" for="hmin">Horário mínimo</label>
                    <input class="form-control" type="number" name="hmin" id="hmin">
                    <label class="mt-1 form-label" for="hmax">Horário máximo</label>
                    <input class="form-control" type="number" name="hmax" id="hmax">
                    <label class="mt-1 form-label" for="hmax">Incluir UC</label>
                    <div class="opcao-uc d-flex flex-column overflow-auto">
                        @foreach ($ucs as $uc)
                            <div>
                                <INPUT TYPE="checkbox" NAME="opcao" VALUE="{{$uc->id}}"> {{$uc->nomeUC}}
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="nav-amb" role="tabpanel" aria-labelledby="nav-amb-tab">
                <form id="cadastrar-amb" action="">
                    <label class="mt-1 form-label" for="tipo">Tipo</label>
                    <select class="form-control" name="tipo">
                        <option value="Lab">Laboratório</option>
                        <option value="Ofc">Oficina</option>
                        <option value="Sala">Sala</option>
                    </select>
                    <label class="mt-1 form-label" for="numAmbiente">Número</label>
                    <input class="form-control" type="number" name="numAmbiente">
                    <label class="mt-1 form-label" for="alunosComportados">Alunos comportados</label>
                    <input class="form-control" type="number" name="alunosComportados">
                    <label class="mt-1 form-label" for="ucsComportadas">Incluir UC</label>
                    <div class="opcao-uc d-flex flex-column overflow-auto">
                        @foreach ($ucs as $uc)
                            <div>
                                <INPUT TYPE="checkbox" NAME="opcao" VALUE="{{$uc->id}}"> {{$uc->nomeUC}}
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="nav-eqp" role="tabpanel" aria-labelledby="nav-eqp-tab">
                <form id="cadastrar-eqp" action="">
                    <label class="mt-1 form-label" for="Nome">Nome</label>
                    <input class="form-control" type="text" name="Nome">
                    <label class="mt-1 form-label" for="numPatrimonio">Nº Patrimônio</label>
                    <input class="form-control" type="number" name="numPatrimonio">
                </form>
            </div>
            <div class="tab-pane fade" id="nav-uc" role="tabpanel" aria-labelledby="nav-uc-tab">
                <form id="cadastrar-uc" action="">
                    <label class="mt-1 form-label" for="nomeUC">Nome da UC</label>
                    <input class="form-control" type="text" name="nomeUC">
                    <label class="mt-1 form-label" for="aulasSemanais">Nº de aulas semanais</label>
                    <input class="form-control" type="number" name="aulasSemanais">
                </form>
            </div>
            <div class="tab-pane fade" id="nav-curso" role="tabpanel" aria-labelledby="nav-curso-tab">
                <form id="cadastrar-curso" action="">
                    <label class="mt-1 form-label" for="tipoCurso">Tipo</label>
                    <select class="form-control" name="tipoCurso">
                        <option value="Cai">CAI</option>
                        <option value="Tec">TEC</option>
                        <option value="Fic">FIC</option>
                    </select>
                    <label class="mt-1 form-label" for="siglaCurso">Sigla</label>
                    <input class="form-control" type="text" name="siglaCurso">
                    <label class="mt-1 form-label" for="nomeCurso">Nome do Curso</label>
                    <input class="form-control" type="text" name="nomeCurso">
                    <label class="mt-1 form-label" for="dataInicioCurso">Início</label>
                    <input class="form-control" type="date" name="dataFimCurso">
                    <label class="mt-1 form-label" for="dataFimCurso">Fim</label>
                    <input class="form-control" type="date" name="dataFimCurso">
                    <label class="mt-1 form-label" for="cargaTotalHoras">Carga horária total</label>
                    <input class="form-control" type="number" name="cargaTotalHoras">
                </form>
            </div>
            <div class="tab-pane fade" id="nav-turma" role="tabpanel" aria-labelledby="nav-turma-tab">
                <form id="cadastrar-turma" action="">
                    <label class="mt-1 form-label" for="nomeCurso">Curso</label>
                    <select class="form-control" name="nomeCurso">
                        @foreach ($cursos as $curso)
                            <option value="{{$curso->id}}">{{$curso->nomeCurso}}</option>
                        @endforeach
                    </select>
                    <label class="mt-1 form-label" for="siglaTurma">Sigla</label>
                    <input class="form-control" type="text" name="SiglaTurma">
                    <label class="mt-1 form-label" for="periodo">Período</label>
                    <select class="form-control" name="periodo">
                        <option value="manha">Manhã</option>
                        <option value="tarde">Tarde</option>
                        <option value="noite">Noite</option>
                    </select>
                    <label class="mt-1 form-label" for="numAlunos">Nº de alunos</label>
                    <input class="form-control" type="number" name="numAlunos">
                    <label class="mt-1 form-label" for="horaEntrada">Hora de entrada</label>
                    <input class="form-control" type="time" name="horaEntrada">
                    <label class="mt-1 form-label" for="horaSaída">Hora de Saída</label>
                    <input class="form-control" type="time" name="horaSaída">
                </form>
            </div>
            <div class="col-12 d-flex align-items-center justify-content-around">
                <a type="button" class="btn btn-secondary col-5" href="{{ Route('admin.home') }}">VOLTAR</a>
                <button class="btn btn-primary col-5">SALVAR</button>
            </div>
            </div>
        </div>
    </div>
@endsection