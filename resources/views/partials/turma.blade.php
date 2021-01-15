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
                        <div class="w-50 h-100 turma-a"></div>
                        <div class="w-50 h-100 turma-b"></div>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-around flex-fill">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div>
                <div class="day w-18 d-flex flex-column">
                    <h4 class="text-center">Terça</h4>
                    <div class="w-100 h-75 d-flex">
                        <div class="w-50 h-100 turma-a"></div>
                        <div class="w-50 h-100 turma-b"></div>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-around flex-fill">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div>
                <div class="day w-18 d-flex flex-column">
                    <h4 class="text-center">Quarta</h4>
                    <div class="w-100 h-75 d-flex">
                        <div class="w-50 h-100 turma-a"></div>
                        <div class="w-50 h-100 turma-b"></div>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-around flex-fill">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div>
                <div class="day w-18 d-flex flex-column">
                    <h4 class="text-center">Quinta</h4>
                    <div class="w-100 h-75 d-flex">
                        <div class="w-50 h-100 turma-a"></div>
                        <div class="w-50 h-100 turma-b"></div>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-around flex-fill">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div>
                <div class="day w-18 d-flex flex-column">
                    <h4 class="text-center">Sexta</h4>
                    <div class="w-100 h-75 d-flex">
                        <div class="w-50 h-100 turma-a"></div>
                        <div class="w-50 h-100 turma-b"></div>
                    </div>
                    <div class="w-100 d-flex align-items-center justify-content-around flex-fill">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-ctn w-100 d-flex align-items-center justify-content-lg-around">
            <div class="side h-100 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Docentes</h4>
                <div class="w-100 h-75 d-flex flex-column align-items-center overflow-auto">
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                </div>
            </div>
            <div class="side h-100 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Ambientes</h4>
                <div class="w-100 h-75 d-flex flex-column align-items-center overflow-auto">
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                </div>
            </div>
            <div class="side h-100 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Equipamentos</h4>
                <div class="w-100 h-75 d-flex flex-column align-items-center overflow-auto">
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                </div>
            </div>
            <div class="side h-100 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Uc's</h4>
                <div class="w-100 h-75 d-flex flex-column align-items-center overflow-auto">
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                    <div class="w-45 side-item bg-white text-center" draggable="true">Kge</div>
                </div>
            </div>
        </div>
        <div class="w-50 d-flex align-items-center justify-content-around mx-auto m-5">
            <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.home')}}">VOLTAR</a>
            <button class="btn btn-primary col-5">SALVAR</button>
        </div>
    </div>
@endsection