<?php
session_start();    
include_once("../../../dao/atualizarSessão.php");
include_once "../../../Model/publicacao.php";
include_once "../../../dao/publicacaoDAO.php";
include_once "../../../Model/usuario.php";
include_once "../../../dao/usuarioDAO.php";

$publicacao = new Publicacao();
$publicacaodao = new PublicacaoDAO();
$usuario = new Usuario();
$usuariodao = new usuarioDAO();
date_default_timezone_set('America/Sao_Paulo');

$publicacoes = $publicacaodao->readPublicacao();
$imgPublicacao = $publicacao->getImgPublicacao();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/siteSerMae/home/inicioSite.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--link swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <title>serMãe</title>
</head>
<body>

    <!--navBar-->
    <?php
    include('../../../Components/siteSerMae/navBar.php');   
    ?>
    <!--navBar-->

    <!--Main-->
    <main>
    <div class="container main-container">


    <!--Main left inicio-->
    <div class="main-left">
                    <!--inicio Boas vindas-->
                    <?php
                    include('../../../Components/siteSerMae/boasVindas.php')
                    ?>
                    <!--final Boas vindas-->

                    <!--start aside bar-->
                    <?php
                    include('../../../Components/siteSerMae/menu.php')
                    ?>
                    <!--end aside bar-->
    </div>
    <!--Main left fim-->



    <!--Main middle inicio-->
    <div class="main-middle">
        <div class="middle-container">
               <!--post input-->
               <form class="add-post input-post">
                <input type="text" placeholder="No que você está pensando?" id="add-post">
                <input type="submit" value="Postar" class="btn btn-primary">
               </form>

               <!--Inicio do Feed-->
               <div class="feeds">
                <div class="feed">
                    <!--Feed Top-->
                    <div class="feed-top">
                        <div class="user">
                            <div class="profile-picture" id="my-profile-picture">
                                <a href="perfil.php"><img src="./../../../img/siteSerMae/Perfis/<?= $_SESSION['fotoPerfil'] ?>" alt=""></a>
                            </div>
                            <div class="info">
                                <h3>Ana Saúde</h3>
                                <div class="time text-coment">
                                    <small> BRASIL, <span>Dia 2, agosto</span></small>
                                </div>
                            </div>
                        </div>    
                        <!--menu denuncia inicio-->
                        <span class="edit">
                        <i class="fas fa-ellipsis" data-modal-target="modal1"></i>
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <p class="denunciar" id="openModalButton1">Denunciar</p>
                                  <!-- Modal com IDs exclusivos -->
                                  <div id="myModal1" class="modal-desc">
                                        <div class="modal-content-desc">
                                            <span class="close-desc" id="closeModalButton1"><i class="fa-solid fa-circle-xmark"></i></span>
                                            <h2>Por que você está denunciando essa publicação?</h2>
                                            <div class="opcoes">

                                            <!--efeito button-->
                                            <button class="learn-more" type="submit">
                                            <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                            </span>
                                            <span class="button-text">Informação falsa</span>
                                            </button>
                                               
                                            <button class="learn-more" type="submit">
                                            <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                            </span>
                                            <span class="button-text">Simplesmente não gostei</span>
                                            </button>

                                            <button class="learn-more" type="submit">
                                            <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                            </span>
                                            <span class="button-text">Símbolos ou discurso de ódio</span>
                                            </button>

                                            <button class="learn-more" type="submit">
                                            <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                            </span>
                                            <span class="button-text">Golpe ou fraude</span>
                                            </button>
                                            <!--efeito button-->

                                            </div>
                                            
                                        </div>
                                    </div>
                                <!-- Botão abrir modal fim-->
                                <hr class="linha-denuncia">
                                <h2 class="close" data-modal-close="modal1">Cancelar</h2>
                            </div>
                        </div>
                        </span>
                        <!--menu denuncia final-->
                    </div>
                    <!--Feed IMG-->
                    <div class="feed-img">
                       <h2>Nada melhor que um bom domingo de treino físico</h2>
                    </div>
                    <!--Feed ação aria-->
                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-heart"></i></span>
                            <span><i class="fa fa-comment-dots"></i></span>
                        </div>
                        <div class="bookmark">
                            <i class="fa fa-bookmark"></i>
                        </div>
                    </div>

                    <!--liked by-->
                    <div class="liked-by">
                        <span><img src="./../../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <span><img src="./../../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <span><img src="./../../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <p><b>Vitória</b> e mais <b>77 comentários</b></p>
                    </div>

                    <!--caption-->
                    <div class="caption">
                        <div class="title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestiae, mollitia.</div>
                        <p><b>Lana white</b>Lorem ipsum dolor sit, amet consectetur adipisicing.
                        <span class="hars-tag">#saúdeFisica</span></p>
                    </div>

                    <!--Comentários-->
                    <div class="comments text-coment">
                        Ver mais comentários
                    </div>
                </div>

                

                <div class="feed">

                    <!--Feed Top-->
                    <?php 

                        if (count($publicacoes) > 0) {
                            foreach ($publicacoes as $publicacao) {
                                $legenda = $publicacao->getLegendaPublicacao();
                                $imgPublicacao = $publicacao->getImgPublicacao();
                                $dataPublicacao = $publicacao->getDataPublicacao();

                        $timestampPublicacao = strtotime($dataPublicacao);

                        $tempoDecorrido = time() - $timestampPublicacao;
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
                    <div class="feed-top">
                        <div class="user">
                            <div class="profile-picture">
                                <a href="perfil.php"><img src="./../../../img/siteSerMae/Perfis/<?= $_SESSION['fotoPerfil'] ?>" alt=""></a>
                            </div>
                            <div class="info">
                                <h3><?= $_SESSION['nomeUsuario']; ?></h3>
                                <div class="time text-coment">
                                    <small> BRAZIL, <span><?php $publicacao->getDataPublicacao(); ?></span></small>
                                </div>
                            </div>
                        </div>    
                        <!--menu denuncia inicio-->
                        <span class="edit">
                        <i class="fas fa-ellipsis" data-modal-target="modal1"></i>
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                                <p class="denunciar" id="openModalButton1">Denunciar</p>
                                  <!-- Modal com IDs exclusivos -->
                                  <div id="myModal1" class="modal-desc">
                                        <div class="modal-content-desc">
                                            <span class="close-desc" id="closeModalButton1"><i class="fa-solid fa-circle-xmark"></i></span>
                                            <h2>Por que você está denunciando essa publicação?</h2>
                                            <div class="opcoes">

                                            <!--efeito button-->
                                            <button class="learn-more" type="submit">
                                            <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                            </span>
                                            <span class="button-text">Informação falsa</span>
                                            </button>
                                               
                                            <button class="learn-more" type="submit">
                                            <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                            </span>
                                            <span class="button-text">Simplesmente não gostei</span>
                                            </button>

                                            <button class="learn-more" type="submit">
                                            <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                            </span>
                                            <span class="button-text">Símbolos ou discurso de ódio</span>
                                            </button>

                                            <button class="learn-more" type="submit">
                                            <span class="circle" aria-hidden="true">
                                            <span class="icon arrow"></span>
                                            </span>
                                            <span class="button-text">Golpe ou fraude</span>
                                            </button>
                                            <!--efeito button-->

                                            </div>
                                            
                                        </div>
                                    </div>
                                <!-- Botão abrir modal fim-->
                                <hr class="linha-denuncia">
                                <h2 class="close" data-modal-close="modal1">Cancelar</h2>
                            </div>
                        </div>
                        </span>
                        <!--menu denuncia final-->
                    </div>
                    <!--Feed IMG-->
                    <div class="feed-img">
                        <?php  echo '<img src="../../../img/siteSerMae/publicacao/' . $imgPublicacao . '" alt="Imagem da Publicação" class="publicacao-card"">';?>
                    </div>

                    <!--Feed ação aria-->
                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-heart"></i></span>
                            <span><i class="fa fa-comment-dots"></i></span>
                        </div>
                        <div class="bookmark">
                            <i class="fa fa-bookmark"></i>
                        </div>
                    </div>


                    <!--liked by-->
                    <div class="liked-by">
                        <span><img src="./../../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <span><img src="./../../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <span><img src="./../../../img/siteSerMae/home/asideBar/eu.png" alt=""></span>
                        <p><b>Vitória</b> e mais <b>77 comentários</b></p>
                    </div>

                    <!--caption-->
                    

                    <?php 
                             echo '<div class="caption">';
                             echo '<div class="title"><b>' . $legenda . '</b></div>';
                             echo '<p> Publicado a ' . $tempoFormatado . '</p>';
                             echo '</div><br>';
                        }
                    }else{
                        echo '<p>Não há publicações registradas.</p>';

                    }
                    ?>

                    <!--Comentários-->
                    <div class="comments text-coment">
                        Ver mais comentários
                    </div>
                </div>
               </div>
               <!--Final do Feed-->

                    </div>
    </div>
    <!--Main middle fim-->



    <!--Main right inicio-->
    <div class="main-right">
                    <!--inicio melhores amigos-->
                    <div class="amigos">
                        <h3>Lista de amizade</h3><br>
                        
                        <div class="request">
                            <div class="info">
                                <div class="profile-picture">
                                    <img src="./../../../img/siteSerMae/home/melhoresAmigos/4.jpg" alt="">
                                </div>
                            <div>
                                <div class="dados-amigos">
                                     <h5>Isabela Teodoro</h5>
                                    <p class="text-amigos">Online há 4 horas</p>
                                </div>
                                 </div>
                            </div>
                        </div>

                        <div class="request">
                            <div class="info">
                                <div class="profile-picture">
                                    <img src="./../../../img/siteSerMae/home/melhoresAmigos/2.jpg" alt="">
                                </div>
                            <div>
                                <div class="dados-amigos">
                                    <h5>Isabela Teodoro</h5>
                                   <p class="text-amigos">Online há 4 horas</p>
                               </div>
                                 </div>
                            </div>
                        </div>

                        <div class="request">
                            <div class="info">
                                <div class="profile-picture">
                                    <img src="./../../../img/siteSerMae/home/melhoresAmigos/3.jpg" alt="">
                                </div>
                            <div>
                                <div class="dados-amigos">
                                    <h5>Isabela Teodoro</h5>
                                   <p class="text-amigos">Online há 4 horas</p>
                               </div>
                                 </div>
                            </div>
                        </div>

                    </div>
                    <!--final melhores amigos-->

                    
                    <!--inicio dicas destaques-->
                    <div class="corpo-destaques">
                        <h3>Dicas destaques</h3>

                        <div class="dicas-destaques">

                            <div class="card-dicas">
                                <h3 class="txt-dicas">Saúde para a vida</h3>
                                <img class="img-dica" src="../../../img/siteSerMae/home/destaques/1.png" alt="">
                            </div>

                        </div>
                       
                    </div>
                    <!--dicas destaques-->
    </div>
    <!--Main right fim-->

            </div>
        </main>
    <!--Main-->




    <!--Inicio popup aria-->
    <!--final perfil-popUp-->
    <?php
    include('../../../Components/siteSerMae/perfilPopup.php')
    ?>
    <!--inicio perfil-popUp-->

    <!--inicio adicionar post-->
    <?php
    include('../../../Components/siteSerMae/adicionarPost.php')
    ?>
    <!--final adicionar post-->
    <!--Final popup aria-->



    <script src="../../../js/siteSerMae/home/site.js"></script>

    <!--link JS swiper story-->
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'
        let swiper = new Swiper(".mySwiper", {
         slidesPerView: 6,   
         spaceBetween: 5,
        })
    </script>
    <!--link JS swiper story-->


<!--modal denunciar inicio-->
<script>
 document.addEventListener('DOMContentLoaded', function () {
    const ellipsisIcons = document.querySelectorAll('.fas.fa-ellipsis');
    
    ellipsisIcons.forEach(function (icon) {
        icon.addEventListener('click', function () {
            const modalId = this.getAttribute('data-modal-target');
            const modal = document.getElementById(modalId);
            modal.style.display = 'block';
        });
    });

    const closeButtons = document.querySelectorAll('.close');
    closeButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const modalId = this.getAttribute('data-modal-close');
            const modal = document.getElementById(modalId);
            modal.style.display = 'none';
        });
    });
});
</script>
<!--modal denunciar final-->

<!--modal2 denunciar inicio-->
<script>
const openModalButton1 = document.getElementById("openModalButton1");
const closeModalButton1 = document.getElementById("closeModalButton1");
const modal1 = document.getElementById("myModal1");

openModalButton1.addEventListener("click", function() {
    modal1.style.display = "block";
});

closeModalButton1.addEventListener("click", function() {
    modal1.style.display = "none";
});

// Fechar o modal clicando fora da área do modal
window.addEventListener("click", function(event) {
    if (event.target === modal1) {
        modal1.style.display = "none";
    }
});
</script>
<!--modal2 denunciar final-->
</body>
</html>