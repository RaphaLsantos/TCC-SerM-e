<?php
include('../../Components/ADMIN/navbar.php');

include('../../components/ADMIN/navbar/navSuperior.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responder Mensagem</title>
    <link rel="stylesheet" href="../../css/ADMIN/responderMensagem.css">

    <!-- CSS NavbarSuperior -->
    <link rel="stylesheet" href="../../components/ADMIN/navbar/navSuperior.css">

    <!-- CSS Navbar -->
    <link rel="stylesheet" href="../../components/ADMIN/style.css">

    <!-- Imports -->
    <!-- BoxIcons CDN links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="home-section">
        <div class="conteudo-adm">
            <div class="responderMensagem">
                <div class="infoMensagem">
                    <div class="fotoUsuaria">
                        <p>Foto:</p>
                        <img src="../../img/ADMIN/perfil.png" alt="">
                    </div><!-- Fim FotoUsuaria -->
                    <div class="mensagemUsuaria">
                        <div class="infoUsuaria">
                            <p>iD Usuaria:</p>
                            <p>nome Usuaria:</p>
                            <p>email Usuaria:</p>
                        </div><!-- Fim InfoUsuaria -->

                        <div class="mensagem">
                            <label for="">Mensagem da Usuaria</label>
                            <textarea name="" id="">
                                
                            </textarea>
                        </div><!-- Fim Mensagem -->
                    </div><!-- Fim mensagemUsuaria -->
                </div><!-- Fim InfoMensagem -->

                <div class="infoResposta">
                <div class="fotoAdm">
                        <p>Foto:</p>
                        <img src="../../img/ADMIN/perfil.png" alt="">
                    </div><!-- Fim FotoUsuaria -->
                    <div class="mensagemAdm">
                        <div class="infoAdm">
                            <p>iD Usuaria:</p>
                            <p>nome Usuaria:</p>
                            <p>email Usuaria:</p>
                        </div><!-- Fim InfoUsuaria -->

                        <div class="mensagem">
                            <label for="">Mensagem da Usuaria</label>
                            <textarea name="" id="">
                                
                            </textarea>
                        </div><!-- Fim Mensagem -->
                    </div><!-- Fim mensagemUsuaria -->

                </div>
            </div><!-- Fim Responder Mensagem -->
        </div><!-- Fim Conteudo Adm -->
    </section><!-- Fim HomeSection -->
</body>
</html>