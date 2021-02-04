function horario(el, tipo) {
    horarios = $('div.h-ctn').children('form');
    if(tipo == 'tec') {
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
    } else if (tipo = 'cai') {
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
    nodeCopy.id = "newId";
    nodeCopy.removeAttribute('draggable');
    if($(nodeCopy).hasClass('uc')) {
        $(el).children('.uc').html(nodeCopy.innerHTML);
    } else if($(nodeCopy).hasClass('docente')) {
        $(el).children('.doc').html("<p class='m-0'><small>"+nodeCopy.innerHTML+"</p></small>");    
    } else if($(nodeCopy).hasClass('ambiente')) {
        $(el).children('.dropup').children('.icon.amb').html("<p class='m-0'><small>"+nodeCopy.innerHTML+"</p></small>");
    } else if($(nodeCopy).hasClass('equipamento')) {
        $(el).children('.dropup').children('.drop-ctn').children('.icon.eqp').children('img').removeClass('opacity-20');
        $(el).children('.dropup').children('.dropdown-menu').children('.linha').children('.recurso.eqp').children('p').text(nodeCopy.innerHTML);
    } else if($(nodeCopy).hasClass('aula')) {
        $(el).html($(nodeCopy).html());
    }
    
}

function exclude(el){
    if($(el).hasClass('icon')) {
        if($(el).hasClass('doc')) {
            $(el).html("<img class='p-1 opacity-20' src='img/docente.png' alt=''>");
        } else if($(el).hasClass('amb')) {
            $(el).html("<img class='m-0 opacity-20' src='img/ambiente.png'>");
        } else if($(el).hasClass('eqp')) {
            $(el).children('img').addClass('opacity-20');
            $(el).parent().parent().children('.dropdown-menu').children('.linha').children('.recurso').children('p').text("");
        } else if($(el).hasClass('uc')) {
            $(el).html("<img src='img/uc.png' class='p-1 opacity-20'></img>");
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

    if(recursoTipo == "docente"){
        document.getElementById("msgExcludeDoc").innerHTML = " Tem certeza que deseja excluir o docente <strong>"+ recursoNome+ " " + recursoSobrenome +"</strong>?";

        $("#btnExcludeDoc").attr("href","http://app-laravel.test/editar/deletar/"+recursoTipo+"/"+recursoId);

    } else if(recursoTipo == "ambiente"){
        document.getElementById("msgExcludeAmb").innerHTML = 
        "Tem certeza que deseja excluir o ambiente <strong>"+ recursoNome + "-" + recursoSobrenome + "</strong>?";
        $("#btnExcludeAmb").attr("href","http://app-laravel.test/editar/deletar/"+recursoTipo+"/"+recursoId);
        
    } else if(recursoTipo == "equip"){
        document.getElementById("msgExcludeEqp").innerHTML = 
        "Tem certeza que deseja excluir o equipamento <strong>" + recursoNome + " - " + recursoSobrenome +"</strong>?";
        $("#btnExcludeEqp").attr("href","http://app-laravel.test/editar/deletar/"+recursoTipo+"/"+recursoId);

    }

}