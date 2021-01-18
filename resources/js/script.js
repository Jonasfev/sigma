function drag(ev){
    ev.dataTransfer.setData('srcID', ev.target.id);
    ev.dropEffect = "move";

}

function letsDrop(ev){
    ev.preventDefault();
    ev.dataTransfer.dropEffect = "move";
}

function drop(ev, el){
    ev.preventDefault();
    var data = ev.dataTransfer.getData('srcID');
    el.appendChild(document.getElementById(data));
}

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
