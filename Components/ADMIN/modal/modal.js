let modal = document.getElementById('modal')
let elemento = document.getElementById('id_escondido')

function abrirModal(id, []){
    console.log(id);
    elemento.value = id;
    modal.showModal();
}

function fecharModal(){
    modal.close();
}
