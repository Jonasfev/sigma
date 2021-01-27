@extends('template')
@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')
    <div class="pg-ctn h-75 bg-light flex-column">
        <div class="bg-warning msg-error rounded justify-content-around" id = 'msg-btn-close' style="display: none">
            <div type="button" class="close" aria-label="Close" onclick="errorMsg(1);">
                <span aria-hidden="false">&times;</span>
            </div>
            <div id="lista-error"></div>
        </div>        
        <div class="config-ctn w-100 h-60 d-flex flex-lg-column align-items-center justify-content-around">
            <div class="w-100 d-flex justify-content-around align-items-center my-3">
                <form class="d-flex justify-content-around ml-2">
                    <select name="periodo" id="periodo" class="form-control" onchange="horario(this.value);">
                        <option value="manha">Manhã</option>
                        <option value="tarde">Tarde</option>
                        <option value="noite">Noite</option>
                    </select>
                </form>
            </div>
            @include('week')
        </div>
        <div class="side-ctn w-100 d-flex align-items-center justify-content-lg-around my-1">
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Docentes</h4>
                    <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                        <div class="docente w-65 side-item bg-white text-center" draggable="true" id='doc-1' ondragstart="drag(event);">Docente 1 alocado</div>
                        <div class="docente w-65 side-item bg-white text-center" draggable="true" id='doc-2' ondragstart="drag(event);" data-toggle="tooltip" data-placement="bottom">Docente 2</div>
                        <div class="docente w-65 side-item bg-white text-center" draggable="true" id='doc-3' ondragstart="drag(event);" data-toggle="tooltip" data-placement="bottom">Docente 3</div>
                        <div class="docente w-65 side-item bg-white text-center" draggable="true" id='doc-4' ondragstart="drag(event);">Docente 4</div>
                        <div class="docente w-65 side-item bg-white text-center" draggable="true" id='doc-5' ondragstart="drag(event);">Docente 5</div>
                        <div class="docente w-65 side-item bg-white text-center" draggable="true" id='doc-6' ondragstart="drag(event);" data-toggle="tooltip" data-placement="bottom">Docente 6</div>
                    </div>
                </div>
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Ambientes</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    <div class="ambiente w-65 side-item bg-white text-center" draggable="true" id='amb-1' ondragstart="drag(event);">Ambiente 1</div>
                    <div class="ambiente w-65 side-item bg-white text-center" draggable="true" id='amb-2' ondragstart="drag(event);">Ambiente 2</div>
                    <div class="ambiente w-65 side-item bg-white text-center" draggable="true" id='amb-3' ondragstart="drag(event);">Ambiente 3</div>
                    <div class="ambiente w-65 side-item bg-white text-center" draggable="true" id='amb-4' ondragstart="drag(event);">Ambiente 4</div>
                    <div class="ambiente w-65 side-item bg-white text-center" draggable="true" id='amb-5' ondragstart="drag(event);">Ambiente 5</div>
                    <div class="ambiente w-65 side-item bg-white text-center" draggable="true" id='amb-6' ondragstart="drag(event);">Ambiente 6</div>
                </div>
            </div>
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Equipamentos</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    <div class="equipamento w-65 side-item bg-white text-center" draggable="true" id='eqp-1' ondragstart="drag(event);">Equipamento 1</div>
                    <div class="equipamento w-65 side-item bg-white text-center" draggable="true" id='eqp-2' ondragstart="drag(event);">Equipamento 2</div>
                    <div class="equipamento w-65 side-item bg-white text-center" draggable="true" id='eqp-3' ondragstart="drag(event);">Equipamento 3</div>
                    <div class="equipamento w-65 side-item bg-white text-center" draggable="true" id='eqp-4' ondragstart="drag(event);">Equipamento 4</div>
                    <div class="equipamento w-65 side-item bg-white text-center" draggable="true" id='eqp-5' ondragstart="drag(event);">Equipamento 5</div>
                    <div class="equipamento w-65 side-item bg-white text-center" draggable="true" id='eqp-6' ondragstart="drag(event);">Equipamento 6</div>
                </div>
            </div>
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">UC's</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    <div class="uc w-65 side-item bg-white text-center" draggable="true" id='uc-1'ondragstart="drag(event); " data-toggle="tooltip" data-placement="bottom" title="Fundamentos de Programação Orientada a Objetos">UC 1</div>
                    <div class="uc w-65 side-item bg-white text-center" draggable="true" id='uc-2'ondragstart="drag(event);">UC 2</div>
                    <div class="uc w-65 side-item bg-white text-center" draggable="true" id='uc-3'ondragstart="drag(event);">UC 3</div>
                    <div class="uc w-65 side-item bg-white text-center" draggable="true" id='uc-4'ondragstart="drag(event);">UC 4</div>
                    <div class="uc w-65 side-item bg-white text-center" draggable="true" id='uc-5'ondragstart="drag(event);">UC 5</div>
                    <div class="uc w-65 side-item bg-white text-center" draggable="true" id='uc-6' ondragstart="drag(event);">UC 6</div>
                </div>
            </div>
        </div>
        <div class="w-50 d-flex align-items-center justify-content-around mx-auto mt-3 mb-4">
            <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.opcaoHorario')}}">VOLTAR</a>
            <button class="btn btn-primary col-5">SALVAR</button>
        </div>
    </div>
    <script>horario('manha');</script>
@endsection