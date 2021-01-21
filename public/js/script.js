function drag(ev){
    ev.dataTransfer.setData('srcID', ev.target.id);
}

function letsDrop(ev){
    ev.preventDefault();
}

function drop(ev, el){
    
    if(ev.target.children.length < 1){
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