<?php

if(isset($_POST["user_id"])){
    include_once('../../dao/conexãoDAO.php');

    $resultado = '';

    $query_user = "SELECT * FROM tbusuario WHERE idUsuario = :id";
    $resultado_user = conexao::getConexao()->prepare($query_user);
    $resultado_user->execute([':id' => $_POST["user_id"]]);
    $row_user = $resultado_user->fetch(PDO::FETCH_ASSOC);


    //incluir estilo css na página onde fica o modal
    $resultado .= '<dl>';
    
    $resultado .= '<dt>ID</dt>';
    $resultado .= '<dd>'.$row_user['idUsuario'].'</dd>';

    $resultado .= '<dt>Nome de Usuario</dt>';
    $resultado .= '<dt>'.$row_user['nomeUsuario'].'</dt>';

    $resultado .= '</dl>';

    echo $resultado;

}