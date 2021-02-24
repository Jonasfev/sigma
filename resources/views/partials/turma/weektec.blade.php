{{-- criação do layout das aulas do tecnico para a criacão do horario --}}
{{-- mostra o horario do periodo da turma --}}
<div class="days h-100 w-100 d-flex justify-content-around">
    <div class="h-ctn w-6 h-95 pt-2 d-flex flex-column mt-4 ml-1">
        <h2 class="w-100 text-center">&nbsp</h2>
        <form class="aulas d-flex flex-column w-100 flex-fill">
            @for ($i = 0; $i < 5; $i++)
            <div id="ha-{{$i+1}}" class="h-20 w-100 d-flex flex-column align-items-center justify-content-center">
                <input type="time" class="border border-secondary rounded-lg inicio text-center w-100" onchange="atualizaHorario({{$i+1}}, this, 'TEC')" value="00:00">
                <input type="time" class="border border-secondary rounded-lg fim text-center w-100 mt-1" onchange="atualizaHorario({{$i+1}}, this, 'TEC')" value="00:00">
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
    {{-- layout das aulas por dia da semana --}}
    <div class="day w-18 h-100 mx-auto d-flex flex-column" id="{{$day}}">
        <h2 class="w-100 text-center">{{$day}}</h2>
        <div class="row d-flex flex-row w-100 mx-auto">
            <div class="h5 mx-auto">A</div>
            <div class="h5 mx-auto">B</div>
        </div>
        <div class="container w-100 d-flex flex-fill p-0 border border-secondary rounded-lg">
            <div class="turma-a border-right border-secondary w-50 h-100">
                @for ($i = 0; $i < 5; $i++)
                <div id="aula-{{$j*10+$i+1}}" class="aula w-100 h-20 @if($i < 4) border-bottom @endif border-secondary d-flex flex-column justify-content-center" draggable="true" ondragstart="drag(event);" ondrop="drop(event, this);" ondragover="letsDrop(event);">
                    <form id="form-{{$j*10+$i+1}}" action="{{Route('admin.horario.store')}}" method="POST">
                        @csrf
                        <input type="text" id="aula-{{$j*10+$i+1}}-1" name="idTurma" value="{{$turma->id}}" hidden>
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
                    <form id="form-{{$j*10+$i+6}}" action="{{Route('admin.horario.store')}}" method="POST">
                        @csrf
                        <input type="text" id="aula-{{$j*10+$i+6}}-1" name="idTurma" value="{{$turma->id}}" hidden>
                        <input type="text" id="aula-{{$j*10+$i+6}}-2" name="diaSemana" value="{{$day}}" hidden>
                        <input type="text" id="aula-{{$j*10+$i+6}}-3" name="periodo" value="{{$turma->periodo}}" hidden>
                        <input type="time" id="aula-{{$j*10+$i+6}}-4" name="horaInicio" value="" hidden>
                        <input type="time" id="aula-{{$j*10+$i+6}}-5" name="horaFim" value="" hidden>
                        <input type="number" id="aula-{{$j*10+$i+6}}-6" name="aula" value="{{$i+1}}" hidden>
                        <input type="text" id="aula-{{$j*10+$i+6}}-7" name="turma" value="b" hidden>
                        <input type="number" id="aula-{{$j*10+$i+6}}-8" name="idDocente" value="" hidden>
                        <input type="number" id="aula-{{$j*10+$i+6}}-9" name="idAmbiente" value="" hidden>
                        <input type="number" id="aula-{{$j*10+$i+6}}-10" name="idUc" value="" hidden>
                        <input type="number" id="aula-{{$j*10+$i+6}}-11" name="idEquipamento" value="" hidden>
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

<script>
    //função para enviar todos os formularios de cada aula (todo o  conteudo alocado)
    function enviarForms(n) {
        
        $('#btnenviarform').prop("disabled",true).text("SALVANDO...");
        for(i=1;i<=n;i++) {
            var data = $('form#form-'+i);
            btnable = 1;
            $.ajax({
                url: "{{Route('admin.horario.store')}}",
                type: "post",
                data: data.serialize(),
                dataType: 'json',
            error: function(response) {
                $('#staticBackdrop').children('.modal-dialog').children('.modal-content').children('.save').text("SALVANDO: "+ btnable*2 + "%");
                btnable++;
                $('#btnenviarform').prop("disabled",true).text("AGUARDE..." );
                if(btnable == n+1){
                    $('#btnenviarform').prop("disabled",false).text("SALVAR");
                    $('#staticBackdrop').modal('hide');
                    alert("Deu erro :(");
                }  
            },
                success: function (response) {
                    $('#staticBackdrop').children('.modal-dialog').children('.modal-content').children('.save').text("SALVANDO: "+ btnable*2 + "%");
                    btnable++;
                    $('#btnenviarform').prop("disabled",true).text("AGUARDE..." );
                    if(btnable == n+1){
                        $('#btnenviarform').prop("disabled",false).text("SALVAR");
                        $('#staticBackdrop').modal('hide');
                    }  
                }
            }); 
        }
    }

    //função para ver se há imcompatibilade entre os recursos cadastrados (Uc/Docente, Uc/Ambiente)
    function getErrors(recId, aula, recTipo, idUc){
    isValid = true;
    
    const request = $.ajax({
        url: "/horario/check/"+recId+'/'+aula+'/'+recTipo+'/'+'{{$turma->periodo}}'+'/'+idUc,
        dataType: 'json',
        type: "get",
        
        error: function(response) {
           console.log('error', response);
        },
        success: function (response) {
            
            isValid = response['reserva'];
            isReserved = [];
            ucNotComp = response['return']['return'];
            isReserved.push(response['aulaReserva']);
            isReserved.push(response['diaReserva']);
            isReserved.push(response['turmaReserva']);  
            
        }
     
    }); 
}
</script>