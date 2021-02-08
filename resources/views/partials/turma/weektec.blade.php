<div class="days h-100 w-100 d-flex justify-content-around">
    <div class="h-ctn w-6 h-100 d-flex flex-column ml-1">
        <h2 class="w-100 text-center">&nbsp</h2>
        <form class="aulas d-flex flex-column w-100 flex-fill">
            @for ($i = 0; $i < 5; $i++)
            <div id="ha-{{$i+1}}" class="h-20 w-100 d-flex flex-column align-items-center justify-content-center">
                <input type="time" class="border border-secondary rounded-lg inicio text-center w-100">
                <input type="time" class="border border-secondary rounded-lg fim text-center w-100 mt-1">
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
    <div class="day w-18 h-100 mx-auto d-flex flex-column" id="{{$day}}">
        <h2 class="w-100 text-center">{{$day}}</h2>
        <div class="container w-100 d-flex flex-fill p-0 border border-secondary rounded-lg">
            <div class="turma-a border-right border-secondary w-50 h-100">
                @for ($i = 0; $i < 5; $i++)
                <div id="aula-{{$j*10+$i+1}}" class="aula w-100 h-20 @if($i < 4) border-bottom @endif border-secondary d-flex flex-column justify-content-center" draggable="true" ondragstart="drag(event);" ondrop="drop(event, this);" ondragover="letsDrop(event);">
                    <form id="form-{{$j*10+$i+1}}" action="#" method="POST">
                        @csrf
                        <input type="text" id="aula-{{$j*10+$i+1}}-1" name="turmaSigla" value="{{$turma->siglaTurma}}" hidden>
                        <input type="text" id="aula-{{$j*10+$i+1}}-2" name="diaSemana" value="{{$day}}" hidden>
                        <input type="text" id="aula-{{$j*10+$i+1}}-3" name="periodo" value="{{$turma->periodo}}" hidden>
                        <input type="time" id="aula-{{$j*10+$i+1}}-4" name="horaInicio" value="" hidden>
                        <input type="time" id="aula-{{$j*10+$i+1}}-5" name="horaFim" value="" hidden>
                        <input type="number" id="aula-{{$j*10+$i+1}}-6" name="aula" value="{{$i+1}}" hidden>
                        <input type="text" id="aula-{{$j*10+$i+1}}-7" name="turma" value="a" hidden>
                        <input type="number" id="aula-{{$j*10+$i+1}}-8" name="idDocente" value="" hidden>
                        <input type="number" id="aula-{{$j*10+$i+1}}-9" name="idAmbiente" value="" hidden>
                        <input type="number" id="aula-{{$j*10+$i+1}}-10" name="idUc" value="" hidden>
                        <input type="number" id="aula-{{$j*10+$i+1}}-11" name="idEquipamento" value="" hidden>
                    </form>
                    <div class="dropup w-100 px-1 d-flex justify-content-between align-items-center">
                        <div class="drop-ctn d-flex align-items-center justify-content-between" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="icon eqp" ondblclick="exclude(this);">
                                <img class="m-0 opacity-20" src="/img/equipamento.png">
                            </div>
                        </div>
                        <div class="icon amb" ondblclick="exclude(this);">
                            <img class="m-0 opacity-20" src="/img/ambiente.png">
                        </div>
                        <div class="dropdown-menu border border-secondary p-2 m-0">
                            <div class="linha eqp d-flex w-100">
                                <div class="recurso eqp d-flex flex-fill align-items-center">
                                    <img class="mr-1" src="/img/equipamento.png" alt="equipamento">
                                    <p class="m-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="icon uc w-100 flex-fill d-flex align-items-center justify-content-center text-center" ondblclick="exclude(this);">
                        <img src="/img/uc.png" class="p-1 opacity-20">
                    </div>
                    <div class="icon doc w-100 p-1 d-flex align-items-center justify-content-center" ondblclick="exclude(this);">
                        <img class="p-1 opacity-20" src="/img/docente.png" alt="">
                    </div>
                </div>
                @endfor
            </div>
            <div class="turma-b border-secondary w-50 h-100">
                @for ($i = 0; $i < 5; $i++)
                <div id="aula-{{$j*10+$i+6}}" class="aula w-100 h-20 @if($i < 4) border-bottom @endif border-secondary d-flex flex-column justify-content-center" draggable="true" ondragstart="drag(event);" ondrop="drop(event, this);" ondragover="letsDrop(event);">
                    <form id="form-{{$j*10+$i+6}}" action="#" method="POST">
                        @csrf
                        <input type="text" name="turmaSigla" value="{{$turma->siglaTurma}}" hidden>
                        <input type="text" name="diaSemana" value="{{$day}}" hidden>
                        <input type="text" name="periodo" value="{{$turma->periodo}}" hidden>
                        <input type="time" name="horaInicio" value="" hidden>
                        <input type="time" name="horaFim" value="" hidden>
                        <input type="number" name="aula" value="{{$i+1}}" hidden>
                        <input type="text" name="turma" value="b" hidden>
                        <input type="number" name="idDocente" value="" hidden>
                        <input type="number" name="idAmbiente" value="" hidden>
                        <input type="number" name="idUc" value="" hidden>
                    </form>
                    <div class="dropup w-100 px-1 d-flex justify-content-between align-items-center">
                        <div class="drop-ctn d-flex align-items-center justify-content-between" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="icon eqp" ondblclick="exclude(this);">
                                <img class="m-0 opacity-20" src="/img/equipamento.png">
                            </div>
                        </div>
                        <div class="icon amb" ondblclick="exclude(this);">
                            <img class="m-0 opacity-20" src="/img/ambiente.png">
                        </div>
                        <div class="dropdown-menu border border-secondary p-2 m-0">
                            <div class="linha eqp d-flex w-100">
                                <div class="recurso eqp d-flex flex-fill align-items-center">
                                    <img class="mr-1" src="/img/equipamento.png" alt="equipamento">
                                    <p class="m-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="icon uc w-100 flex-fill d-flex align-items-center justify-content-center text-center" ondblclick="exclude(this);">
                        <img src="/img/uc.png" class="p-1 opacity-20">
                    </div>
                    <div class="icon doc w-100 p-1 d-flex align-items-center justify-content-center" ondblclick="exclude(this);">
                        <img class="p-1 opacity-20" src="/img/docente.png" alt="">
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
    @endfor
</div>