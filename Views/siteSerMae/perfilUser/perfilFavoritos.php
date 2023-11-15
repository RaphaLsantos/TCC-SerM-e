<?php
session_start();    
include_once("../../../dao/atualizarSessão.php");
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/siteSerMae/perfilUser/perfil.css">
    <link rel="stylesheet" href="../../../css/siteSerMae/home/boasVindas.css">
    <link rel="stylesheet" href="../../../css/siteSerMae/home/inicioSite.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Seu perfil - Favoritos</title>
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


            <!--começo do perfil inicio-->
            <div class="container-profile">
                <div class="fluid-profile">
                    <div class="area-perfil">
                        <div class="box-perfil">

                            <!--informações do perfil inicio-->
                            <div class="informacao-perfil">

                                <!--imagens do perfil inicio-->
                                <div class="papel-parede-img-perfil">
                                    <img data-bs-toggle="modal" class="papel-parede-img" src="../../../img/siteSerMae/perfil/capaIMG/fundo.jpg" id="my-profile-picture" alt="">

                                    <div class="profile-picture" id="my-profile-picture">
                                        <img class="perfil-img" src="../../../img/siteSerMae/Perfis/<?= $_SESSION['fotoPerfil'] ?>" alt="">
                                    </div>
                                </div>
                                <!--imagens do perfil final-->

                                <!--bio inicio-->
                                <div class="area-bio">

                                    <!--nomes usuária-->
                                    <div class="usuario-bio">
                                        <div class="area-nick-nome">
                                            <div class="nick">
                                                <h1><?= $_SESSION['nomeUsuario']; ?></h1>
                                            </div>
                                            <div class="perfil-mulher">
                                                <h1><?= $_SESSION['tipoPerfil']; ?></h1>
                                            </div>
                                        </div>
                                        <div class="bio">
                                            <p><?= $_SESSION['biografiaUsuario'] ?></p>
                                        </div>

                                        <!--Botão editar perfil inicio-->
                                        <button class="btn-editar-perfil" id="open-modal">Editar</button>
                                        <?php
                                        if ($_SESSION['nivelConta'] == 3) { ?>
                                            <button onclick="admin()" class="btn-editar-perfil">Tela ADMIN</button>
                                        <?php }
                                        ?>
                                        <div id="fade" class="hide"></div>
                                        <div id="modal" class="hide">

                                            <div class="modal-header">
                                                <h2>Editar o seu Perfil</h2>
                                                <button id="close-modal">Voltar</button>
                                            </div>
                                            <div class="modal-body">

                                                <!--dados inicio-->
                                                <div class="input-group">
                                                    <h3>E-mail:</h3>
                                                    <input type="text">
                                                </div>

                                                <div class="input-group">
                                                    <h3>Nome Usuária:</h3>
                                                    <input type="text" name="username" id="username">
                                                </div>

                                                <div class="input-group">
                                                    <h3>Nome Completo:</h3>
                                                    <input type="text" name="position" id="position">
                                                </div>

                                                <div class="input-group">
                                                    <h3>Telefone:</h3>
                                                    <input type="text" name="phone" id="phone">
                                                </div>


                                                <!--dropDown-->
                                                <div class="dropdown">
                                                    <div class="select">
                                                        <span class="selected">Escolha seu perfil</span>
                                                        <div class="caret"></div>
                                                    </div>
                                                    <ul class="menu">
                                                        <li class="active">Mãe</li>
                                                        <li>Mãe solo</li>
                                                        <li>Tentante</li>
                                                        <li>Gestante</li>
                                                    </ul>
                                                </div>
                                                <!--dados final-->
                                                <input type="submit" class="btn btn-primary btn-lg" value="Salvar Alterações">
                                            </div>
                                        </div>


                                    </div>
                                    <!--Botão editar perfil final-->

                                    <!--nomes usuária-->


                                    <!--descrição do perfil inicio-->
                                    <div class="seguindo-seguidores">

                                        <div class="seguindo">
                                            <div class="numeros-seguir">
                                                <p>0</p>
                                            </div>
                                            <div class="seguir-text">
                                                <h1>Seguindo</h1>
                                            </div>
                                        </div>

                                        <div class="seguidores">
                                            <div class="numeros-seguir">
                                                <p>0</p>
                                            </div>
                                            <div class="seguir-text">
                                                <h1>Seguidores</h1>
                                            </div>
                                        </div>

                                        <!--descrição do perfil final-->
                                    </div>
                                    <!--bio final-->

                                </div>
                            </div>
                            <!--informações do perfil final-->

                    </div>
                </div>
            </div>
    </div>
    <!--começo do perfil final-->


    <!--publicações, favoritos e dicas - inicio-->
    <div class="options-perfil">
        <ul class="nav-list-option">
            <li><a href="perfil.php">Publicações</a></li>
            <li><a href="perfilFavoritos.php">Favoritos</a></li>
            <li><a href="perfilDicas.php">Dicas</a></li>
        </ul>
    </div>
    <!--publicações, favoritos e dicas - final-->




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


    <script src="../../../js/siteSerMae/home/site.js"></script>
    <script src="../../../js/siteSerMae/perfilUser/perfil.js"></script>
    <script src="../../../js/siteSerMae/home/bemVinda.js"></script>

</body>
</html>