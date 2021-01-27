function horario(el) {
    horarios = $('div.h-ctn').children('form');
    switch (el) {
        case "manha":
            $(horarios).children('#ha-1').children('.inicio').text('7:30h');
            $(horarios).children('#ha-1').children('.fim').text('8:15h');
            $(horarios).children('#ha-2').children('.inicio').text('8:15h');
            $(horarios).children('#ha-2').children('.fim').text('9:00h');
            $(horarios).children('#ha-3').children('.inicio').text('9:15h');
            $(horarios).children('#ha-3').children('.fim').text('10:00h');
            $(horarios).children('#ha-4').children('.inicio').text('10:00h');
            $(horarios).children('#ha-4').children('.fim').text('10:45h');
            $(horarios).children('#ha-5').children('.inicio').text('10:45h');
            $(horarios).children('#ha-5').children('.fim').text('11:30h');
            break;
        case "tarde":
            $(horarios).children('#ha-1').children('.inicio').text('13:30h');
            $(horarios).children('#ha-1').children('.fim').text('14:15h');
            $(horarios).children('#ha-2').children('.inicio').text('14:15');
            $(horarios).children('#ha-2').children('.fim').text('15:00h');
            $(horarios).children('#ha-3').children('.inicio').text('15:15h');
            $(horarios).children('#ha-3').children('.fim').text('16:00h');
            $(horarios).children('#ha-4').children('.inicio').text('16:00h');
            $(horarios).children('#ha-4').children('.fim').text('16:45h');
            $(horarios).children('#ha-5').children('.inicio').text('16:45h');
            $(horarios).children('#ha-5').children('.fim').text('17:30h');
            break;
        case "noite":
            $(horarios).children('#ha-1').children('.inicio').text('18:45h');
            $(horarios).children('#ha-1').children('.fim').text('19:30h');
            $(horarios).children('#ha-2').children('.inicio').text('19:30h');
            $(horarios).children('#ha-2').children('.fim').text('20:15h');
            $(horarios).children('#ha-3').children('.inicio').text('20:30h');
            $(horarios).children('#ha-3').children('.fim').text('21:15h');
            $(horarios).children('#ha-4').children('.inicio').text('21:15h');
            $(horarios).children('#ha-4').children('.fim').text('22:00h');
            $(horarios).children('#ha-5').children('.inicio').text('22:00h');
            $(horarios).children('#ha-5').children('.fim').text('22:45h');
            break;
    }
}

function drag(ev){
    ev.dataTransfer.setData('srcID', ev.target.id);
}

function letsDrop(ev){  
    ev.preventDefault();
}

function errorMsg(error){
    if(error == 0){
        $("#msg-btn-close").show(227);
        $("#lista-error").text('/!\\  • O docente xxxxx já está alocado na segunda no hórario hh:hh até as hh:hh • /!\\ ');   
    } else {
        $("#msg-btn-close").hide(227); 
    }
};



function drop(ev, el){
   
    ev.preventDefault();
    var data = ev.dataTransfer.getData('srcID');
    var nodeCopy = document.getElementById(data).cloneNode(true);
    nodeCopy.id = "newId";
    nodeCopy.removeAttribute('draggable');
    if($(nodeCopy).hasClass('uc')) {
        $(el).children('.uc').text(nodeCopy.innerHTML);
    } else if($(nodeCopy).hasClass('docente')) {
        $(el).children('.dropup').children('.drop-ctn').children('.icons').children('img.doc').removeClass('opacity-20');
        $(el).children('.dropup').children('.dropdown-menu').children('.linha').children('.recurso.doc').children('p').text(nodeCopy.innerHTML);
    } else if($(nodeCopy).hasClass('ambiente')) {
        $(el).children('.dropup').children('.drop-ctn').children('.icons').children('img.amb').removeClass('opacity-20');
        $(el).children('.dropup').children('.dropdown-menu').children('.linha').children('.recurso.amb').children('p').text(nodeCopy.innerHTML);
    } else if($(nodeCopy).hasClass('equipamento')) {
        $(el).children('.dropup').children('.drop-ctn').children('.icons').children('img.eqp').removeClass('opacity-20');
        $(el).children('.dropup').children('.dropdown-menu').children('.linha').children('.recurso.eqp').children('p').text(nodeCopy.innerHTML);
    } else if($(nodeCopy).hasClass('aula')) {
        $(el).html($(nodeCopy).html());
    }
    
}

function error(id){

    if(id == 'doc-1'){
        errorMsg(0);
        return true;
    } else{
        
        return false;
    }
}

function exclude(el){
    if($(el).hasClass('icon')) {
        $(el).addClass('opacity-20');
        if($(el).hasClass('doc')) {
            el = $(el).parent().parent().next('.dropdown-menu').children('.linha').children('.recurso.doc').children('p');
        } else if($(el).hasClass('amb')) {
            el = $(el).parent().parent().next('.dropdown-menu').children('.linha').children('.recurso.amb').children('p');
        } else if($(el).hasClass('eqp')) {
            el = $(el).parent().parent().next('.dropdown-menu').children('.linha').children('.recurso.eqp').children('p');
        }
    }
    $(el).html("");
}

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})