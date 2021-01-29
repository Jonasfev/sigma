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
   
    if(ev.target.children.length < 1 && !error(ev.dataTransfer.getData('srcID'))){
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
        }
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

let input = document.querySelector('input');

input.oninput = fileNameWrite;

function fileNameWrite(){
    document.getElementById('fileName').innerHTML = document.querySelector('input[type=file]').files[0].name;
}


$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})