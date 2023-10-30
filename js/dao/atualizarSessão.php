<?php

include_once "conexãoDAO.php";


if(!isset($_SESSION['ID_conta'])){
    header("Location: ../../index.php?acesso=erro");
    exit();
} 

try {
    $id = $_SESSION['ID_conta'];

    $sql = "SELECT * FROM tbusuario WHERE idUsuario = '$id'";
    $stmt = conexao::getConexao()->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['nomeUsuario'] = $row['nomeUsuario'];
    $_SESSION['email'] = $row['emailUsuario'];
    $_SESSION['senha'] = $row['senhaUsuario'];
    $_SESSION['apelido'] = $row['apelidoUsuario'];
    $_SESSION['fotoPerfil'] = $row['fotoUsuario'];
    $_SESSION['biografiaUsuario'] = $row['bioUsuario'];
    $_SESSION['fotoCapa'] = $row['capaUsuario'];
    $_SESSION['dataNascimento'] = $row['nascUsuario'];
    $_SESSION['telefone'] = $row['telefoneUsuario'];
    $_SESSION['nivelConta'] = $row['nivelConta'];

    if($row['tipoConta'] == 1){
        $_SESSION['tipoPerfil'] = "Mãe convencional";
    } else if($row['tipoConta'] == 2){
        $_SESSION['tipoPerfil'] = "Gestante";
    } else if($row['tipoConta'] == 3){
        $_SESSION['tipoPerfil'] = "Tentante";
    } else if($row['tipoConta'] == 4){
        $_SESSION['tipoPerfil'] = "Mãe Solo";
    } else {
        $_SESSION['tipoPerfil'] = "Desconhecido";
    }
    
    $_SESSION['status'] = $row['statusConta'];
} catch (PDOException $e) {
    echo "Falha na conexão com banco de dados: " . $e->getMessage();
}
