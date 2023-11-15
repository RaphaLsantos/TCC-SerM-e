<?php
include_once("../../../dao/atualizarSessão.php");
include_once "../../../Model/publicacao.php";
include_once "../../../Dao/publicacaoDAO.php";
include_once "../../../Model/usuario.php";
include_once "../../../Dao/usuarioDAO.php";

$publicacao = new Publicacao();
$publicacaodao = new PublicacaoDAO();
$usuario = new Usuario();
$usuariodao = new usuarioDAO();

$publicacoes = $publicacaodao->readPublicacao();
$imgPublicacao = $publicacao->getImgPublicacao();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../css/siteSerMae/home/inicioSite.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../css/siteSerMae/configuracoes/privacidade.css">
    <title>Privacidade</title>
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
    

    <div class="opcoes">
        <div class="nav-conta">
            <h1 class="text-1">Privacidade</h1>
            <a href="index.php"><button class="btn-conta-voltar">Voltar</button></a>
        </div>

        <div class="menu">

          <div class="modal-container">
            <a href="#" class="sub-menu-link">
              <p>Privar conta</p>
              <span><i class="fa-solid fa-caret-right"></i></span>
            </a>
            <div class="modal" tabindex="0">
                <p class="text">Deseja privar sua conta?</p>
              <div class="buttonsSair">
                <button class="yesSair">Sim</button>
                <button class="noSair close-button">Não</button>
              </div>
            </div>
          </div>


          <div class="modal-container">
            <a href="#" class="sub-menu-link-blocked" id="openModalButton">
              <p>Contas bloqueadas</p>
              <span><i class="fa-solid fa-caret-right"></i></span>
            </a>

            <div id="myModal" class="modal-blocked">
              <div class="modal-content-blocked">
              <i class="fa-solid fa-xmark close" id="closeModalButton"></i>
                <h2 class="text-blocked">Contas que você bloqueou</h2>

                <div class="scroll-view-blocked">
                  <div class="cards-blocked">
                      <!-- Primeiro Card -->
                      <div class="cards">
                          <img class="img-blocked" src="../../../img/siteSerMae/configuracoes/blokeds/L.jpg" alt="">
                          <h3>Vania Escoteira</h3>
                          <i class="fa-solid fa-ellipsis-vertical" id="modalIcon1"></i>
                          <!-- Modal para o primeiro card -->
                          <div class="modal-container-opcao" id="modalContainer1">
                              <div class="modal-box-opcao">
                                  <p>Deseja desbloquear usuária?</p>
                                  <div class="buttons">
                                      <button class="yes-unlock-1" type="submit">Yes</button>
                                      <button class="yes-unlock-2" data-modal-target="#modalContainer1">No</button>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <hr class="custom-hr">
                      <!-- Segundo Card -->
                      <div class="cards">
                      <img class="img-blocked" src="../../../img/siteSerMae/configuracoes/blokeds/L.jpg" alt="">
                          <h3>Vania Escoteira</h3>
                          <i class="fa-solid fa-ellipsis-vertical" id="modalIcon2"></i>
                          <!-- Modal para o segundo card -->
                          <div class="modal-container-opcao" id="modalContainer2">
                              <div class="modal-box-opcao">
                                  <p>Deseja desbloquear usuária?</p>
                                  <div class="buttons">
                                      <button class="yes-unlock-1" type="submit">Yes</button>
                                      <button class="yes-unlock-2" data-modal-target="#modalContainer2">No</button>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <hr class="custom-hr">
                      <div class="cards">
                      <img class="img-blocked" src="../../../img/siteSerMae/configuracoes/blokeds/L.jpg" alt="">
                          <h3>Vania Escoteira</h3>
                          <i class="fa-solid fa-ellipsis-vertical" id="modalIcon2"></i>
                          <!-- Modal para o segundo card -->
                          <div class="modal-container-opcao" id="modalContainer2">
                              <div class="modal-box-opcao">
                                  <p>Deseja desbloquear usuária?</p>
                                  <div class="buttons">
                                      <button class="yes-unlock-1" type="submit">Yes</button>
                                      <button class="yes-unlock-2" data-modal-target="#modalContainer2">No</button>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <hr class="custom-hr">
                      <div class="cards">
                      <img class="img-blocked" src="../../../img/siteSerMae/configuracoes/blokeds/L.jpg" alt="">
                          <h3>Vania Escoteira</h3>
                          <i class="fa-solid fa-ellipsis-vertical" id="modalIcon2"></i>
                          <!-- Modal para o segundo card -->
                          <div class="modal-container-opcao" id="modalContainer2">
                              <div class="modal-box-opcao">
                                  <p>Deseja desbloquear usuária?</p>
                                  <div class="buttons">
                                      <button class="yes-unlock-1" type="submit">Yes</button>
                                      <button class="yes-unlock-2" data-modal-target="#modalContainer2">No</button>
                                  </div>
                              </div>
                          </div>
                      </div>

                    </div>
                </div>

              </div>
            </div>

          </div>

        </div>

    </div>


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

<!--modal cards-blocked inicio-->
<script>
  document.addEventListener("DOMContentLoaded", function () {
  const openModalButton = document.getElementById("openModalButton");
  const closeModalButton = document.getElementById("closeModalButton");
  const modal = document.getElementById("myModal");

  openModalButton.addEventListener("click", function () {
    modal.style.display = "block";
  });

  closeModalButton.addEventListener("click", function () {
    modal.style.display = "none";
  });

  window.addEventListener("click", function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  });
});
</script>
<!--modal cards-blocked final-->


<!--modal opção blocked inicio-->
<script>
    // JavaScript para controlar a exibição/fechamento do modal
    const modalIcons = document.querySelectorAll('.fa-ellipsis-vertical');
    const closeModalButtons = document.querySelectorAll('.yes-unlock-2');

    modalIcons.forEach((icon, index) => {
        icon.addEventListener('click', () => {
            document.getElementById(`modalContainer${index + 1}`).style.display = 'flex';
        });

        closeModalButtons[index].addEventListener('click', () => {
            document.getElementById(`modalContainer${index + 1}`).style.display = 'none';
        });
    });
</script>
<!--modal opção blocked final-->
</body>
</html>