<?php

include('../../components/ADMIN/navbar.php');
include_once "../../Dao/validador_acesso.php";
include_once('../../Dao/usuarioDAO.php');
include_once('../../Model/usuario.php');
include_once('../../Dao/conexãoDAO.php');

$usuarios = new Usuario;
$usuariodao = new usuarioDAO;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../../css/ADMIN/style.css">

    <!-- CSS Navbar -->
    <link rel="stylesheet" href="../../css/ADMIN/ADM.css">
    <!-- Imports -->
    <!-- BoxIcons CDN links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="home-section">
        <div class="conteudo-adm">
            <div>
                <?php 
                    foreach ($usuariodao->read() as $usuario) : 
                ?>
                    <tr>
                    <td>
                        <?= $usuario->getIdUsuario() ?> . <?= $usuario->getNomeUsuario()  ?>
                        <button>BUTÂO</button> <br> 
                    </td>
                    </tr>
                <?php 
                endforeach
                ?>
            </div>
        </div>
    </section>

    <script src="../../js/ADMIN/menu-lateral.js"></script>
</body>
</html>