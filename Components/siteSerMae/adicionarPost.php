<?php 
include_once("../../../dao/atualizarSessão.php");


?>
    <!--inicio adicionar post-->
    <div class="popup add-post-popup">
        <div>
        <form enctype="multipart/form-data" class="popup-box add-post-popup" action="../../../Controller/publicacaoController.php" method="POST">
                <h1>Novo POST</h1>
                
                <div class="row post-img">
                        <img src="" id="postIMg">
                    <label for="feed-pic-upload" class="feed-upload-button">
                        <span><i class="fa fa-add"></i></span>
                        Carregue sua foto
                    </label>
                    <input type="file" accept="image/jpg, image/png, image/jpeg" id="feed-pic-upload" name="imagemPost">
                    <div class="row post-title">
                
                    <input type="text" placeholder="Escreva uma legenda" id="add-post" name="legenda">
                </div>
                    <input type="submit" class="btn btn-primary btn-lg" value="Add Post" name="admin_ação" >
                </div>
            </form>
            <span class="close"><i class="fa fa-close"></i></span>
        </div>
    </div>


    <script>
        var campoDataHora = document.getElementById("dataHora");
        var elementoMostrado = document.getElementById("dataHoraMostrada");

        campoDataHora.addEventListener("change", function() {
            // Pegar o valor do input quando ele é alterado
            var inputDataHora = campoDataHora.value;
            // Exibir a data e a hora em um elemento HTML
            elementoMostrado.innerHTML = "Data e Hora inseridas: " + inputDataHora;
        });

        
    </script>
    <!--final adicionar post-->
