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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../css/siteSerMae/home/inicioSite.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Conta - SerMãe</title>
    <link rel="stylesheet" href="../../../css/siteSerMae/configuracoes/conta.css">
    
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


    <div class="opcoes">
        <div class="nav-conta">
            <h1 class="text-1">Conta</h1>
            <a href="index.php"><button class="btn-conta-voltar">Voltar</button></a>
        </div>

        <div class="menu">
          <a href="trocarSenha.php" class="sub-menu-link">
            <p>Trocar senha</p>
            <span><i class="fa-solid fa-caret-right"></i></span>
          </a>

          <a href="desativar.php" class="sub-menu-link">
            <p>Desativar conta</p>
            <span><i class="fa-solid fa-caret-right"></i></span>
          </a>
          <div class="modal-container">
            <a href="../../../dao/logoff.php" class="sub-menu-link">
              <p>Sair da Conta</p>
              <span><i class="fa-solid fa-caret-right"></i></span>
            </a>
            <div class="modal" tabindex="0">
              <p class="text">Deseja sair de sua conta?</p>
              <div class="buttonsSair">
                <form action="../../../dao/logoff.php" id="logoutForm">
                  <input type="submit" class="yesSair" value="Sim">
                </form>
                <button class="yesSair">Sim</button>
                <button class="noSair close-button">Não</button>
              </div>
            </div>
          </div>


        </div>

    </div>


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