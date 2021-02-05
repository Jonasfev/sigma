@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')
    <div class="pg-ctn bg-light d-flex flex-column align-items-center justify-content-around">
        <h1>Novo ambiente</h1>
        <div class="bd-example bd-example-tabs w-50 h-75">
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
            <div class="col-12 d-flex align-items-center justify-content-around mt-3">
                <a type="button" class="btn btn-secondary col-5" href="{{ Route('admin.recursos') }}">VOLTAR</a>
                <button class="btn btn-primary col-5">SALVAR</button>
            </div>
        </div>
    </div>
@endsection