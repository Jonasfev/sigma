@extends('template')

@section('button')
    <a type="button" class="btn btn-primary" href="{{Route('index')}}">
        LOGOUT
    </a>
@endsection

@section('content')

    <div class="pg-ctn h-75 bg-light d-flex flex-column">
        <div class="config-ctn w-100 h-75 d-flex flex-lg-column align-items-center justify-content-around">
            <h1 class="text-center m-2">Turma TEC</h1>
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
            <div class="days h-65 w-100 d-flex justify-content-around">
                <div class="day w-15 h-100 mx-auto d-flex flex-column">
                    <h2 class="w-100 text-center">Seg</h2>
                    <div class="container w-100 d-flex p-0 border border-secondary rounded-lg">
                        <div class="turma-a border-right border-secondary w-50 h-100">
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);" onclick="exclude(this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                        </div>
                        <div class="turma-b w-50 h-100">
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="day w-15 h-100 mx-auto d-flex flex-column">
                    <h2 class="w-100 text-center">Ter</h2>
                    <div class="container w-100 d-flex p-0 border border-secondary rounded-lg">
                        <div class="turma-a border-right border-secondary w-50 h-100">
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                        </div>
                        <div class="turma-b w-50 h-100">
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="day w-15 h-100 mx-auto d-flex flex-column">
                    <h2 class="w-100 text-center">Qua</h2>
                    <div class="container w-100 d-flex p-0 border border-secondary rounded-lg">
                        <div class="turma-a border-right border-secondary w-50 h-100">
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                        </div>
                        <div class="turma-b w-50 h-100">
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="day w-15 h-100 mx-auto d-flex flex-column">
                    <h2 class="w-100 text-center">Qui</h2>
                    <div class="container w-100 d-flex p-0 border border-secondary rounded-lg">
                        <div class="turma-a border-right border-secondary w-50 h-100">
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                        </div>
                        <div class="turma-b w-50 h-100">
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="day w-15 h-100 mx-auto d-flex flex-column">
                    <h2 class="w-100 text-center">Sex</h2>
                    <div class="container w-100 d-flex p-0 border border-secondary rounded-lg">
                        <div class="turma-a border-right border-secondary w-50 h-100">
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                        </div>
                        <div class="turma-b w-50 h-100">
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-bottom border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                            <div class="w-100 h-25 border-secondary d-flex justify-content-center">
                                <div class="dropup">
                                    <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                            <img class="opacity-20" src="../img/docente.png" alt="">
                                            <img class="opacity-20" src="../img/ambiente.png" alt="">
                                            <img class="opacity-20" src="../img/equipamento.png" alt="">
                                        </div>
                                    </div>
                                    <div class="dropdown-menu border border-secondary p-2 mb-1">
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/docente.png" alt="docente">
                                                Kleber Gelli
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/ambiente.png" alt="ambiente">
                                                Lab-64
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                        <div class="d-flex w-100">
                                            <div class="flex-fill align-items-center">
                                                <img class="mr-1" src="../img/equipamento.png" alt="equipamento">
                                                Datashow
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <img src="../img/x.png" alt="" height="16px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="h-100 flex-fill d-flex align-items-center justify-content-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="day w-18 d-flex flex-column">
                    <h4 class="text-center">Segunda</h4>
                    <div class="w-100 cont d-flex">
                        <div class="w-50 h-100 turma-a d-flex flex-column align-items-center">
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        </div>
                        <div class="w-50 h-100 turma-b d-flex flex-column align-items-center">
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        </div>
                    </div>
                    <div class="w-100 p-2 d-flex align-items-center justify-content-around">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                    <div class="w-100 px-2 d-flex align-items-center justify-content-around">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div>
                <div class="day w-18 d-flex flex-column">
                    <h4 class="text-center">Terça</h4>
                    <div class="w-100 cont d-flex">
                        <div class="w-50 h-100 turma-a d-flex flex-column align-items-center">
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        </div>
                        <div class="w-50 h-100 turma-b d-flex flex-column align-items-center">
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        </div>
                    </div>
                    <div class="w-100 p-2 d-flex align-items-center justify-content-around">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                    <div class="w-100 px-2 d-flex align-items-center justify-content-around">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div>
                <div class="day w-18 d-flex flex-column">
                    <h4 class="text-center">Quarta</h4>
                    <div class="w-100 cont d-flex">
                        <div class="w-50 h-100 turma-a d-flex flex-column align-items-center">
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        </div>
                        <div class="w-50 h-100 turma-b d-flex flex-column align-items-center">
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        </div>
                    </div>
                    <div class="w-100 p-2 d-flex align-items-center justify-content-around">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                    <div class="w-100 px-2 d-flex align-items-center justify-content-around">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div>
                <div class="day w-18 d-flex flex-column">
                    <h4 class="text-center">Quinta</h4>
                    <div class="w-100 cont d-flex">
                        <div class="w-50 h-100 turma-a d-flex flex-column align-items-center">
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        </div>
                        <div class="w-50 h-100 turma-b d-flex flex-column align-items-center">
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        </div>
                    </div>
                    <div class="w-100 p-2 d-flex align-items-center justify-content-around">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                    <div class="w-100 px-2 d-flex align-items-center justify-content-around">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div>
                <div class="day w-18 d-flex flex-column">
                    <h4 class="text-center">Sexta</h4>
                    <div class="w-100 cont d-flex">
                        <div class="w-50 h-100 turma-a d-flex flex-column align-items-center">
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        </div>
                        <div class="w-50 h-100 turma-b d-flex flex-column align-items-center">
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                            <div class="bg-white w-100 h-25 my-1 border border-dark text-center align-items-center" ondragover="letsDrop(event);" ondrop="drop(event, this);"></div>
                        </div>
                    </div>
                    <div class="w-100 p-2 d-flex align-items-center justify-content-around">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                    <div class="w-100 px-2 d-flex align-items-center justify-content-around">
                        <div class="col-5 bg-light docente text-center">Kge</div>
                        <div class="col-5 bg-light docente text-center">Kge</div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="side-ctn w-100 d-flex align-items-center justify-content-lg-around my-3">
            <div class="side h-100 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Docentes</h4>
                    <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                        <div class="w-65 side-item bg-white text-center" draggable="true" id='test' ondragstart="drag(event);">Kge</div>
                        <div class="w-65 side-item bg-white text-center" draggable="true" id='test1' ondragstart="drag(event);" data-toggle="tooltip" data-placement="bottom" title="Welligton Joffrey">Big Welder</div>
                        <div class="w-65 side-item bg-white text-center" draggable="true" id='test2' ondragstart="drag(event);" data-toggle="tooltip" data-placement="bottom" title="Migirica Senpai">Marcio</div>
                        <div class="w-65 side-item bg-white text-center" draggable="true" id='test3' ondragstart="drag(event);">Tia da cantina</div>
                        <div class="w-65 side-item bg-white text-center" draggable="true" id='test4' ondragstart="drag(event);">Baratão do Paulo</div>
                        <div class="w-65 side-item bg-white text-center" draggable="true" id='test5' ondragstart="drag(event);" data-toggle="tooltip" data-placement="bottom" title="Gay">Breno</div>
                    </div>
                </div>
            <div class="side h-100 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Ambientes</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='test' ondragstart="drag(event);">Kge</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='test' ondragstart="drag(event);">Kge</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='test' ondragstart="drag(event);">Kge</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='test' ondragstart="drag(event);">Kge</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='test' ondragstart="drag(event);">Kge</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='test' ondragstart="drag(event);">Kge</div>
                </div>
            </div>
            <div class="side h-100 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">Equipamentos</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='test' ondragstart="drag(event);">Kge</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='test' ondragstart="drag(event);">Kge</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='test' ondragstart="drag(event);">Kge</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='test' ondragstart="drag(event);">Kge</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='test' ondragstart="drag(event);">Kge</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='test' ondragstart="drag(event);">Kge</div>
                </div>
            </div>
            <div class="side h-100 w-18 d-flex flex-column align-items-center justify-content-center">
                <h4 class="text-center">UC's</h4>
                <div class="w-75 px-2 h-75 d-flex flex-column align-items-center overflow-overlay">
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='uc'ondragstart="drag(event); " data-toggle="tooltip" data-placement="bottom" title="Fundamentos de Programação Orientada a Objetos">FPOO</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='uc1'ondragstart="drag(event);">BDO</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='uc2'ondragstart="drag(event);">PWBE</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='uc3'ondragstart="drag(event);">INDMO</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='uc4'ondragstart="drag(event);">FRESA</div>
                    <div class="w-65 side-item bg-white text-center" draggable="true" id='uc5' ondragstart="drag(event);">BASQUETE</div>
                </div>
            </div>
        </div>
        <div class="w-50 d-flex align-items-center justify-content-around mx-auto mt-3 mb-4">
            <a type="button" class="btn btn-secondary col-5" href="{{Route('admin.opcaoHorario')}}">VOLTAR</a>
            <button class="btn btn-primary col-5">SALVAR</button>
        </div>
    </div>
@endsection