<?php  
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

                

               <!--Feed-->
               <?php
                    include('../../../Components/siteSerMae/feedHome.php');   
                ?>
            <!--Feed-->
                

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