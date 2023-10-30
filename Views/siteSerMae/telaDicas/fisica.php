<?php   
include_once("../../../dao/atualizarSessão.php");
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/siteSerMae/home/inicioSite.css">
    <link rel="stylesheet" href="../../../css/siteSerMae/home/boasVindas.css">
    <link rel="stylesheet" href="../../../css/siteSerMae/telasDicas/dica.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dicas - Saúde Mental</title>
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


    <!--=================================inicio dica-mental=============================-->
    <div class="corpo-dicas-mentais">
        
    <!--inicio nav-->
    <div class="nav-mental">
        <div class="name-dica">
            <h2>SaúdeFísica</h2>

            <!--Modal inicio-->
            <button class="btn-dica btn" id="open-modal">Adicionar dica</button>
                <div id="fade" class="hide"></div>
                <div id="modal" class="hide">
                <div class="modal-header">
                    <div class="imagem">
                        <img class="img-card-dica" src="./../img/siteSerMae/telaDicas/dicas/1.jpg" alt="">
                        <h2>Adicionar foto</h2>
                </div>
                        <button class="btn-dica btn" id="close-modal">Fechar</button>
                </div>


                <div class="modal-body">

                    <div class="dados">               
                        <div class="name-input">
                            <label for="">Nome dica:</label>
                            <input type="text" class="name-dica">
                        </div>

                        <div class="name-input-user">
                            <label for="">Seu nome:</label>
                            <input type="text" class="name-dica">
                        </div>
                    </div>

                    <div class="text-dica">
                        <h1>Dica</h1>
                        <!--add input inicio-->
                        <div class="corpo-add-input"> 
                            <span class="add-input">
                                <i id="adicionarCampo" class="add-requisito fa-solid fa-circle-plus"><h3>Adicionar passos</h3></i>
                                <!-- Botão abrir modal inicio-->
                                <button class="btn-dica-add btn" type="button" id="openModalButton1">Próximo</button>
                                <!-- Modal com IDs exclusivos -->
                                    <div id="myModal1" class="modal-desc">
                                        <div class="modal-content-desc">
                                            <span class="close-desc" id="closeModalButton1"><i class="fa-solid fa-circle-xmark"></i></span>
                                            <h2>Descrição da sua dica</h2>
                                            <p><input type="text" class="txt-desc"></p>
                                            <button class="btn-dica-add btn" type="submit">Adicionar dica</button>
                                        </div>
                                    </div>
                                <!-- Botão abrir modal fim-->
                            </span>
                            <div id="campos" class="body-inputs">
                                <div class="spacer"></div>
                                <input type="text">
                            </div>
                        </div>
                        <!--add input fim-->
                    </div>

                </div>

                </div>
            <!--Modal fim-->

        </div>
        <div class="previous">
            <a href="dicas.php"><button class="btn-voltar btn">Voltar</button></a>
        </div>
    </div>
    <!--final nav-->

    <!--Inicio corpo dicas-mentais-->
    <div class="dicas-mentais">
        
        <div class="card-dicas">
            <div class="img-dica">
            <img class="image" src="../../../img/siteSerMae/telaDicas/dicas/cards/mental.jpg" alt="">
            </div>
            <div class="descricao-dica">
                <h4>Saiba como tirar a pressão psicológica!</h4>
            </div>
            <!--Modal inicio-->
            <button class="btn-dica btn">Ver</button>
            <!--Modal fim-->
        </div>

    </div>
    <!--final corpo dicas-mentais-->
    </div>
    <!--=================================final dica-mental=============================-->


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


<script src="./../../../js/siteSerMae/home/site.js"></script>
<script src="./../../../js/siteSerMae/home/bemVinda.js"></script>
<script src="./../../../js/siteSerMae/telaDicas/modal.js"></script>

<!--ADD input inicio-->
<script>
       document.addEventListener("DOMContentLoaded", function() {
    const formulario = document.getElementById("meuFormulario");
    const camposContainer = document.getElementById("campos");
    const adicionarCampoButton = document.getElementById("adicionarCampo");

    let contadorCampos = 0;

    adicionarCampoButton.addEventListener("click", function() {
        if (contadorCampos < 4) {
            contadorCampos++;

            const novoCampo = document.createElement("input");
            novoCampo.type = "text";
            novoCampo.name = `campo${contadorCampos}`;
            novoCampo.placeholder = `Passo ${contadorCampos}`;
            camposContainer.appendChild(novoCampo);

            if (contadorCampos === 4) {
                adicionarCampoButton.disabled = true; 
            }
        }
    });
});
</script>
<!--ADD input fim-->

<!--modal add descrição inicio-->
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
<!--modal add descrição fim-->

</body>
</html>