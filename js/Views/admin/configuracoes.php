<?php

include('../../components/ADMIN/navbar.php');

include('../../components/ADMIN/navbar/navSuperior.php');



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM Configurações</title>
    <link rel="stylesheet" href="../../css/ADMIN/configuracoes.css">

    <link rel="stylesheet" href="../../components/ADMIN/navbar/navSuperior.css">
    <!-- CSS Navbar -->
    <link rel="stylesheet" href="../../components/ADMIN/style.css">
    <script src="../../js/atualizarSessão.js"></script>
    <!-- Imports -->
    <!-- BoxIcons CDN links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="home-section">
        <div class="conteudo-adm">
            <div class="navAdm">
                <div class="Adm">
                    <img src="../../img/ADMIN/perfil.png" alt="">

                    <div class="nomeFuncao">
                        <h2><?= $_SESSION['nomeUsuario']; ?></h2>
                        <p>Adm</p>
                        <span id="Bio"><?= $_SESSION['biografiaUsuario']; ?></span>
                    </div><!-- Fim NomeFunção -->
                </div><!-- Fim Adm -->
            </div><!-- Fim NavAdm -->

            <div class="opcoesAdm">
                <a href="#" class="adm" id="abrirModalConta" onclick="openModal()">
                    <p>Conta</p>
                    <i class='bx bxs-right-arrow'></i>
                </a><!--Fim opcao adm -->
                <a href="#" class="adm">
                    <p>Telas</p>
                    <i class='bx bxs-right-arrow'></i>
                </a><!--Fim opcao adm -->
                <a href="#" class="adm">
                    <p>Segurança</p>
                    <i class='bx bxs-right-arrow'></i>
                </a><!--Fim opcao adm -->
                <a href="#" class="adm">
                    <p>Ajuda</p>
                    <i class='bx bxs-right-arrow'></i>
                </a><!--Fim opcao adm -->
            </div><!-- Fim opçoesAdm -->

            <div class="avaliacoesAdm">
                <div class="cardProatividade">
                    <p>Proatividade da conta em:</p>
                    <h3>88,9%</h3>
                </div><!-- Fim CardProatividade -->

                <div class="cardAvaliacao">
                    <p>Avaliação do Adm</p>
                    <h3>92,12%</h3>
                </div><!-- Fim CardAvaliação -->
                <div class="cardProblemas">
                    <p>Problemas Resolvidos</p>
                    <h3>85,7%</h3>
                </div><!-- Fim CardProblemas -->
                <div class="cardAprovacao">
                    <p>Aprovação Final</p>
                    <h3>90,23%</h3>
                </div><!-- Fim CardProatividade -->
            </div><!-- Fim AvaliacoesAdm -->
        </div><!-- Fim ConteudoAdm -->
    </section>

    <!-- Modal Conta -->
    <div id="fade" class="hide"></div>
    <div id="modalConta" class="hide">
        <div id="modalHeaderConta">
            <h3>ID Da Conta: 
                <p class="idUser">
                  1
                </p>
            </h3>
            <button id="fechar-modal">x</button>
        </div><!-- Fim Modal Header -->

            <div id="modalBodyConta">
                <form action="#">
                    <div class="mudarNomeConta">
                        <label for="">Novo Nome</label>
                        <input type="text">
                    </div><!-- Fim Mudar Nome Conta -->
                    <div class="mudarEmailConta">
                        <label for="">Novo Email</label>
                        <input type="email">
                    </div><!-- Fim Mudar Email Conta -->
                    <div class="mudarSenhaConta">
                        <label for="">Nova senha</label>
                        <input type="password">
                    </div><!-- Fim Mudar Email Conta -->

                    <button type="submit">Alterar</button>
                </form>
            </div><!-- Fim Modal Body -->
        </div><!-- Fim Modal Excluir -->

    <script src="../../Components/ADMIN/modal/modalConta.js"></script>
</body>
</html>