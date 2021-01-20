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
        el.innerHTML = nodeCopy.innerHTML;
    }
}

function exclude(el){
    el.innerHTML = "";
}

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})