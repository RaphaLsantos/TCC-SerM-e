<?php
include_once("../../dao/atualizarSessão.php");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="navSuperior.css">

    <!-- BoxIcons CDN links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="header">
        <div class="search">
            <input type="text" class="search-text" placeholder="Pesquisar">
            
            <a href="#" class="searchBtn">
                <i class='bx bx-search-alt'></i>
            </a>
            
        </div>

        <div class="infoAdm">
            <div class="notificacao">
                <i class='bx bxs-bell'></i>
                <i class='bx bxs-comment-dots'></i>
            </div>
            

            <div class="adm">
                <div class="Foto">
                    <img src="../../img/Perfis/<?= $_SESSION['fotoPerfil'] ?>" alt="Foto ADM">
                </div>
                <div class="name-job">
                    <div class="profile-name"><?= $_SESSION['nomeUsuario'] ?></div>
                    <div class="job">ADM</div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>