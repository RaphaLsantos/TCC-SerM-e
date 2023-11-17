<?php
include_once("../../../dao/atualizarSessão.php");
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/siteSerMae/home/inicioSite.css">
    <link rel="stylesheet" href="../../../css/siteSerMae/telasDicas/dicas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dicas</title>
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


<!--inicio tela dicas-->
<div class="corpo-dicas">

    <!--inicio carousel Dicas-->
    <div id="slider-dicas">
        <input type="radio" name="slider" id="slide1" checked>
        <input type="radio" name="slider" id="slide2">
        <input type="radio" name="slider" id="slide3">
        <input type="radio" name="slider" id="slide4">
        <div id="slides">
            <div id="overflow">
                <div class="inner">

                    <div class="slide slide_1">
                        <div class="slide-content">
                            <h2>Saúde Mental</h2>
                            <p>Ajude a se prevenir de tragédias!</p>
                        </div>
                    </div>
                    <div class="slide slide_2">
                        <div class="slide-content">
                            <h2>Saúde Física</h2>
                            <p>Cuide de você mesma,<br>e ajude a cuidar de outras mulheres</p>
                        </div>
                    </div>
                    <div class="slide slide_3">
                        <div class="slide-content">
                            <h2>Maternidade</h2>
                            <p>Os cuidados iniciais prestados<br>pela maternidade</p>
                        </div>
                    </div>
                    <div class="slide slide_4">
                        <div class="slide-content">
                            <h2>Cuidados aos seus filhos</h2>
                            <p>Infância e desenvolvimento.<br>A importância dos pais na vida dos filhos...</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="bullets">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
        </div>
    </div>
    <!--inicio carousel Dicas-->
    
    <!--inicio cards-categorias-->  
    <h1 class="text-dicas">Categorias</h1>
    <div class="dicas">  
        <div class="cards-dicas-1">
            <div class="cards-1">
                <h3>Saúde Mental</h3>
                <div class="img-dicas">
                    <img class="image-card-dicas" src="../../../img/siteSerMae/telaDicas/dicas/cards/mental.jpg" alt="">
                </div>
                <p>Auto-ajuda</p>
                <a href="mental.php"><button class="btn btn-dica-card">Aqui</button></a>
            </div>

            <div class="cards-1">
                <h3>Saúde Física</h3>
                <div class="img-dicas">
                    <img class="image-card-dicas" src="../../../img/siteSerMae/telaDicas/dicas/cards/fisica.jpg" alt="">
                </div>
                <p>Cuide-se!</p>
                <a href="fisica.php"><button class="btn btn-dica-card">Aqui</button></a>
            </div>
        </div>

        <div class="cards-dicas-2">
            <div class="cards-2">
                <h3>Maternidade</h3>
                <div class="img-dicas">
                    <img class="image-card-dicas" src="../../../img/siteSerMae/telaDicas/dicas/cards/mater.jpg" alt="">
                </div>
                <p>Cuidados</p>
                <a href="maternidade.php"><button class="btn btn-dica-card">Aqui</button></a>
            </div>

            <div class="cards-2">
                <h3>Cuidados a criança</h3>
                <div class="img-dicas">
                    <img class="image-card-dicas" src="../../../img/siteSerMae/telaDicas/dicas/cards/filhos.png" alt="">
                </div>
                <p>Dicas diversas</p>
                <a href="filhos.php"><button class="btn btn-dica-card">Aqui</button></a>
            </div>
        </div>
    </div>
    <!--final cards-categorias-->
    
<!--final tela dicas-->
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


<script src="../../../js/siteSerMae/home/site.js"></script>
</body>
</html>