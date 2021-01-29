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
                <form class="d-flex justify-content-around ml-2">
                    <select name="periodo" id="periodo" class="form-control" onchange="horario(this.value, 'cai');">
                        <option value="manha">Manhã</option>
                        <option value="tarde">Tarde</option>
                    </select>
                </form>
            </div>
            @include('partials.weekcai')
        </div>
        <div class="side-ctn w-100 d-flex align-items-center justify-content-lg-around my-1">
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Docentes</h4>
                    <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                        <div class="docente w-65 side-item bg-white text-center" draggable="true" id='doc-1' ondragstart="drag(event);">Kleber</div>
                        <div class="docente w-65 side-item bg-white text-center" draggable="true" id='doc-2' ondragstart="drag(event);" data-toggle="tooltip" data-placement="bottom">Wellington</div>
                        <div class="docente w-65 side-item bg-white text-center" draggable="true" id='doc-3' ondragstart="drag(event);" data-toggle="tooltip" data-placement="bottom">Paulo</div>
                        <div class="docente w-65 side-item bg-white text-center" draggable="true" id='doc-4' ondragstart="drag(event);">Airton</div>
                        <div class="docente w-65 side-item bg-white text-center" draggable="true" id='doc-5' ondragstart="drag(event);">Rogério</div>
                    </div>
                </div>
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Ambientes</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    <div class="ambiente w-65 side-item bg-white text-center" draggable="true" id='amb-1' ondragstart="drag(event);">Lab 61</div>
                    <div class="ambiente w-65 side-item bg-white text-center" draggable="true" id='amb-2' ondragstart="drag(event);">Lab 62</div>
                    <div class="ambiente w-65 side-item bg-white text-center" draggable="true" id='amb-3' ondragstart="drag(event);">Lab 63</div>
                    <div class="ambiente w-65 side-item bg-white text-center" draggable="true" id='amb-4' ondragstart="drag(event);">Lab 64</div>
                    <div class="ambiente w-65 side-item bg-white text-center" draggable="true" id='amb-5' ondragstart="drag(event);">Lab 65</div>
                </div>
            </div>
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Equipamentos</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    <div class="equipamento w-65 side-item bg-white text-center" draggable="true" id='eqp-1' ondragstart="drag(event);">Projetor</div>
                    <div class="equipamento w-65 side-item bg-white text-center" draggable="true" id='eqp-2' ondragstart="drag(event);">Extensão</div>
                    <div class="equipamento w-65 side-item bg-white text-center" draggable="true" id='eqp-3' ondragstart="drag(event);">Furadeira</div>
                    <div class="equipamento w-65 side-item bg-white text-center" draggable="true" id='eqp-4' ondragstart="drag(event);">Macaco</div>
                    <div class="equipamento w-65 side-item bg-white text-center" draggable="true" id='eqp-5' ondragstart="drag(event);">Castanha</div>
                </div>
            </div>
            <div class="side h-80 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">UC's</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    <div class="uc w-65 side-item bg-white text-center" draggable="true" id='uc-1'ondragstart="drag(event); " data-toggle="tooltip" data-placement="bottom" title="Fundamentos de Programação Orientada a Objetos">FPOO</div>
                    <div class="uc w-65 side-item bg-white text-center" draggable="true" id='uc-2'ondragstart="drag(event);">INDMO</div>
                    <div class="uc w-65 side-item bg-white text-center" draggable="true" id='uc-3'ondragstart="drag(event);">PWFE</div>
                    <div class="uc w-65 side-item bg-white text-center" draggable="true" id='uc-4'ondragstart="drag(event);">PWBE</div>
                    <div class="uc w-65 side-item bg-white text-center" draggable="true" id='uc-5'ondragstart="drag(event);">BCD</div>
                </div>
            </div>
        </div>
        <div class="w-50 d-flex align-items-center justify-content-around mx-auto mt-3 mb-4">
            <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.opcaoHorario')}}">VOLTAR</a>
            <button class="btn btn-primary col-5">SALVAR</button>
        </div>
    </div>
    <script>horario('manha', 'cai');</script>
@endsection