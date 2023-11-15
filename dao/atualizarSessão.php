<?php
include_once "conexãoDAO.php";
session_start();

if (!isset($_SESSION['ID_conta'])) {
    header("Location: ../../index.php?acesso=erro");
    exit();
}

try {
    $id = $_SESSION['ID_conta'];

    $sql = "SELECT tbusuario.*, tbTipoPerfil.TipoConta 
        FROM tbusuario 
        INNER JOIN tbTipoPerfil ON tbusuario.tipoConta = tbTipoPerfil.idTipo
        WHERE idUsuario = :id";

    
    $stmt = conexao::getConexao()->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
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
        $_SESSION['tipoConta'] = $row['TipoConta'];
        
        }
} catch (PDOException $e) {
    echo "Falha na conexão com o banco de dados: " . $e->getMessage();
}

if (isset($_POST['salvar-alteracoes'])) {
    $email = trim($_POST['email']);
    $nomeUsuario = $_POST['position'];
    $apelido = $_POST['username'];
    $telefone = $_POST['phone'];
    $id = $_SESSION['ID_conta'];

    $sql = "UPDATE tbusuario SET emailUsuario = :email, nomeUsuario = :nome, apelidoUsuario = :apelido, telefoneUsuario = :telefone WHERE idUsuario = :id";
    
    $stmt = conexao::getConexao()->prepare($sql);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->bindParam(":nome", $nomeUsuario, PDO::PARAM_STR);
    $stmt->bindParam(":apelido", $apelido, PDO::PARAM_STR);
    $stmt->bindParam(":telefone", $telefone, PDO::PARAM_STR);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: perfil.php");
        exit();
    } else {
        echo "Erro ao salvar as alterações: " . $stmt->errorInfo()[2];
    }
}
