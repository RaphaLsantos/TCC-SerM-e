<?php 

include_once "../Dao/conexãoDAO.php";
include_once "../Model/administrador.php";
include_once "../Model/usuario.php";

$Administrador = new Administrador();






if(isset($_POST['admin_ação'])){
    $valor = $_POST['opção'];
    $id = $_POST['id_do_user'];

    if($valor == 1){
        $sql = "UPDATE tbUsuario SET statusConta = '1' WHERE idUsuario = '$id'";
        $resultado = conexao::getConexao()->query($sql);
        $resultado->execute();

        header("Location: ../Views/admin/home.php?msg=Atualização_Executada");
        exit();
    }else if($valor == 2){
        $sql = "UPDATE tbUsuario SET statusConta = '2' WHERE idUsuario = '$id'";
        $resultado = conexao::getConexao()->query($sql);
        $resultado->execute();

        header("Location: ../Views/admin/home.php?msg=Atualização_Executada");
        exit();
    }

}








?>