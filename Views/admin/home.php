<?php
include_once('../../components/ADMIN/navbar.php');
include_once('../../components/ADMIN/navbar/navSuperior.php');
include_once("../../dao/usuarioDAO.php");
include_once("../../model/usuario.php");
include_once("../../dao/atualizarSessão.php");
$usuarioDAO = new usuarioDAO();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM | SERMÃE</title>
    <link rel="stylesheet" href="../../css/ADMIN/style.css">

    <link rel="stylesheet" href="../../components/ADMIN/navbar/navSuperior.css">
    <!-- CSS Navbar -->
    <link rel="stylesheet" href="../../components/ADMIN/style.css">
    <link rel="stylesheet" href="../../css/ADMIN/modal.css">
    <!-- Imports -->
    <!-- BoxIcons CDN links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <section class="home-section">
        <div class="conteudo-adm">
            <div class="main-user">
                <div class="userCadastrado">
                    <p>Usuarias Cadastradas</p>
                    <div class="numCadastrados">
                        <i class='bx bxs-user'></i>
                        <span><?= $usuarioDAO->listaCadastros(); ?></span>
                    </div>

                </div> <!-- Fim UserCadastrado -->

                <div class="userCadastrado">
                    <p>Usuarias Ativas</p>
                    <div class="numCadastrados">
                        <i class='bx bxs-user'></i>
                        <span>0</span>
                    </div>

                </div> <!-- Fim UserCadastrado -->

                <div class="userCadastrado">
                    <p>Usuarias Suspensos</p>
                    <div class="numCadastrados">
                        <i class='bx bxs-user'></i>
                        <span>0</span>
                    </div>

                </div> <!-- Fim UserCadastrado -->

                <div class="userCadastrado">
                    <p>Administradores Cadastrados</p>
                    <div class="numCadastrados">
                        <i class='bx bxs-user'></i>
                        <span>0</span>
                    </div>

                </div> <!-- Fim UserCadastrado -->

                <div class="userCadastrado">
                    <p>Administradores Suspensos</p>
                    <div class="numCadastrados">
                        <i class='bx bxs-user'></i>
                        <span>0</span>
                    </div>

                </div> <!-- Fim UserCadastrado -->
            </div><!-- Fim main-user -->

            <div class="main-graficos">
                <div class="grafico">
                    <div class="colunas">
                        <div class="escala-y">
                            <div class="horas">7 hrs</div>
                            <div class="horas">6 hrs</div>
                            <div class="horas">5 hrs</div>
                            <div class="horas">4 hrs</div>
                            <div class="horas">3 hrs</div>
                            <div class="horas">2 hrs</div>
                            <div class="horas">1 hr</div>
                        </div><!-- Fim Escala Y -->
                        <div class="areaGrafico">
                            <div class="areaBarras">
                                <div class="barras">
                                    <div class="tempoApp rosa" style="height: 30%" data-val="Horas Online: 300"></div>
                                    <div class="tempoApp azul" style="height: 40%" data-val="400"></div>
                                </div>
                                <div class="barras">
                                    <div class="tempoApp rosa" style="height: 50%" data-val="Horas Online: 500"></div>
                                    <div class="tempoApp azul" style="height: 10%" data-val="100"></div>
                                </div>
                                <div class="barras">
                                    <div class="tempoApp rosa" style="height: 70%" data-val="Horas Online: 700"></div>
                                    <div class="tempoApp azul" style="height: 80%" data-val="800"></div>
                                </div>
                                <div class="barras">
                                    <div class="tempoApp rosa" style="height: 100%" data-val="Horas Online: 1000"></div>
                                    <div class="tempoApp azul" style="height: 60%" data-val="600"></div>
                                </div>
                            </div><!-- Fim AreaBarras -->
                            <div class="escala-x">

                                <div class="meses">
                                    Setembro <br>
                                    2023
                                </div><!-- Fim Barra Setembro -->
                                <div class="meses">
                                    Outubro <br>
                                    2023
                                </div><!-- Fim Barra Outubro -->
                                <div class="meses">
                                    Novembro <br>
                                    2023
                                </div><!-- Fim Barra Novembro -->
                                <div class="meses">
                                    Dezembro <br>
                                    2023
                                </div><!-- Fim Barra Dezembro -->
                            </div><!-- Fim Escala X -->
                        </div><!-- Fim AreaGrafico -->
                    </div><!-- Fim Colunas -->
                </div><!-- Fim Grafico -->
                <div class="satisfacaoApp">
                    <div class="headerSatisfacaoApp">
                        <p>Satisfação das usuarias com a serMãe</p>
                    </div><!-- Fim headerSatisfacaoApp -->
                    <div class="corpoSatisfacaoApp">
                        <div class="circular-progress">
                            <span class="progress-value">0%</span>
                        </div>
                    </div><!-- Fim corpoSatisfacaoApp -->
                </div><!-- Fim SatisfaçãoApp -->
            </div><!-- Fim MainGraficos -->

            <input type="text" id="inputBusca" placeholder="O que você procura?">
            <div class="tabelaUsuarias">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome de Usuario</th>
                            <th>Email de Usuario</th>
                            <th>Tipo de Perfil</th>
                            <th>Situação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <?php foreach ($usuarioDAO->read() as $usuario) : ?>
                        <tbody>
                            <tr>
                                <td><?= $usuario->getIdUsuario() ?></td>
                                <td><?= $usuario->getNomeUsuario() ?></td>
                                <td><?= $usuario->getEmailUsuario() ?></td>
                                <td><?php
                                    if ($usuario->getTipoDePerfil() == 1) {
                                        echo "Mãe convencional";
                                    } else if ($usuario->getTipoDePerfil() == 2) {
                                        echo "Gestante";
                                    } else if ($usuario->getTipoDePerfil() == 3) {
                                        echo "Tentante";
                                    } else if ($usuario->getTipoDePerfil() == 4) {
                                        echo "Mãe Solo";
                                    } else {
                                        echo "Desconhecido";
                                    }
                                    ?>
                                </td>
                                <td><?php
                                    if ($usuario->getStatusConta() == 1) {
                                        echo "Ativo";
                                    } else if ($usuario->getStatusConta() == 2) {
                                        echo "Suspenso";
                                    } else if ($usuario->getStatusConta() == 3) {
                                        echo "Banido";
                                    }
                                    ?></td>
                                <td class="iconEdit"><i class='bx bx-edit'></i></td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div><!-- Fim TabelaUsuarias -->
        </div>
    </section>

    <!-- Modal -->
    <div id="fade" class="hide"></div>
    <div id="modal" class="hide">
        <div id="modal-header">
            <h3>ID de Usuaria:
                <p class="idUser">
                    <?= $usuario->getIdUsuario() ?>
                </p>
            </h3>
            <button id="fechar-modal">x</button>
        </div><!-- Fim Modal Header -->

        <div id="modal-body">
            <div class="infosUsuario">
                <h2><?= $usuario->getNomeUsuario() ?></h2>
                <div class="mainFoto">
                    <div class="foto">
                        <img src="../../img/Perfis/<?= $usuario->getFotoDePerfil() ?>" alt="">
                    </div><!-- Fim Foto -->

                    <div class="mainInfoUser">
                        <div class="email">
                            <h3 class="emailUser">
                                <?= $usuario->getEmailUsuario() ?>
                            </h3>
                        </div><!-- Fim Email -->

                        <div class="apelido">
                            <h3 class="apelidoUser">
                                <?= $usuario->getApelidoUsuario() ?>
                            </h3>
                        </div><!-- Fim Apelido -->
                    </div><!-- Fim MainInfoUser -->

                    <div class="situacaoConta">
                        <h3 class="situacaoUser">
                            <?php
                            if ($usuario->getStatusConta() == 1) {
                                echo "Ativo";
                            } else if ($usuario->getStatusConta() == 2) {
                                echo "Suspenso";
                            } else if ($usuario->getStatusConta() == 3) {
                                echo "Banido";
                            }
                            ?>
                        </h3>

                        <div class="tipoMae">
                            <h3>
                                <?php
                                if ($usuario->getTipoDePerfil() == 1) {
                                    echo "Mãe convencional";
                                } else if ($usuario->getTipoDePerfil() == 2) {
                                    echo "Gestante";
                                } else if ($usuario->getTipoDePerfil() == 3) {
                                    echo "Tentante";
                                } else if ($usuario->getTipoDePerfil() == 4) {
                                    echo "Mãe Solo";
                                } else {
                                    echo "Desconhecido";
                                }
                                ?>
                            </h3>
                        </div>

                    </div>
                </div><!-- Fim MainFoto -->
                <form method="post" action="../../Controller/administradorController.php">
                <div class="dropdownSituacao">
                    <input type="hidden" id="id_secreto" name="id_do_user">
                    <select id="situacao" name="opção">
                        <option value="2">Suspenso</option>
                        <option value="1">Ativo</option>
                    </select>
                </div><!-- Fim DropdownSituação -->


                <div class="btnGroup">
                    <button class="salvar" type="submit" name="admin_ação" onclick="pegarID(<?= $usuario->getIdUsuario() ?>, 'id_secreto')">Salvar</button>
                </div>
                </form><!-- Fim BtnGroups -->
            </div><!-- Fim InfoUsuarios -->
        </div><!-- Fim Modal Body -->
    </div><!-- Fim Modal -->

    <?php if((isset($_GET['msg']) && $_GET['msg'] == "Atualização_Executada")) { ?>
        <div class="modal-containerBanir">
            <div class="modal">
                <h2>Sucesso.</h2>
                <p>Atualização realizada!</p>
                <hr />
                <div class="btns">
                    <button class="btnOK" onclick="closeModal(0)">OK</button>
                </div>
            </div>
            <script>
            const modalErro = document.querySelector('.modal-containerBanir')
            const opcaoModal = [modalErro]

            function openModal(a) {
                opcaoModal[a].classList.add('active')
            }

            function closeModal(b) {
                opcaoModal[b].classList.remove('active');
                window.location.href = "home.php"
            }

            openModal(0);
        </script>
    <?php } ?>

    <script>
        function pegarID(id, elemento){
            document.getElementById(elemento).value = id;
        }
    </script>

    <script src="../../Components/ADMIN/menu-lateral.js"></script>
    <script src="../../Components/ADMIN/modal/modal.js"></script>
    <script src="../../js/ADMIN/inputBusca.js"></script>

</body>

</html>