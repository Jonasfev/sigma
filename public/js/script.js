function drag(ev){
    ev.dataTransfer.setData('srcID', ev.target.id);
    ev.dropEffect = "move";

}

function letsDrop(ev){
    ev.preventDefault();
    ev.dataTransfer.dropEffect = "move";
}

function drop(ev, el){
    
    if(ev.target.children.length < 4){
        ev.preventDefault();
        var data = ev.dataTransfer.getData('srcID');
        var nodeCopy = document.getElementById(data).cloneNode(true);
        nodeCopy.id = "newId";  
        nodeCopy.setAttribute('onClick', 'exclude(this)');
        nodeCopy.removeAttribute('draggable');
        el.appendChild(nodeCopy);
    } else {
        alert ("Limite alcançado, Breno Gay ");
    }
}

function exclude(el){
    el.remove();
}

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
