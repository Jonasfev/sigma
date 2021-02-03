@extends('template')
@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')
    <div class="pg-ctn h-75 bg-light flex-column">       
        <div class="config-ctn w-100 h-60 d-flex flex-lg-column align-items-center justify-content-around">
            <div class="w-100 d-flex justify-content-around align-items-center my-3">
                <form class="d-flex justify-content-around ml-2 mt-3">
                    <select name="periodo" id="periodo" class="form-control" onchange="horario(this.value, 'tec');">
                        <option value="manha">Manhã</option>
                        <option value="tarde">Tarde</option>
                        <option value="noite">Noite</option>
                    </select>
                </form>
            </div>
            @include('partials.weektec')
        </div>
        <div class="side-ctn w-100 d-flex align-items-center justify-content-lg-around my-1">
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Docentes</h4>
                    <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                        @foreach ($docentes as $docente)
                            <div class="docente w-65 side-item bg-white text-center" draggable="true" id='doc-{{$docente->id}}' ondragstart="drag(event);" data-toggle="tooltip" data-placement="bottom" title="{{$docente->Nome}} {{$docente->Sobrenome}}">{{$docente->Nome}}</div>
                        @endforeach
                    </div>
                </div>
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Ambientes</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    @foreach ($ambientes as $ambiente)
                        <div class="ambiente w-65 side-item bg-white text-center" draggable="true" id='amb-{{$ambiente->id}}' ondragstart="drag(event);">{{$ambiente->Tipo}} - {{$ambiente->numAmbiente}}</div>
                    @endforeach
                </div>
            </div>
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Equipamentos</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    @foreach ($equips as $equip)
                        <div class="equipamento w-65 side-item bg-white text-center" draggable="true" id='eqp-{{$equip->id}}' ondragstart="drag(event);">{{$equip->Nome}}</div>
                    @endforeach
                </div>
            </div>
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">UC's</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    @foreach ($ucs as $uc)
                        <div class="uc w-65 side-item bg-white text-center" draggable="true" id='uc-{{$uc->id}}'ondragstart="drag(event);" data-toggle="tooltip" data-placement="bottom" title="{{$uc->nomeUC}}">{{$uc->siglaUC}}</div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="w-50 d-flex align-items-center justify-content-around mx-auto mt-3 mb-4">
            <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.opcaoHorario')}}">VOLTAR</a>
            <button class="btn btn-primary col-5">SALVAR</button>
        </div>
    </div>
    <script>horario('manha', 'tec');</script>
@endsection