@extends('partials.turma.cai')

@section('cai/tec')
    <h1 class="text-center m-2">Turma CAI</h1>
@endsection

@section('day')
        <div class="container w-100 d-flex flex-fill p-0 border border-secondary rounded-lg">
            <div class="turma-a border-right border-secondary w-50 h-100">
                @for ($i = 0; $i < 4; $i++)
                <div class="aula-{{$i+1}} w-100 h-25 @if($i < 3) border-bottom @endif border-secondary d-flex justify-content-center" ondrop="drop(event, this);" ondragover="letsDrop(event);">
                    <div class="dropup">
                        <div class="drop-ctn h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="icons h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                <img class="icon doc opacity-20" src="img/docente.png" alt="" ondblclick="exclude(this);">
                                <img class="icon amb opacity-20" src="img/ambiente.png" alt=""ondblclick="exclude(this);">
                                <img class="icon eqp opacity-20" src="img/equipamento.png" alt=""ondblclick="exclude(this);">
                            </div>
                        </div>
                        <div class="dropdown-menu border border-secondary p-2 mb-1">
                            <div class="linha d-flex w-100">
                                <div class="recurso doc d-flex flex-fill align-items-center">
                                    <img class="mr-1" src="img/docente.png" alt="docente">
                                    <p class="m-0"></p>
                                </div>
                            </div>
                            <div class="linha d-flex w-100">
                                <div class="recurso amb d-flex flex-fill align-items-center">
                                    <img class="mr-1" src="img/ambiente.png" alt="ambiente">
                                    <p class="m-0"></p>
                                </div>
                            </div>
                            <div class="linha eqp d-flex w-100">
                                <div class="recurso eqp d-flex flex-fill align-items-center">
                                    <img class="mr-1" src="img/equipamento.png" alt="equipamento">
                                    <p class="m-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uc h-100 d-flex align-items-center justify-content-center flex-fill text-center" ondblclick="exclude(this);">
                        
                    </div>
                </div>
                @endfor
            </div>
            <div class="turma-b border-secondary w-50 h-100">
                @for ($i = 0; $i < 4; $i++)
                <div class="aula-{{$i+1}} w-100 h-25 @if($i < 3) border-bottom @endif border-secondary d-flex justify-content-center" ondrop="drop(event, this);" ondragover="letsDrop(event);">
                    <div class="dropup">
                        <div class="drop-ctn h-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="icons h-100 pb-2 ml-1 mt-1 d-flex flex-column align-items-center justify-content-around">
                                <img class="icon doc opacity-20" src="img/docente.png" alt="" ondblclick="exclude(this);">
                                <img class="icon amb opacity-20" src="img/ambiente.png" alt=""ondblclick="exclude(this);">
                                <img class="icon eqp opacity-20" src="img/equipamento.png" alt=""ondblclick="exclude(this);">
                            </div>
                        </div>
                        <div class="dropdown-menu border border-secondary p-2 mb-1">
                            <div class="linha d-flex w-100">
                                <div class="recurso doc d-flex flex-fill align-items-center">
                                    <img class="mr-1" src="img/docente.png" alt="docente">
                                    <p class="m-0"></p>
                                </div>
                            </div>
                            <div class="linha d-flex w-100">
                                <div class="recurso amb d-flex flex-fill align-items-center">
                                    <img class="mr-1" src="img/ambiente.png" alt="ambiente">
                                    <p class="m-0"></p>
                                </div>
                            </div>
                            <div class="linha eqp d-flex w-100">
                                <div class="recurso eqp d-flex flex-fill align-items-center">
                                    <img class="mr-1" src="img/equipamento.png" alt="equipamento">
                                    <p class="m-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uc h-100 d-flex align-items-center justify-content-center flex-fill text-center" ondblclick="exclude(this);">
                        
                    </div>
                </div>
                @endfor
            </div>
        </div>
@endsection