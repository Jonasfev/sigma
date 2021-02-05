@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1>Novo curso</h1>
        <div class="bd-example bd-example-tabs w-50 h-75">
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
            <div class="col-12 d-flex align-items-center justify-content-around mt-3">
                <a type="button" class="btn btn-secondary col-5" href="{{ Route('admin.recursos') }}">VOLTAR</a>
                <button class="btn btn-primary col-5">SALVAR</button>
            </div>
        </div>
    </div>
@endsection