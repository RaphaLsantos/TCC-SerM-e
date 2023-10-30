<?php
include_once("../../dao/atualizarSessão.php");
include_once "../../Model/publicacao.php";
include_once "../../Dao/publicacaoDAO.php";

                $publicacaodao = new PublicacaoDAO();
                $publicacao = new Publicacao();


                

if (isset($_GET['publicacaoId'])) {
    $publicacaoId = $_GET['publicacaoId'];

    $publicacaodao->excluirPublicacao($publicacaoId);
    header('Location: ../../Views/siteSerMae/perfil.php?mensagem=Publicação+de+nº+' . $publicacaoId . '+Excluída+com+Sucesso');    echo "Publicação de nº " . $publicacaoId . " Excluida";
} else {
    echo "publicacaoId não foi fornecido na URL.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

    
</body>
</html>
