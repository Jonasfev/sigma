@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1>Nova Turma</h1>
        <div class="bd-example bd-example-tabs w-50 h-75">
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
            <div class="col-12 d-flex align-items-center justify-content-around mt-3">
                <a type="button" class="btn btn-secondary col-5" href="{{ Route('admin.recursos') }}">VOLTAR</a>
                <button class="btn btn-primary col-5">SALVAR</button>
            </div>
        </div>
    </div>
@endsection