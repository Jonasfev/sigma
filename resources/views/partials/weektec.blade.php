<div class="days h-100 w-100 d-flex justify-content-around">
    <div class="h-ctn w-8 h-100 d-flex flex-column ml-1">
        <h2 class="w-100 text-center">Aulas</h2>
        <form class="aulas d-flex flex-column w-100 flex-fill">
            @for ($i = 0; $i < 5; $i++)
            <div id="ha-{{$i+1}}" class="h-20 w-100 d-flex flex-column align-items-center justify-content-center">
                <div class="border border-secondary rounded-lg inicio text-center w-100">0</div>
                <div class="border border-secondary rounded-lg fim text-center w-100 mt-1">0</div>
            </div>
            @endfor
        </form>
    </div>
    @for ($j = 0; $j < 5; $j++)
        @switch($j)
            @case(0)
                @php
                    $day = "Seg";
                 @endphp
            @break
            @case(1)
                @php
                $day = "Ter";
                @endphp
                @break
            @case(2)
                @php
                    $day = "Qua";
                @endphp
                @break
            @case(3)
                @php
                    $day = "Qui";
                @endphp
                @break
            @case(4)
                @php
                    $day = "Sex";
                @endphp
                @break                            
        @endswitch
    <div class="day w-17 h-100 mx-auto d-flex flex-column" id="{{$day}}">
        <h2 class="w-100 text-center">{{$day}}</h2>
        <div class="container w-100 d-flex flex-fill p-0 border border-secondary rounded-lg">
            <div class="turma-a border-right border-secondary w-50 h-100">
                @for ($i = 0; $i < 5; $i++)
                <div id="aula-{{$j*10+$i+1}}" class="aula w-100 h-20 @if($i < 4) border-bottom @endif border-secondary d-flex justify-content-center" draggable="true" ondragstart="drag(event);" ondrop="drop(event, this);" ondragover="letsDrop(event);">
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
                @for ($i = 0; $i < 5; $i++)
                <div id="aula-{{$j*10+$i+6}}" class="aula w-100 h-20 @if($i < 4) border-bottom @endif border-secondary d-flex justify-content-center" draggable="true" ondragstart="drag(event);" ondrop="drop(event, this);" ondragover="letsDrop(event);">
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
    </div>
    @endfor
</div>