@extends('template')
@section('button')
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <button form="logout-form" type="submit" class="btn btn-primary">LOGOUT</button>
@endsection

@section('content')
    {{-- modal apresentado enquando os daods estão sendo salvo --}}
    <div class="modal fade m-auto" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center save"></div>
        </div>
        </div>
    </div>

    {{-- criação de containers dos recursos --}}
    <div class="pg-ctn h-75 bg-light flex-column">       
        <div class="config-ctn w-100 h-60 d-flex flex-lg-column align-items-center justify-content-around">
            @include('partials.turma.weektec')
        </div>
        <div class="side-ctn w-100 d-flex align-items-center justify-content-lg-around my-1">
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Docentes</h4>
                    <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                        @foreach ($docentes as $docente)
                            <div class="docente w-65 side-item bg-white text-center" draggable="true" id='doc-{{$docente->id}}' ondragstart="drag(event);" data-toggle="tooltip" data-placement="bottom" title="{{$docente->Nome}} {{$docente->Sobrenome}}">
                                <input type="number" value="{{$docente->id}}" hidden>
                                <p class="m-0 p-0">{{$docente->Nome}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Ambientes</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    @foreach ($ambientes as $ambiente)
                        @if ($ambiente != null)
                            <div class="ambiente w-65 side-item bg-white text-center" draggable="true" id='amb-{{$ambiente->id}}' ondragstart="drag(event);">
                                <input type="number" value="{{$ambiente->id}}" hidden>
                                <p class="m-0 p-0">{{$ambiente->Tipo}} - {{$ambiente->numAmbiente}}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Equipamentos</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    @foreach ($equips as $equip)
                        <div class="equipamento w-65 side-item bg-white text-center" draggable="true" id='eqp-{{$equip->id}}' ondragstart="drag(event);">
                            <input type="number" value="{{$equip->id}}" hidden>
                            <p class="m-0 p-0">{{$equip->Nome}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">UC's</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    @foreach ($ucs as $uc)
                        <div class="uc w-65 side-item bg-white text-center" draggable="true" id='uc-{{$uc->id}}'ondragstart="drag(event);" data-toggle="tooltip" data-placement="bottom" title="{{$uc->nomeUC}}">
                            <input type="number" value="{{$uc->id}}" hidden>
                            <p class="m-0 p-0">{{$uc->siglaUC}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="w-50 d-flex align-items-center justify-content-around mx-auto mt-3 mb-4">
            <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.recursos', ['tipo' => 'turma'])}}">VOLTAR</a>
            <button onclick="enviarForms(50);" class="btn btn-primary col-5" id="btnenviarform" data-bs-toggle="modal" data-bs-target="#staticBackdrop">SALVAR</button>
        </div>

        <div class="error alert mx-auto p-2 alert-danger border-danger flex-column">
            <div class="row justify-content-between">
                <div class="col-auto my-auto"></div>
                <a type="button" class="btn-close col-auto mr-2 text-decoration-none" onclick="errorHide();">X</a>
            </div>
        </div>
    </div>
    <script>
        //carrega o horário pelo periodo
        horario('{{$turma->periodo}}', 'TEC');

        //carrega a turma caso já esteja cadastrada
        function carregaReservas() {
            $.ajax({
                type: 'get',
                dataType: 'json',
                url: '{{Route('admin.reservas', ['id' => $turma->id])}}',
                success: function(reservas) {
                    constroiReservas(reservas, '{{$tipo}}');
                }
            });
        }

        carregaReservas();
        
        //mostra erros caso haja
        error();
    </script>
@endsection