<?php
session_start();    
include_once("../../dao/atualizarSessão.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SideBar</title>
    <link rel="stylesheet" href="style.css">

    <!-- BoxIcons CDN links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Menu Lateral -->
    <div class="sidebar open">
        <div class="logo-details">
            <img src="../../img/ADMIN/logo.png" alt="">
            <span class="logo-name">serMãe</span>
        </div>
        

        <ul class="nav-links">
            <li>
                <a href="../../Views/ADMIN/home.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link-name">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="../../Views/ADMIN/mensagem.php">
                    <i class='bx bx-envelope'></i>
                    <span class="link-name">Mensagens</span>
                </a>
            </li>

            <li>
                <a href="../../Views/ADMIN/denuncia.php">
                    <i class='bx bxs-report'></i>
                    <span class="link-name">Denuncias</span>
                </a>
            </li>

            <!--<li>
                <a href="../../Views/admin/cadastrar-adm.php">
                    <i class='bx bxs-user-plus'></i>
                    <span class="link-name">Cadastrar ADM</span>
                </a>
            </li>-->

            <li>
                <a href="../../Views/admin/configuracoes.php">
                    <i class='bx bx-cog'></i>
                    <span class="link-name">Configurações</span>
                </a>
            </li>
        

        <li>
        <div class="profile-details">
            <div class="profile-content">
                <img src="../../img/Perfis/<?= $_SESSION['fotoPerfil'] ?>" alt="Foto ADM">
            </div>
            <div class="name-job">
                <div class="profile-name"><?= $_SESSION['apelido']; ?></div>
                <div class="job">ADM</div>
            </div>
            <a href="../../Dao/logoff.php">
            <i class='bx bx-log-out'></i>
            </a>
        </div>
        </li>
    </ul>
    </div>

    <script src="./menu-lateral.js"></script>
</body>
</html>