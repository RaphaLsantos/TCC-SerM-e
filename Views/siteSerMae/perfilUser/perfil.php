<?php

include_once("../../../dao/atualizarSessão.php");
include_once "../../../Model/publicacao.php";
include_once "../../../Dao/publicacaoDAO.php";
include_once "../../../Dao/salvar.php";

$id = $_SESSION['ID_conta'];
date_default_timezone_set('America/Sao_Paulo');


include_once "../../../Model/usuario.php";
include_once "../../../dao/usuarioDAO.php";
$id = $_SESSION['ID_conta'];
date_default_timezone_set('America/Sao_Paulo');

$usuario = new Usuario();
$usuariodao = new usuarioDAO();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/siteSerMae/perfilUser/perfil.css">
    <link rel="stylesheet" href="../../../css/siteSerMae/home/boasVindas.css">
    <link rel="stylesheet" href="../../../css/siteSerMae/home/inicioSite.css">
    <script src="../../../js/atualizarSessão.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Seu perfil</title>
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


            <!--começo do perfil inicio-->
            <div class="container-profile">
                <div class="fluid-profile">
                    <div class="area-perfil">
                        <div class="box-perfil">

                            <!--informações do perfil inicio-->
                            <div class="informacao-perfil">

                                <!--imagens do perfil inicio-->
                                <div class="papel-parede-img-perfil">
                                    <img data-bs-toggle="modal" class="papel-parede-img" src="../../../img/siteSerMae/perfil/capaIMG/fundo.jpg" id="my-profile-picture" alt="">

                                    <div class="profile-picture" id="my-profile-picture">
                                        <img class="perfil-img" src="../../../img/siteSerMae/Perfis/<?= $_SESSION['fotoPerfil'] ?>" alt="">
                                    </div>
                                </div>
                                <!--imagens do perfil final-->

                                <!--bio inicio-->
                                <div class="area-bio">

                                    <!--nomes usuária-->
                                    <div class="usuario-bio">
                                        <div class="area-nick-nome">
                                            <div class="nick">
                                                <h1><?= $_SESSION['nomeUsuario']; ?></h1>
                                            </div>
                                            <div class="perfil-mulher">
                                                <h1><?= $_SESSION['tipoConta']; ?></h1>
                                            </div>
                                        </div>
                                        <div class="bio">
                                            <p><?= $_SESSION['biografiaUsuario'] ?></p>
                                        </div>

                                        <!--Botão editar perfil inicio-->
                                        <button class="btn-editar-perfil" id="open-modal">Editar</button>
                                        <?php
                                        if ($_SESSION['nivelConta'] == 3) { ?>
                                            <button onclick="admin()" class="btn-editar-perfil">Tela ADMIN</button>
                                        <?php }
                                        ?>
                                        <div id="fade" class="hide"></div>

                                        <div id="modal" class="hide">
                                              <!--dados inicio-->
                                              <?php
                                                    include('../../../components/siteSerMae/attPerfilPopup.php')
                                                ?>
                                                <!--dados final-->
                                        </div>

 
                                    </div>
                                    <!--Botão editar perfil final-->

                                    <!--nomes usuária-->


                                    <!--descrição do perfil inicio-->
                                    <div class="seguindo-seguidores">

                                        <div class="seguindo">
                                            <div class="numeros-seguir">
                                                <p>0</p>
                                            </div>
                                            <div class="seguir-text">
                                                <h1>Seguindo</h1>
                                            </div>
                                        </div>

                                        <div class="seguidores">
                                            <div class="numeros-seguir">
                                                <p>0</p>
                                            </div>
                                            <div class="seguir-text">
                                                <h1>Seguidores</h1>
                                            </div>
                                        </div>

                                        <!--descrição do perfil final-->
                                    </div>
                                    <!--bio final-->

                                </div>
                            </div>
                            <!--informações do perfil final-->

                        </div>
                    </div>
                </div>
                <!-- Seção de Publicações -->
            <div class="publicacoes">
                
                <?php
                include_once "../../../dao/publicacaoDAO.php";
                $publicacaodao = new PublicacaoDAO();
                $publicacao = new Publicacao();

                $publicacoes = $publicacaodao->readPublicacaoByUsuario($id);
                if (count($publicacoes) > 0) {
                    foreach ($publicacoes as $publicacao) {
                        $legenda = $publicacao->getLegendaPublicacao();
                        $imgPublicacao = $publicacao->getImgPublicacao();
                        $numCurtidas = $publicacao->getNumCurtidasPublicacao();
                        $dataPublicacao = $publicacao->getDataPublicacao();
                        $publicacaoId = $publicacao->getIdPublicacao();
                
                        // Converte a data da publicação em um timestamp
                        $timestampPublicacao = strtotime($dataPublicacao);
                
                        // Calcula o tempo decorrido em segundos
                        $tempoDecorrido = time() - $timestampPublicacao;
                
                        // Converte o tempo decorrido em um formato amigável
                        if ($tempoDecorrido < 60) {
                            $tempoFormatado = $tempoDecorrido . " segundo(s) atrás";
                        } elseif ($tempoDecorrido < 3600) {
                            $tempoFormatado = round($tempoDecorrido / 60) . " minuto(s) atrás";
                        } elseif ($tempoDecorrido < 86400) {
                            $tempoFormatado = round($tempoDecorrido / 3600) . " hora(s) atrás";
                        } else {
                            $tempoFormatado = round($tempoDecorrido / 86400) . " dia(s) atrás";
                        }
                        ?>
                
                        <div class="publicacao-container">
                            <div class="publicacao-item borda-arredondada">
                                <img src="../../../img/siteSerMae/publicacao/<?php echo $imgPublicacao; ?>" alt="Imagem da Publicação" class="publicacao-card" style="width: 400px; height: 400px;">
                            </div>
                            <div class="card-2">
                                <div class="icons">
                                    
                                </div>
                            </div>
                            <i class="fa-solid fa-heart">
                            
                                        <?php
                                        if ($numCurtidas == 0) {
                                            echo '0';
                                        } else {
                                            echo $numCurtidas;
                                        }
                                        ?>
                                    </i>
                            
                            <i class="fa-solid fa-pen-to-square" data-action="edit" data-publicacao-id="<?php echo $publicacaoId; ?>"></i>
                            <!-- Button trigger modal -->
                            <a href="../../../Components/siteSerMae/removerPost.php?publicacaoId=<?php echo $publicacaoId; ?>">
                                <i class="fa-solid fa-trash" data-action="delete" data-publicacao-id="<?php echo $publicacaoId; ?>"></i>
                            </a>
                            <br><b><?php echo $legenda; ?></b>
                
                            <!-- Exibe o tempo decorrido formatado -->
                            <p>Publicado <?php echo $tempoFormatado; ?></p>
                        </div>
                    <?php
                    }
                }
                else {
                    echo '<p>Este perfil ainda não possui nenhuma publicação.</p>';
                }
                
                ?>

                
                
            </div>
            </div>
            <!--começo do perfil final-->



            <!--publicações, favoritos e dicas - inicio-->
            <div class="options-perfil">
                <ul class="nav-list-option">
                <li><a href="perfil.php">Publicações</a></li>
                    <li><a href="perfilFavoritos.php">Favoritos</a></li>
                    <li><a href="perfilDicas.php">Dicas</a></li>
                </ul>
            </div>

            

            <!--publicações, favoritos e dicas - final-->




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
    <script src="../../../js/siteSerMae/perfilUser/perfil.js"></script>
    <script src="../../../js/siteSerMae/home/bemVinda.js"></script>

    <script>

        function admin() {
            window.location.href = "../admin/home.php";
        }
    </script>

        <script>
        // Função para fechar o modal
        function closeModal() {
        var modal = document.getElementById("modal");
        modal.classList.add("hide");
        var fade = document.getElementById("fade");
        fade.classList.add("hide");
        }

        // Adicione um ouvinte de evento ao botão "Salvar Alterações"
        var btnSave = document.getElementById("btn-salvar");
        btnSave.addEventListener("click", function (event) {
        // Lógica para processar o salvamento das alterações aqui

        // Feche o modal
        closeModal();
        });
        </script>


</body>

</html>