<?php
session_start();    
include_once("../../dao/atualizarSessão.php");
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/siteSerMae/boasVindas.css">
    <link rel="stylesheet" href="../../css/siteSerMae/inicioSite.css">
    <link rel="stylesheet" href="../../css/siteSerMae/notification.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Notificações</title>
</head>
<body>
    
 <!--navBar-->
 <?php
    include('../../components/siteSerMae/navBar.php');   
    ?>
    <!--navBar-->

<!--Main left-inicio-->
<main>
    <div class="container main-container">

    <!--Main left inicio-->
    <div class="main-left">
                    <!--inicio Boas vindas-->
                    <?php
                    include('../../components/siteSerMae/boasVindas.php')
                    ?>
                    <!--final Boas vindas-->

                    <!--start aside bar-->
                    <?php
                    include('../../components/siteSerMae/menu.php')
                    ?>
                    <!--end aside bar-->
    </div>
<!--Main left fim-->


    </div>
</main>


 <!--Inicio popup aria-->
    <!--final perfil-popUp-->
    <?php
    include('../../Components/siteSerMae/perfilPopup.php')
    ?>
    <!--inicio perfil-popUp-->

    <!--inicio adicionar post-->
    <?php
    include('../../Components/siteSerMae/adicionarPost.php')
    ?>
    <!--final adicionar post-->
    <!--Final popup aria-->



<script src="../../js/siteSerMae/bemVinda.js"></script>

</body>
</html>