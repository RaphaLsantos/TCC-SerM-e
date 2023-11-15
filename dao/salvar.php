<?php

if (isset($_POST['salvar'])) {
    // Recupere os dados do formulário
    $emailUsuario = trim($_POST['emailUsuario']);
    $nomeUsuario = trim($_POST['nomeUsuario']); // Use "position" para o nome completo
    $apelidoUsuario = trim ($_POST['apelidoUsuario']);
    $telefoneUsuario = trim ($_POST['telefoneUsuario']);
    $id = $_SESSION['IdUsuario'];

    // Conecte-se ao banco de dados (substitua pelos detalhes reais da conexão)
    $conexao = new mysqli('localhost', 'usuario', 'senha', 'bdsermae_upd');
    
    // Verifique se a conexão foi bem-sucedida
    if ($conexao->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
    }

    // Construa a consulta SQL para atualizar os dados
    $sql = "SELECT * FROM tbusuario WHERE idUsuario = :id";

    // Prepare a consulta
    $stmt = $conexao->prepare($sql);

    if ($stmt) {
        // Vincule os parâmetros da consulta
        $stmt->bind_param("ssssi", $email, $nomeUsuario, $apelido, $telefone, $id);

        // Execute a consulta
        if ($stmt->execute()) {
            // Atualização bem-sucedida
            echo "Alterações salvas com sucesso!";
        } else {
            // Erro na execução da consulta
            echo "Erro ao salvar as alterações: " . $stmt->error;
        }

        // Feche a declaração
        $stmt->close();
    } else {
        // Erro na preparação da consulta
        echo "Erro na preparação da consulta: " . $conexao->error;
    }

    // Feche a conexão com o banco de dados
    $conexao->close();
}
?>
