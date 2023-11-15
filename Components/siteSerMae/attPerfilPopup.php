<?php 
include_once("../../../dao/atualizarSessão.php");


?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Neuton:wght@200&family=Share+Tech+Mono&display=swap');
*, *::before, *::after{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    text-decoration: none;
    list-style: none;
    border: none;
}
:root{
    --roxa: #a683ff;
    --verde: #cae4ce;
    --azul:  #d2ecf2;
    --rosa:  #ffe3dd;
    --branco: #fff;
    --preto: #000;

    --btn-padding:.6rem 2rem;
    --border-radius: 2rem;
    --card-border-radius:1rem;
    --search-padding:.6rem 1rem;
    --card-padding:.1rem;
}
</style>

<form enctype="multipart/form-data" class="popup-box add-post-popup" action="../../../Controller/usuarioController.php" method="POST">
     <div class="input-group">
        <h3>E-mail:</h3>
        <input type="text" name="email" value="<?= $_SESSION['email'] ?>">
    </div>

    <div class="input-group">
        <h3>Nome Usuária:</h3>
        <input type="text" name="username" id="username" value="<?= $_SESSION['apelido']?>">
    </div>

    <div class="input-group">
        <h3>Nome Completo:</h3>
        <input type="text" name="position" id="position" value="<?= $_SESSION['nomeUsuario'] ?>">
    </div>

    <div class="input-group">
        <h3>Telefone:</h3>
        <input type="text" name="phone" id="phone" value="<?= $_SESSION['telefone'] ?>">
    </div>


    <!--dropDown-->
    <div class="dropdown">
        <div class="select">
            <span class="selected"><?= $_SESSION['tipoPerfil'] ?></span>
            <div class="caret"></div>
        </div>
        <ul class="menu">
            <li class="active">Mãe</li>
            <li>Mãe solo</li>
            <li>Tentante</li>
            <li>Gestante</li>
        </ul>
    </div>
    <button id="btn-salvar" type="submit" class="btn btn-primary btn-lg" name="salvar">Salvar Alterações</button>
</form>
