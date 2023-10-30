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
    <link rel="stylesheet" href="../../../css/siteSerMae/configuracoes/desativar.css">
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


    <div class="container-desativar">
        <div class="nav-conta">
            <h1 class="text-1">Desativar</h1>
            <a href="conta.php"><button class="btn-conta-voltar">Voltar</button></a>
        </div>
        <form class="form-desativar">
            <p class="text-2">Escolha o que você deseja fazer com sua conta:</p><hr><br>

        <div class="labels">
            <div class="opcoes-conta">
                <label class="label-desativar" for="disableAccount">Desativar a conta temporariamente</label>
                <input class="input-desativar" type="radio" id="disableAccount" name="action" value="disable"><br>
            </div>

            <div class="opcoes-conta">
                <label class="label-desativar" for="deleteAccount">Excluir a conta permanentemente</label>
                <input class="input-desativar" type="radio" id="deleteAccount" name="action" value="delete"><br>
            </div>
        </div>
            <hr><br>

        <div class="senha-label">
            <label class="label-senha" for="password">Informe sua senha:</label>
            <input class="input-senha" type="password" id="password" name="password" placeholder="Digite sua senha">
        </div>

        <a href="../../dao/logoff.php"><button class="btn-desativar btn">Avançar</button></a>
            <div class="modal">
                <div class="corpo-modal">
                    <div class="modal-nav">
                        <p class="text-modal">Confirmar ação</p>
                    </div>
                    <div class="button-desativar">
                    <a href="../../dao/logoff.php"><button class="yes-btn-modal">Confirmar</button></a>
                        <button class="no-btn-modal close-btn">Cancelar</button>
                    </div>
                </div>
            </div>

        </form>
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
