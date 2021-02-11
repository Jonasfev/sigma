const { getJSON } = require("jquery");

function horarioTurma(val, tipo) {
    if(tipo == 'TEC') {
        switch (val) {
            case "manha":
                entrada = '07:30';
                saida = '08:15';                 
                break;
            case "tarde":
                entrada = '13:30';
                saida = '14:15';                
                break;
            case "noite":
                entrada = '18:45';
                saida = '19:30';                
                break;
        }

    } else if (tipo = 'CAI') {
        switch (val) {
            case "manha":
                entrada = '07:30';
                saida = '08:15';                
                break;
            case "tarde":
                entrada = '13:30';
                saida = '14:15';                
                break;
        }
    }

    $('#entrada').attr('value', entrada);
    $('#saida').attr('value', saida);

}

function horarioTurma(val) {

    switch (val) {
        case "manha":
            entrada = '07:30';
            saida = '08:15';                 
            break;
        case "tarde":
            entrada = '13:30';
            saida = '14:15';                
            break;
        case "noite":
            entrada = '18:45';
            saida = '19:30';                
            break;
    }    

    $('#entrada').attr('value', entrada);
    $('#saida').attr('value', saida);

}

function horario(el, tipo) {


    horarios = $('div.h-ctn').children('form');

    if(tipo == 'TEC') {
        switch (el) {
            case "manha":
                $(horarios).children('#ha-1').children('.inicio').attr('value', '07:30');
                $(horarios).children('#ha-1').children('.fim').attr('value', '08:15');
                $(horarios).children('#ha-2').children('.inicio').attr('value', '08:15');
                $(horarios).children('#ha-2').children('.fim').attr('value', '09:00');
                $(horarios).children('#ha-3').children('.inicio').attr('value', '09:15');
                $(horarios).children('#ha-3').children('.fim').attr('value', '10:00');
                $(horarios).children('#ha-4').children('.inicio').attr('value', '10:00');
                $(horarios).children('#ha-4').children('.fim').attr('value', '10:45');
                $(horarios).children('#ha-5').children('.inicio').attr('value', '10:45');
                $(horarios).children('#ha-5').children('.fim').attr('value', '11:30');
                break;
            case "tarde":
                $(horarios).children('#ha-1').children('.inicio').attr('value', '13:30');
                $(horarios).children('#ha-1').children('.fim').attr('value', '14:15');
                $(horarios).children('#ha-2').children('.inicio').attr('value', '14:15');
                $(horarios).children('#ha-2').children('.fim').attr('value', '15:00');
                $(horarios).children('#ha-3').children('.inicio').attr('value', '15:15');
                $(horarios).children('#ha-3').children('.fim').attr('value', '16:00');
                $(horarios).children('#ha-4').children('.inicio').attr('value', '16:00');
                $(horarios).children('#ha-4').children('.fim').attr('value', '16:45');
                $(horarios).children('#ha-5').children('.inicio').attr('value', '16:45');
                $(horarios).children('#ha-5').children('.fim').attr('value', '17:30');
                break;
            case "noite":
                $(horarios).children('#ha-1').children('.inicio').attr('value', '18:45');
                $(horarios).children('#ha-1').children('.fim').attr('value', '19:30');
                $(horarios).children('#ha-2').children('.inicio').attr('value', '19:30');
                $(horarios).children('#ha-2').children('.fim').attr('value', '20:15');
                $(horarios).children('#ha-3').children('.inicio').attr('value', '20:30');
                $(horarios).children('#ha-3').children('.fim').attr('value', '21:15');
                $(horarios).children('#ha-4').children('.inicio').attr('value', '21:15');
                $(horarios).children('#ha-4').children('.fim').attr('value', '22:00');
                $(horarios).children('#ha-5').children('.inicio').attr('value', '22:00');
                $(horarios).children('#ha-5').children('.fim').attr('value', '22:45');
                break;
        }

        for(i=1;i<=5;i++) {
            atualizaHorario(i, $('#ha-'+i).children('input.inicio'), 'TEC');
            atualizaHorario(i, $('#ha-'+i).children('input.fim'), 'TEC');
        }

    } else if (tipo = 'CAI') {
        switch (el) {
            
            case "manha":
                $(horarios).children('#ha-1').children('.inicio').attr('value', '07:30');
                $(horarios).children('#ha-1').children('.fim').attr('value', '08:25');
                $(horarios).children('#ha-2').children('.inicio').attr('value', '08:25');
                $(horarios).children('#ha-2').children('.fim').attr('value', '09:20');
                $(horarios).children('#ha-3').children('.inicio').attr('value', '09:40');
                $(horarios).children('#ha-3').children('.fim').attr('value', '10:35');
                $(horarios).children('#ha-4').children('.inicio').attr('value', '10:35');
                $(horarios).children('#ha-4').children('.fim').attr('value', '11:30');
                
                break;
            case "tarde":
                $(horarios).children('#ha-1').children('.inicio').attr('value', '13:30');
                $(horarios).children('#ha-1').children('.fim').attr('value', '14:25');
                $(horarios).children('#ha-2').children('.inicio').attr('value', '14:25');
                $(horarios).children('#ha-2').children('.fim').attr('value', '15:20');
                $(horarios).children('#ha-3').children('.inicio').attr('value', '15:40');
                $(horarios).children('#ha-3').children('.fim').attr('value', '16:35');
                $(horarios).children('#ha-4').children('.inicio').attr('value', '16:35');
                $(horarios).children('#ha-4').children('.fim').attr('value', '17:30');
                break;
        }

        for(i=1;i<=4;i++) {
            atualizaHorario(i, $('#ha-'+i).children('input.inicio'), 'CAI');
            atualizaHorario(i, $('#ha-'+i).children('input.fim'), 'CAI');
        }

    }

}

function atualizaHorario(nAula, el, tipo) {

    if(tipo == 'TEC') {
        if($(el).hasClass('inicio')){
            for (j=0; j<5; j++) {
                $('input#aula-'+(j*10+nAula)+'-4').attr('value', $(el).val());    
                $('input#aula-'+(j*10+nAula+5)+'-4').attr('value', $(el).val());
            }
        } else {
            for (j=0; j<5; j++) {
                $('input#aula-'+(j*10+nAula)+'-5').attr('value', $(el).val());    
                $('input#aula-'+(j*10+nAula+5)+'-5').attr('value', $(el).val());
            }
        }
    } else if(tipo == 'CAI') {
        if($(el).hasClass('inicio')){
            for (j=0; j<5; j++) {
                $('input#aula-'+(j*8+nAula)+'-4').attr('value', $(el).val());    
                $('input#aula-'+(j*8+nAula+4)+'-4').attr('value', $(el).val());
            }
        } else {
            for (j=0; j<5; j++) {
                $('input#aula-'+(j*8+nAula)+'-5').attr('value', $(el).val());    
                $('input#aula-'+(j*8+nAula+4)+'-5').attr('value', $(el).val());
            }
        }
    }
    
}

function constroiReservas(reservas, tipo) {

    if(tipo == 'CAI') {
        s1 = 8;
        s2 = 4;
    } else if(tipo == 'TEC') {
        s1 = 10;
        s2 = 5;
    }

    console.log(reservas);
    for(var reserva in reservas) {
        switch(reservas[reserva].diaSemana) {
            case 'Seg':
                j = 0;
                break;
            case 'Ter':
                j = 1;
                break;
            case 'Qua':
                j = 2;
                break;
            case 'Qui':
                j = 3;
                break;
            case 'Sex':
                j = 4;
                break;
        }

        i = reservas[reserva].aula;
        
        aula = j*s1+i; 
    
        if(reservas[reserva].turma == 'b') {
            aula = j*s1+i+s2;
        }

        aula = '#aula-' + aula;

        console.log(i);

        $(aula+'-1').attr('value', reservas[reserva].idTurma);
        $(aula+'-2').attr('value', reservas[reserva].diaSemana);
        $(aula+'-3').attr('value', reservas[reserva].periodo);
        $(aula+'-4').attr('value', reservas[reserva].horaInicio);
        $(aula+'-5').attr('value', reservas[reserva].horaFim);
        $(aula+'-6').attr('value', reservas[reserva].aula);
        $(aula+'-7').attr('value', reservas[reserva].turma);

        if( reservas[reserva].idDocente != null){
            $(aula+'-8').attr('value', reservas[reserva].idDocente);
            $(aula).children('.doc').text($('#doc-' + reservas[reserva].idDocente).children('p').text());
        }
        if( reservas[reserva].idAmbiente != null){
            $(aula+'-9').attr('value', reservas[reserva].idAmbiente);
            $(aula).children('.dropup').children('.amb').text($('#amb-' + reservas[reserva].idAmbiente).children('p').text());}

        if( reservas[reserva].idUc != null){
            $(aula+'-10').attr('value', reservas[reserva].idUc);
            $(aula).children('.uc').text($('#uc-' + reservas[reserva].idUc).children('p').text());
        }
        
        if( reservas[reserva].idEquipamento != null){
            $(aula+'-11').attr('value', reservas[reserva].idEquipamento);
            $(aula).children('.dropup').children('.drop-ctn').children('.eqp').children('img').removeClass('opacity-20');
            $(aula).children('.dropup').children('.dropdown-menu').children('.linha').children('.eqp').children('p').text($('#eqp-' + reservas[reserva].idEquipamento).children('p').text());
        }

    }
    
}

function drag(ev){
    ev.dataTransfer.setData('srcID', ev.target.id);
}

function letsDrop(ev){  
    ev.preventDefault();
}

var node;

function drop(ev, el){
   
    ev.preventDefault();
    var data = ev.dataTransfer.getData('srcID');
    var nodeCopy = document.getElementById(data).cloneNode(true);
    nodeCopy.removeAttribute('draggable');
    if($(nodeCopy).hasClass('uc')) {
        $(el).children('.uc').html(nodeCopy.innerHTML);
        $(el).children('form').children('input#'+el.id+'-10').attr('value', $(nodeCopy).children('input').val());
    } else if($(nodeCopy).hasClass('docente')) {
        $(el).children('.doc').html("<p class='m-0'><small>"+nodeCopy.innerHTML+"</p></small>");
        console.log($(nodeCopy));    
        $(el).children('form').children('input#'+el.id+'-8').attr('value', $(nodeCopy).children('input').val());
    } else if($(nodeCopy).hasClass('ambiente' )) {
        $(el).children('.dropup').children('.icon.amb').html("<p class='m-0'><small>"+$(nodeCopy).children('p').text()+"</p></small>");
        $(el).children('form').children('input#'+el.id+'-9').attr('value', $(nodeCopy).children('input').val());
    } else if($(nodeCopy).hasClass('equipamento')) {
        $(el).children('.dropup').children('.drop-ctn').children('.icon.eqp').children('img').removeClass('opacity-20');
        $(el).children('form').children('input#'+el.id+'-11').attr('value', $(nodeCopy).children('input').val());
        $(el).children('.dropup').children('.dropdown-menu').children('.linha').children('.recurso.eqp').children('p').text($(nodeCopy).children('p').text());
    } else if($(nodeCopy).hasClass('aula')) {
        $(el).children('.uc').html($(nodeCopy).children('.uc').html());
        $(el).children('.doc').html($(nodeCopy).children('.doc').html()); 
        $(el).children('.dropup').children('.icon.amb').html($(nodeCopy).children('.dropup').children('.icon.amb').html());
        $(el).children('.dropup').children('.drop-ctn').children('.icon.eqp').html($(nodeCopy).children('.dropup').children('.drop-ctn').children('.icon.eqp').html());
        $(el).children('.dropup').children('.dropdown-menu').children('.linha').children('.recurso.eqp').children('p').text($(nodeCopy).children('.dropup').children('.dropdown-menu').children('.linha').children('.recurso.eqp').children('p').text());
        
        $(el).children('form').children('input#'+el.id+'-8').attr('value', $(nodeCopy).children('form').children('input#'+nodeCopy.id+'-8').val());
        $(el).children('form').children('input#'+el.id+'-9').attr('value', $(nodeCopy).children('form').children('input#'+nodeCopy.id+'-9').val());
        $(el).children('form').children('input#'+el.id+'-10').attr('value', $(nodeCopy).children('form').children('input#'+nodeCopy.id+'-10').val());
        $(el).children('form').children('input#'+el.id+'-11').attr('value', $(nodeCopy).children('form').children('input#'+nodeCopy.id+'-11').val());
    }
    
}

function exclude(el){
    if($(el).hasClass('icon')) {
        if($(el).hasClass('doc')) {
            $(el).parent().children('form').children('input#'+$(el).parent().attr('id')+'-8').attr('value', '');
            $(el).html("<img class='p-1 opacity-20' src='/img/docente.png' alt=''>");
        } else if($(el).hasClass('amb')) {
            $(el).parent().parent().children('form').children('input#'+$(el).parent().parent().attr('id')+'-9').attr('value', '');
            $(el).html("<img class='m-0 opacity-20' src='/img/ambiente.png'>");
        } else if($(el).hasClass('eqp')) {
            $(el).parent().parent().parent().children('form').children('input#'+$(el).parent().parent().parent().attr('id')+'-11').attr('value', '');
            $(el).children('img').addClass('opacity-20');
            $(el).parent().parent().children('.dropdown-menu').children('.linha').children('.recurso').children('p').text("");
        } else if($(el).hasClass('uc')) {
            $(el).parent().children('form').children('input#'+$(el).parent().attr('id')+'-10').attr('value', '');
            $(el).html("<img src='/img/uc.png' class='p-1 opacity-20'></img>");
        }
    }
}

let input = document.querySelector('input');


function fileNameWrite(){
    document.getElementById('fileName').innerHTML = document.querySelector('input[type=file]').files[0].name;
}


$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})


function modalExclude(recursoId, recursoNome, recursoSobrenome, recursoTipo){

    switch(recursoTipo) {
        case 'docente':
            document.getElementById("msgExclude").innerHTML = "Tem certeza que deseja excluir o docente <strong>" + recursoNome+ " " + recursoSobrenome +"</strong>?";
            break;
        case 'ambiente':
            document.getElementById("msgExclude").innerHTML = "Tem certeza que deseja excluir o ambiente <strong>" + recursoNome + " - " + recursoSobrenome + "</strong>?";
            break;
        case 'equipamento':
            document.getElementById("msgExclude").innerHTML = "Tem certeza que deseja excluir o equipamento <strong>" + recursoNome + " - " + recursoSobrenome +"</strong>?";
            break;
        case 'uc':
            document.getElementById("msgExclude").innerHTML = "Tem certeza que deseja excluir a UC <strong>" + recursoNome + " - " + recursoSobrenome +"</strong>?";
            break;
        case 'curso':
            document.getElementById("msgExclude").innerHTML = "Tem certeza que deseja excluir o curso <strong>" + recursoNome + " - " + recursoSobrenome +"</strong>?";
            break;
        case 'turma':
            document.getElementById("msgExclude").innerHTML = "Tem certeza que deseja excluir a turma <strong>" + recursoNome + " - " + recursoSobrenome +"</strong>?";
            break;
    }

    
    $("input#tipoRecurso").attr("value", recursoTipo);
    $("input#idRecurso").attr("value", recursoId);
}
