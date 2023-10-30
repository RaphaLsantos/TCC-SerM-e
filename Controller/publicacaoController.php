<?php

include_once "../dao/conexãoDAO.php";
include_once "../Model/publicacao.php";
include_once "../dao/publicacaoDAO.php";
date_default_timezone_set("America/Sao_Paulo");

$publicacao = new Publicacao();
$publicacaodao = new PublicacaoDAO();

if (isset($_POST['admin_ação'])) {
    session_start();
    $id = $_SESSION['ID_conta'];
    $dataAtual = date("Y-m-d H:i:s");
    $legenda = $_POST['legenda'];

    if (isset($_FILES["imagemPost"]) && $_FILES["imagemPost"]["error"] == 0) {
        $diretoriodasfotos = "../../../img/siteSerMae/publicacao/";
        $nomeDaFoto = uniqid() . "" . $_FILES["imagemPost"]["name"];

        if (move_uploaded_file($_FILES["imagemPost"]["tmp_name"], $diretoriodasfotos . $nomeDaFoto)) {
            $caminho_arquivo = $diretoriodasfotos . $nomeDaFoto;

            $publicacao->setDataPublicacao($dataAtual);
            $publicacao->setImgPublicacao($nomeDaFoto);
            $publicacao->setLegendaPublicacao($legenda);
            $publicacao->setIdUser($id);
            
            echo $id;

            $_SESSION['imagemPost'] = $publicacao->getImgPublicacao();

            $publicacaodao->createPublicacao($publicacao);
        }
    }
}

header("Location: ../Views/siteSerMae/home/home.php");
?>
