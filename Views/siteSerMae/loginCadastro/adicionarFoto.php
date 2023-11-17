<?php
include_once("../../../dao/conexãoDAO.php");
include_once("../../../dao/restrito.php");
$id = $_SESSION['ID_conta'];
?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/siteSerMae/logincadastro/adicionarFotos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Adicionar - foto</title>
</head>

<body>


<main>
    <div class="hero">
        <div class="card">
            <form action="../../../Controller/usuarioController.php" method="post" enctype="multipart/form-data" id="meuFormulario">
                <img src="../../../img/siteSerMae/loginCadastro/adicionarFoto/perfil.png" id="profile-pic">
                <h1>Deseja inserir uma foto de perfil?</h1>
                <input type="hidden" name="meuInputHidden" value="<?= $id ?>">
                <div class="buttons">
                    <label class="button-yes" for="input-file">Sim</label>

                    <a class="button-no" id="input-file-2" href="../../../Views/siteSerMae/home/boasVindas.php">
                            Não
                    </a>

                    <a style="display: none; text-align: center;" id="input-file-2" class="button-cancelar" href="../../../Views/siteSerMae/home/boasVindas.php">
                        <h4>Cancelar</h4>
                    </a>

                    <input type="file" accept="image/*" id="input-file" name="fotoUsuario" style="display: none;">
                    <input type="hidden" name="atualizaPerfil" class="button-yes" value="Enviar" id="EnviarButton">
                </div>
            </form>
        </div>
    </div>
</main>

<script>
    let profilePic = document.getElementById("profile-pic");
    let inputFile = document.getElementById("input-file");
    let botaoSubmit = document.getElementById("EnviarButton");
    let afterButton = document.getElementById('afterButton');

    inputFile.onchange = function() {
        profilePic.src = URL.createObjectURL(inputFile.files[0]);

        afterButton = document.getElementById('EnviarButton').type = "submit";

    }
</script>

<!--sumir e aparecer botão-->
<script>
document.getElementById('input-file').addEventListener('change', function() {
    if (this.files.length > 0) {
        document.querySelector('.button-yes').style.display = 'none';
    }
});

document.getElementById('input-file').addEventListener('change', function() {
    if (this.files.length > 0) {
        document.querySelector('.button-no').style.display = 'none';
    }
});

document.getElementById('input-file').addEventListener('change', function() {
    if (this.files.length > 0) {
        document.querySelector('.button-cancelar').style.display = 'flex';
    }
});
</script>
<!--sumir e aparecer botão-->


</body>

</html>
