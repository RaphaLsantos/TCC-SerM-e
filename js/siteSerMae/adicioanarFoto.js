function modalRemover($id, $elemento){
    const myModal = new bootstrap.Modal('#modalExcluir');
    myModal.show();
    document.getElementById($elemento).value = $id;
    //window.location.href = "./registro.php";
    }
    