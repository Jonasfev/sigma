@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')

    <div class="pg-ctn bg-light d-flex flex-column">
        <div class="config-ctn w-100 h-75 d-flex flex-lg-column align-items-center justify-content-around">
            <h1 class="text-center m-2">Turmas</h1>
            <form class="w-18 d-flex justify-content-around m-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            CAI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            TEC
                        </label>
                    </div>
            </form>
            <form class="w-25 d-flex justify-content-around m-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Manhã
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Tarde
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Noite
                        </label>
                    </div>
            </form>
            <div class="days h-75 w-100 d-flex justify-content-around m-3">
                <div class="day w-18 d-flex flex-column">
                    <h4 class="text-center">Segunda</h4>
                    <div class="w-100 h-75 d-flex">
                        <div class="w-50 h-100 turma-a d-flex flex-column align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        <div class="w-50 h-100 turma-b d-flex flex-column align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                    </div>
                    <div class="w-100 p-2 d-flex align-items-center justify-content-around flex-fill" >
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                    <div class="w-100 px-2 d-flex align-items-center justify-content-around flex-fill">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div>
                <div class="day w-18 d-flex flex-column">
                    <h4 class="text-center">Terça</h4>
                    <div class="w-100 h-75 d-flex">
                        <div class="w-50 h-100 turma-a d-flex flex-column align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        <div class="w-50 h-100 turma-b d-flex flex-column align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                    </div>
                    <div class="w-100 p-2 d-flex align-items-center justify-content-around flex-fill">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                    <div class="w-100 px-2 d-flex align-items-center justify-content-around flex-fill">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div>
                <div class="day w-18 d-flex flex-column">
                    <h4 class="text-center">Quarta</h4>
                    <div class="w-100 h-75 d-flex">
                        <div class="w-50 h-100 turma-a d-flex flex-column align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        <div class="w-50 h-100 turma-b d-flex flex-column align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                    </div>
                    <div class="w-100 p-2 d-flex align-items-center justify-content-around flex-fill">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                    <div class="w-100 px-2 d-flex align-items-center justify-content-around flex-fill">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div>
                <div class="day w-18 d-flex flex-column">
                    <h4 class="text-center">Quinta</h4>
                    <div class="w-100 h-75 d-flex">
                        <div class="w-50 h-100 turma-a d-flex flex-column align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        <div class="w-50 h-100 turma-b d-flex flex-column align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                    </div>
                    <div class="w-100 p-2 d-flex align-items-center justify-content-around flex-fill">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                    <div class="w-100 px-2 d-flex align-items-center justify-content-around flex-fill">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div>
                <div class="day w-18 d-flex flex-column">
                    <h4 class="text-center">Sexta</h4>
                    <div class="w-100 h-75 d-flex">
                        <div class="w-50 h-100 turma-a d-flex flex-column align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        <div class="w-50 h-100 turma-b d-flex flex-column align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                    </div>
                    <div class="w-100 p-2 d-flex align-items-center justify-content-around flex-fill">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                    <div class="w-100 px-2 d-flex align-items-center justify-content-around flex-fill">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-ctn w-100 d-flex align-items-center justify-content-lg-around">
            <div class="side h-100 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Docentes</h4>
                    <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay rounded-left rounded-lg">
                        <div class="w-65 mt-2 side-item bg-white text-center" draggable="true" id='Doc-KGE' ondragstart="drag(event);">Kge</div>
                        <div class="w-65 mt-2 side-item bg-white text-center" draggable="true" id='test1' ondragstart="drag(event); " data-toggle="tooltip" data-placement="bottom" title="Welligton Joffrey">Big Welder</div>
                        <div class="w-65 mt-2 side-item bg-white text-center" draggable="true" id='test2' ondragstart="drag(event);">Marcio</div>
                        <div class="w-65 mt-2 side-item bg-white text-center" draggable="true" id='test3' ondragstart="drag(event);">Tia da cantina</div>
                        <div class="w-65 mt-2 side-item bg-white text-center" draggable="true" id='test4' ondragstart="drag(event);">Baratão do Paulo</div>
                        <div class="w-65 mt-2 side-item bg-white text-center" draggable="true" id='test5' ondragstart="drag(event);" data-toggle="tooltip" data-placement="bottom" title="Gay">Breno</div>
                    </div>
                </div>
            <div class="side h-100 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Ambientes</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true">Kge</div>
                </div>
            </div>
            <div class="side h-100 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Equipamentos</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true">Kge</div>
                </div>
            </div>
            <div class="side h-100 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">UC's</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true" id='uc'ondragstart="drag(event); " data-toggle="tooltip" data-placement="bottom" title="Fundamentos de Programação Orientada a Objetos">FPOO</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true" id='uc1'ondragstart="drag(event);">BDO</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true" id='uc2'ondragstart="drag(event);">PWBE</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true" id='uc3'ondragstart="drag(event);">INDMO</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true" id='uc4'ondragstart="drag(event);">FRESA</div>
                    <div class="w-65 mt-2 side-item bg-white text-center" draggable="true" id='uc5' ondragstart="drag(event);">BASQUETE</div>
                </div>
            </div>
        </div>
        <div class="w-50 d-flex align-items-center justify-content-around mx-auto m-5">
            <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.home')}}">VOLTAR</a>
            <button class="btn btn-primary col-5">SALVAR</button>
        </div>
    </div>
@endsection