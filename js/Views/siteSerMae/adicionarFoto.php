<?php
include_once("../../Dao/conexãoDAO.php");
include_once("../../dao/restrito.php");
$id = $_SESSION['ID_conta'];
?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/logincadastro/adicionarFotos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Adicionar - foto</title>
</head>

<body>


<main>
    <div class="hero">
        <div class="card">
            <form action="../../controller/usuarioController.php" method="post" enctype="multipart/form-data" id="meuFormulario">
                <img src="../../img/loginCadastro/adicionarFoto/perfil.png" id="profile-pic">
                <h1>Deseja inserir uma foto de perfil?</h1>
                <input type="hidden" name="meuInputHidden" value="<?= $id ?>">
                <div class="buttons">
                    <label class="button-yes" for="input-file">Sim</label>
                    <input type="file" accept="image/*" id="input-file" name="fotoUsuario">
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

</body>

</html>
