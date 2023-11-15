<?php 
include_once("../../../dao/atualizarSessão.php");
include_once "../../../Model/publicacao.php";
include_once "../../../Dao/publicacaoDAO.php";
include_once "../../../Model/usuario.php";
include_once "../../../Dao/usuarioDAO.php";


$publicacao = new Publicacao();
$publicacaodao = new PublicacaoDAO();
$usuario = new Usuario();
$usuariodao = new usuarioDAO();

$publicacoes = $publicacaodao->readPublicacao();
$imgPublicacao = $publicacao->getImgPublicacao();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desativar ou Excluir Conta</title>
    <link rel="stylesheet" href="../../../css/siteSerMae/configuracoes/engajamento.css">
    <link rel="stylesheet" href="../../../css/siteSerMae/home/inicioSite.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!--navBar-->
<?php
    include('../../../components/siteSerMae/navBar.php');   
    ?>
    <!--navBar-->

    <!--Main-->
    <main>
    <div class="container main-container">

    <!--Main left inicio-->
    <div class="main-left">
                    <!--inicio Boas vindas-->
                    <?php
                    include('../../../components/siteSerMae/boasVindas.php')
                    ?>
                    <!--final Boas vindas-->

                    <!--start aside bar-->
                    <?php
                    include('../../../components/siteSerMae/menu.php')
                    ?>
                    <!--end aside bar-->
    </div>
    <!--Main left fim-->


    <!--corpo engajamento inicio-->
    <div class="corpo_engajamento">

        <div class="nav-conta">
            <h1 class="text-1">Engajamento</h1>
            <a href="conta.php"><button class="btn-conta-voltar">Voltar</button></a>
        </div>

        <!--inicio contagem perfil-->
        <div class="container-contagem">
            <h2 class="text-1">Insights da conta</h2>
            <div class="reacts-numbers">
                <div class="icons">
                    <div class="icon-number">
                        <i class="fa-solid fa-heart"></i>
                        <h3 class="number">192</h3>
                    </div>
                    <div class="icon-number">
                        <i class="fa-solid fa-bookmark"></i>
                        <h3 class="number">10</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--final contagem perfil-->


     
        <div class="container-engajamento">
            <div class="nav-engajamento">
                <h1 class="text-1">Visão geral da conta</h1>
                <i class="fa-solid fa-circle-info"></i>
            </div>
                <div class="listGeral"> 
                    <div class="options">
                        <h2 class="text-2">Contas alcançadas</h2>
                        <h5 class="number">192</h5>
                    </div>
                    <div class="options">
                        <h2 class="text-2">Contas com engajamento</h2>
                        <h5 class="number">40</h5>
                    </div>
                    <div class="options">
                        <h2 class="text-2">Atividades do perfil</h2>
                        <h5 class="number">15</h5>
                    </div>
                </div>
        </div>

        </div>
        <!--corpo engajamento final-->
   

    </div>
</main>


    <!--Inicio popup aria-->
    <!--final perfil-popUp-->
    <?php
    include('../../../components/siteSerMae/perfilPopup.php')
    ?>
    <!--inicio perfil-popUp-->

    <!--inicio adicionar post-->
    <?php
    include('../../../components/siteSerMae/adicionarPost.php')
    ?>
    <!--final adicionar post-->
    <!--Final popup aria-->


<script src="./../../../js/siteSerMae/home/site.js"></script>
</body>
</html>
