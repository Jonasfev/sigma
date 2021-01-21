@extends('partials.turma')
@section('day')
        <div class="container w-100 d-flex flex-fill p-0 border border-secondary rounded-lg">
            <div class="turma-a border-right border-secondary w-50 h-100">
                @for ($i = 0; $i < 4; $i++)
                <div class="aula-{{$i+1}} w-100 h-25 @if($i < 3) border-bottom @endif border-secondary d-flex justify-content-center" ondrop="drop(ev, this);" ondragover="letsDrop(ev);">
                    <div class="dropup">
                        <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                <img class="opacity-20" src="img/docente.png" alt="">
                                <img class="opacity-20" src="img/ambiente.png" alt="">
                                <img class="opacity-20" src="img/equipamento.png" alt="">
                            </div>
                        </div>
                        <div class="dropdown-menu border border-secondary p-2 mb-1">
                            <div class="d-flex w-100">
                                <div class="flex-fill align-items-center">
                                    <img class="mr-1" src="img/docente.png" alt="docente">
                                    Kleber Gelli
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="img/x.png" alt="" height="16px">
                                </div>
                            </div>
                            <div class="d-flex w-100">
                                <div class="flex-fill align-items-center">
                                    <img class="mr-1" src="img/ambiente.png" alt="ambiente">
                                    Lab-64
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="img/x.png" alt="" height="16px">
                                </div>
                            </div>
                            <div class="d-flex w-100">
                                <div class="flex-fill align-items-center">
                                    <img class="mr-1" src="img/equipamento.png" alt="equipamento">
                                    Datashow
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="img/x.png" alt="" height="16px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-auto flex-fill">
                        UC
                    </div>
                </div>
                @endfor
            </div>
            <div class="turma-b w-50 h-100">
                @for ($i = 0; $i < 4; $i++)
                <div class="aula-{{$i+1}} w-100 h-25 @if($i < 3) border-bottom @endif border-secondary d-flex justify-content-center" ondrop="drop(ev, this);" ondragover="letsDrop(ev);">
                    <div class="dropup">
                        <div class="h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                <img class="opacity-20" src="img/docente.png" alt="">
                                <img class="opacity-20" src="img/ambiente.png" alt="">
                                <img class="opacity-20" src="img/equipamento.png" alt="">
                            </div>
                        </div>
                        <div class="dropdown-menu border border-secondary p-2 mb-1">
                            <div class="d-flex w-100">
                                <div class="flex-fill align-items-center">
                                    <img class="mr-1" src="img/docente.png" alt="docente">
                                    Kleber Gelli
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="img/x.png" alt="" height="16px">
                                </div>
                            </div>
                            <div class="d-flex w-100">
                                <div class="flex-fill align-items-center">
                                    <img class="mr-1" src="img/ambiente.png" alt="ambiente">
                                    Lab-64
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="img/x.png" alt="" height="16px">
                                </div>
                            </div>
                            <div class="d-flex w-100">
                                <div class="flex-fill align-items-center">
                                    <img class="mr-1" src="img/equipamento.png" alt="equipamento">
                                    Datashow
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="img/x.png" alt="" height="16px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-auto flex-fill">
                        UC
                    </div>
                </div>
                @endfor
            </div>
        </div>
@endsection