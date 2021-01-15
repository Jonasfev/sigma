@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')

    <div class="pg-ctn bg-light d-flex">
        <div class="col-2 h-100 d-flex flex-column align-items-center justify-content-lg-around">
            <div class="side-ctn h-50 w-75 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Docentes</h4>
                <div class="w-100 h-75 d-flex flex-column align-items-center overflow-auto">
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                </div>
            </div>
            <div class="side-ctn h-50 w-75 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Ambientes</h4>
                <div class="w-100 h-75 d-flex flex-column align-items-center overflow-auto">
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                </div>
            </div>
        </div>
        <div class="config-ctn col-8 d-flex flex-lg-column align-items-center justify-content-around">
            <h1 class="text-center">Turmas</h1>
            <form class="w-25 d-flex justify-content-around">
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
            <div class="days h-50 w-100 d-flex justify-content-around bg-primary">
                <div class="day bg-secondary w-25 h-75 d-flex flex-column align-items-center" id="seg">
                    <h4>Seg</h4>
                    <div class="w-100 h-75 d-flex bg-success">
                        <div class="turma-a w-50 flex-fill"></div>
                        <div class="turma-b w-50 flex-fill"></div>
                    </div>
                    <div class="w-100 d-flex justify-content-around bg-teal">
                        <div class="day-doc bg-light text-center"></div>
                        <div class="day-amb bg-light text-center"></div>
                    </div>
                </div>
            </div>
            <div class="h-25 w-50 d-flex align-items-center justify-content-around">
                <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.home')}}">VOLTAR</a>
                <button class="btn btn-primary col-5">SALVAR</button>
            </div>
        </div>
        <div class="col-2 h-100 d-flex flex-column align-items-center justify-content-lg-around">
            <div class="side-ctn h-50 w-75 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Uc's</h4>
                <div class="w-100 h-75 d-flex flex-column align-items-center overflow-auto">
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                </div>
            </div>
            <div class="side-ctn h-50 w-75 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Equipamentos</h4>
                <div class="w-100 h-75 d-flex flex-column align-items-center overflow-auto">
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                    <div class="w-75 side-item bg-white text-center">Kge</div>
                </div>
            </div>
        </div>
    </div>
@endsection