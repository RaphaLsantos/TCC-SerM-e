<!--<?php
include('../../Components/ADMIN/navbar.php');

include('../../components/ADMIN/navbar/navSuperior.php');
?>
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagens</title>
    <link rel="stylesheet" href="../../css/ADMIN/mensagem.css">

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
            <div class="mainMensagem">
                <div class="msgRecebidas">
                    <p>Mensagens Recebidas</p>
                        <div class="numCadastrados">
                            <i class='bx bx-envelope'></i>
                            <span>0</span>
                        </div>
                </div><!-- Fim MsgRecebidas -->
                <div class="msgRespondida">
                    <p>Mensagens Respondidas</p>
                        <div class="numCadastrados">
                            <i class='bx bx-envelope-open' ></i>
                            <span>0</span>
                        </div>
                </div><!-- Fim MsgRespondida -->
                <div class="msgNVistas">
                    <p>Mensagens Não Vistas</p>
                        <div class="numCadastrados">
                            <i class='bx bx-low-vision' ></i>
                            <span>0</span>
                        </div>
                </div><!-- Fim MsgNaoVistas -->
            </div><!-- Fim mainMensagem -->

            <div class="tabelaMensagem">
                <div class="msgUsuaria">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Responder</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="idUsuaria">1</th>
                                <th>Luciana</th>
                                <th>luciana@gmail.com</th>
                                <th class="iconResponder">
                                        <i class='bx bx-pencil'></i>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- Fim msgUsuaria -->

                <div class="Mensagem">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Responder</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="idUsuaria">1</th>
                                <th>Luciana</th>
                                <th class="iconResponder">
                                    <i class='bx bx-clipboard'></i>
                                    <i class='bx bx-trash'></i>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- Fim Mensagem -->
            </div> <!-- Fim tabelaMensagem -->
        </div><!-- Fim ConteudoAdm -->
        
        <!-- Modal Mensagem -->
        <div id="fadeMensagem" class="hide"></div>
            <div id="modalMensagem" class="hide">
                <div id="modalHeaderMensagem">
                    <h3>ID Mensagem: 
                        <p class="idMensagem">
                            1
                        </p>
                    </h3>
                    <button id="fecharModalMensagem">x</button>
                </div><!-- Fim Modal Header -->

                <div id="modalBodyMensagem">
                <div class="infoUsuario">
                        <div class="fotoNome">
                            <img src="../../img/ADMIN/perfil.png" alt="">
                            <p class="apelidoUser">
                                Juliana
                            </p>
                            <p class="nomeUser">
                                Juliana cabral Viana
                            </p>
                        </div><!-- Fim FotoNome -->
                        <div class="mensagemUsuaria">
                            <textarea name="#" id="#"></textarea>
                        </div><!-- Fim MensagemUsuaria -->
                    </div><!-- Fim infoUsuario --> 
                    <div class="infosAdm">
                        <div class="fotoNomeAdm">
                            <img src="../../img/ADMIN/perfil.png" alt="">
                            <p class="apelidoAdm">
                                joao
                            </p>
                            <p class="nomeAdm">
                                Joao Costa ferreira
                            </p>
                        </div><!-- Fim FotoNomeAdm -->
                        <div class="respostaAdm">
                            <textarea name="#" id="#"></textarea>
                            <button type="submit" class="btnResponder">Responder</button>
                        </div><!-- Fim MensagemUsuaria -->
                    </div><!-- Fim InfoAdm -->
                </div><!-- Fim Modal Body -->
            </div><!-- Fim Modal Mensagem -->

        <!-- Modal Excluir -->
        <div id="fade" class="hide"></div>
            <div id="modal" class="hide">
                <div id="modal-header">
                    <h3>ID Mensagem: 
                        <p class="idMensagem">
                            1
                        </p>
                    </h3>
                    <button id="fechar-modal">x</button>
                </div><!-- Fim Modal Header -->

                <div id="modal-body">
                    <h4>Deseja realmente excluir a mensagem?</h4>
                    <div class="actionLinks">
                        <div class="links">
                            <a href="#" class="nao">Não</a>
                            <a href="#" class="sim">Sim</a>
                        </div>
                        
                    </div>
                </div><!-- Fim Modal Body -->
            </div><!-- Fim Modal Excluir -->
    </section><!-- Fim HomeSection -->
    
    <!-- Importações JS  -->
    <script src="../../Components/ADMIN/menu-lateral.js"></script>
    <script src="../../Components/ADMIN/modal/modalMensagem.js"></script>
    <script src="../../Components/ADMIN/modal/modalExcluirMensagem.js"></script>
</body>
</html>