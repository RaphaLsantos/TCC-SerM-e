<?php

include_once "conexãoDAO.php";


if(!isset($_SESSION['ID_conta'])){
    header("Location: ../../index.php?acesso=erro");
    exit();
} 

try {
    $id = $_SESSION['ID_conta'];

    $sql = "SELECT * FROM tbusuario 
    INNER JOIN tbTipoPerfil ON tbusuario.tipoConta = tbTipoPerfil.idTipo
    WHERE idUsuario = '$id'";
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
    $_SESSION['tipoPerfil'] = $row['TipoPerfil'];
    
    
    $_SESSION['status'] = $row['statusConta'];
} catch (PDOException $e) {
    echo "Falha na conexão com banco de dados: " . $e->getMessage();
}
