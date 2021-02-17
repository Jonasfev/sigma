@extends('template')

@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')

    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1 class="mt-5">Editar</h1>
        <div class="w-50 h-75 m-auto">
            <div class="tab-content overflow-auto" id="nav-tabContent">
              <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <form action="{{Route('admin.update', ['id' => $recurso->id])}}" id="formu" class="w-100 h-100 d-flex flex-column  justify-content-around" method="POST">
                    @csrf
                    @method("PUT")
                    <input type="text" value="{{$tipo}}" id="tipo" name="tipo" hidden>
                    <label class="mt-1 form-label" for="idCurso">Curso</label>
                    <input class="form-control" name="idCurso" value="{{$curso->nomeCurso}}" disabled>
                    <label class="mt-1 form-label" for="siglaTurma">Sigla</label>
                    <input class="form-control" type="text" name="SiglaTurma" value="{{$recurso->siglaTurma}}">
                    <label class="mt-1 form-label" for="periodo">Período</label>
                    <select class="form-control" name="periodo" onchange="horarioTurma($(this).val(), '{{$curso->tipo}}');">
                        <option value="manha" 
                        @if ($recurso->periodo == 'manha')
                          selected                          
                        @endif>Manhã</option>
                        <option value="tarde"
                        @if ($recurso->periodo == 'tarde')
                          selected                          
                        @endif>Tarde</option>
                        @if ($curso->tipoCurso != 'CAI')
                          <option id="noite" value="noite"
                          @if ($recurso->periodo == 'noite')
                            selected                          
                          @endif>Noite</option>
                        @endif
                    </select>
                    <label class="mt-1 form-label" for="numAlunos">Nº de alunos</label>
                    <input class="form-control" type="number" name="numAlunos" value="{{$recurso->numAlunos}}">
                    <label class="mt-1 form-label" for="horaEntrada">Hora de entrada</label>
                    <input id="entrada" class="form-control" type="time" name="horaEntrada" value="{{$recurso->horaEntrada}}">
                    <label class="mt-1 form-label" for="horaSaida">Hora de Saída</label>
                    <input id="saida" class="form-control" type="time" name="horaSaida" value="{{$recurso->horaSaida}}">                  
                </form>
              </div>
              <div class="col-12 d-flex align-items-center justify-content-around">
                <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.recursos', ['tipo' => 'turma'])}}">VOLTAR</a>
                <button type="submit" form="formu" class="btn btn-primary col-5 text-uppercase">SALVAR</button>
              </div>
            </div>
        </div>
    </div>
@endsection