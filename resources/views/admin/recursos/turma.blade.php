@extends('admin.recursos._partials.nav')

@section('button')
<a type="button" class="btn btn-primary" href="{{Route('index')}}">
    LOGOUT
</a>
@endsection

@section('content')

<div class="pg-ctn bg-light">
    <div class="w-100 h-50 d-flex justify-content-around">
        <div class="side-ctn d-flex flex-column align-items-center justify-content-center">
            <h4 class="text-center">Docentes</h4>
            <div class="w-100 h-75 d-flex flex-column align-items-center overflow-auto">
                <div class="col-6 side-item bg-white text-center">Kge</div>
                <div class="col-6 side-item bg-white text-center">Kge</div>
                <div class="col-6 side-item bg-white text-center">Kge</div>
                <div class="col-6 side-item bg-white text-center">Kge</div>
                <div class="col-6 side-item bg-white text-center">Kge</div>
                <div class="col-6 side-item bg-white text-center">Kge</div>
                <div class="col-6 side-item bg-white text-center">Kge</div>
                <div class="col-6 side-item bg-white text-center">Kge</div>
                <div class="col-6 side-item bg-white text-center">Kge</div>
                <div class="col-6 side-item bg-white text-center">Kge</div>
                <div class="col-6 side-item bg-white text-center">Kge</div>
                <div class="col-6 side-item bg-white text-center">Kge</div>
                <div class="col-6 side-item bg-white text-center">Kge</div>
            </div>
        </div>
        <div class="config-ctn col-8 d-flex flex-lg-column align-items-center justify-content-lg-around">
            <h1 class="text-center">Turmas</h1>
            <form class="row col-3">
                <div class="mb-3 d-flex align-items-center justify-content-around">
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
                </div>
            </form>
            <div class="days h-75 col-12 bg-light d-flex flex-fill justify-content-around">
                <div class="day col-2 d-flex flex-column align-items-center" id="seg">
                    <h4>Seg</h4>
                    <div class="w-100 flex-fill d-flex flex-fill">
                        <div class="turma-a w-50"></div>
                        <div class="turma-b w-50"></div>
                    </div>
                    <div class="row col-12 d-flex justify-content-around">
                        <div class="day-doc col-5 bg-light text-center overflow-auto"></div>
                        <div class="day-amb bg-light text-center"></div>
                    </div>
                </div>
                <div class="day col-2 d-flex flex-column align-items-center" id="ter">
                    <h4>Ter</h4>
                    <div class="w-100 flex-fill d-flex flex-fill">
                        <div class="turma-a w-50"></div>
                        <div class="turma-b w-50"></div>
                    </div>
                    <div class="row col-12 d-flex justify-content-around">
                        <div class="day-doc col-5 bg-light text-center overflow-auto"></div>
                        <div class="day-amb bg-light text-center"></div>
                    </div>
                </div>
                <div class="day col-2 d-flex flex-column align-items-center" id="qua">
                    <h4>Qua</h4>
                    <div class="w-100 flex-fill d-flex flex-fill">
                        <div class="turma-a w-50"></div>
                        <div class="turma-b w-50"></div>
                    </div>
                    <div class="row col-12 d-flex justify-content-around">
                        <div class="day-doc col-5 bg-light text-center overflow-auto"></div>
                        <div class="day-amb bg-light text-center"></div>
                    </div>
                </div>
                <div class="day col-2 d-flex flex-column align-items-center" id="qui">
                    <h4>Qui</h4>
                    <div class="w-100 flex-fill d-flex flex-fill">
                        <div class="turma-a w-50"></div>
                        <div class="turma-b w-50"></div>
                    </div>
                    <div class="row col-12 d-flex justify-content-around">
                        <div class="day-doc col-5 bg-light text-center overflow-auto"></div>
                        <div class="day-amb bg-light text-center"></div>
                    </div>
                </div>
                <div class="day col-2 d-flex flex-column align-items-center" id="sex">
                    <h4>Sex</h4>
                    <div class="w-100 flex-fill d-flex flex-fill">
                        <div class="turma-a w-50"></div>
                        <div class="turma-b w-50"></div>
                    </div>
                    <div class="row col-12 d-flex justify-content-around">
                        <div class="day-doc col-5 bg-light text-center overflow-auto"></div>
                        <div class="day-amb bg-light text-center"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-ctn d-flex flex-column align-items-center justify-content-center">
            <h4 class="text-center">Uc's</h4>
            <div class="w-100 h-75 d-flex flex-column align-items-center overflow-auto">
                <div class="col-6 side-item bg-white text-center">UC</div>
                <div class="col-6 side-item bg-white text-center">UC</div>
                <div class="col-6 side-item bg-white text-center">UC</div>
                <div class="col-6 side-item bg-white text-center">UC</div>
                <div class="col-6 side-item bg-white text-center">UC</div>
                <div class="col-6 side-item bg-white text-center">UC</div>
                <div class="col-6 side-item bg-white text-center">UC</div>
                <div class="col-6 side-item bg-white text-center">UC</div>
                <div class="col-6 side-item bg-white text-center">UC</div>
                <div class="col-6 side-item bg-white text-center">UC</div>
                <div class="col-6 side-item bg-white text-center">UC</div>
                <div class="col-6 side-item bg-white text-center">UC</div>
                <div class="col-6 side-item bg-white text-center">UC</div>
            </div>
        </div>
    </div>
    <div class="w-100 h-50 d-flex flex-column justify-content-around align-items-center">
        <div class="side-ctn w-75 d-flex flex-column align-items-center justify-content-center">
            <h4 class="text-center">Ambientes</h4>
            <div class="w-100 d-flex align-items-center overflow-auto">
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
            </div>
        </div>
        <div class="side-ctn w-75 d-flex flex-column align-items-center justify-content-center">
            <h4 class="text-center">Equipamentos</h4>
            <div class="w-100 d-flex align-items-center overflow-auto">
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
                <div class="col-1 side-item bg-white text-center">Kge</div>
            </div>
        </div>
        <div class="row col-3 d-flex justify-content-around">
            <a type="button" class="btn btn-secondary col-5" href="{{Route('home.admin')}}">VOLTAR</a>
            <button class="btn btn-primary col-5">SALVAR</button>
        </div>
    </div>
</div>
    
@endsection