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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- BoxIcons CDN links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <section class="home-section">
        <div class="conteudo-adm">
            <div class="main-user">
                <div class="userCadastrado">
                    <div class="numUsers">
                        <i class='bx bxs-user'></i>
                        <span><?= $usuarioDAO->listaCadastros("cadastrados"); ?></span>
                    </div><!-- Fim NumUsers -->
                    <p>Usuarias Cadastradas</p>
                </div> <!-- Fim UserCadastrado -->

                <div class="userAtivas">
                    <div class="numUsers">
                        <i class='bx bxs-user'></i>
                        <span><?= $usuarioDAO->listaCadastros("ativos"); ?></span>
                    </div><!-- Fim NumUsers -->
                    <p>Usuarias Ativas</p>
                </div> <!-- Fim UserCadastrado -->

                <div class="userSuspenso">
                    <div class="numUsers">
                        <i class='bx bxs-user'></i>
                        <span><?= $usuarioDAO->listaCadastros("suspenso"); ?></span>
                    </div><!-- Fim NumUsers -->
                    <p>Usuarias Suspensos</p>
                </div> <!-- Fim UserCadastrado -->
            </div><!-- Fim main-user -->

            <div class="main-graficos" >
                <div class="satisfacaoApp">
                    <div class="headerSatisfacaoApp">
                        <p style="font-size: 16px">Usuárias por tipo de perfil</p>
                    </div><!-- Fim headerSatisfacaoApp -->
                    <div class="corpoSatisfacaoApp">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                    </div>
                    

                    <script>
                        const ctx = document.getElementById('myChart');

                        new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                datasets: [{
                                    label: '# of Votes',
                                    data: [12, 19, 3, 5, 2, 3],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    </script>
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
                                <td><?= $usuario->getTipoDePerfil() ?></td>
                                <td><?php
                                    if ($usuario->getStatusConta() == 1) {
                                        echo "Ativo";
                                    } else if ($usuario->getStatusConta() == 2) {
                                        echo "Suspenso";
                                    } else if ($usuario->getStatusConta() == 3) {
                                        echo "Banido";
                                    }
                                    ?></td>
                                <td>
                                    <button type="button" id="<?= $usuario->getIdUsuario() ?>" class="view_data" onclick="PegarID(<?= $usuario->getIdUsuario(); ?>)">
                                        Open Modal
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                </table>
            </div><!-- Fim TabelaUsuarias -->
        </div>
    </section>

    <dialog id="modal">
        <button onclick="fecharModal()">Fechar modal</button>
        <div class="conteudo_modal">
            <form action="../../Controller/usuarioController.php" method="post">
                <input type="hidden" id="id_escondido" name="ID">
                <span id="info_user"></span>

            </form>
        </div>
    </dialog>




    <?php if ((isset($_GET['msg']) && $_GET['msg'] == "Atualização_Executada")) { ?>
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

        <script src="../../Components/ADMIN/modal/modal.js"></script>
        <script src="../../Components/ADMIN/menu-lateral.js"></script>
        <script src="../../js/ADMIN/inputBusca.js"></script>
        <script src="assets/js/main.js"></script>

</body>

</html>