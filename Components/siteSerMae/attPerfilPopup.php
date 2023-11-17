<?php 
include_once("../../../dao/atualizarSessão.php");
?>

<div class="modal-header">
    <h2>Editar o seu Perfil</h2>
    <button id="close-modal" type="button">Voltar</button>
</div>
<div class="modal-body">
    <form enctype="multipart/form-data" class="hide" action="../../../Controller/usuarioController.php" method="POST">
        <!--dados inicio-->
        <input type="hidden" name="id" value="<?= $_SESSION['ID_conta'] ?? '' ?>">

        <div class="input-group">
            <h3>E-mail:</h3>
            <input type="text" name="email" value="<?= $_SESSION['email'] ?? '' ?>">
        </div>

        <div class="input-group">
            <h3>Nome Usuária:</h3>
            <input type="text" name="username" id="username" value="<?= $_SESSION['apelido'] ?? '' ?>">
        </div>

        <div class="input-group">
            <h3>Nome Completo:</h3>
            <input type="text" name="position" id="position" value="<?= $_SESSION['nomeUsuario'] ?? '' ?>">
        </div>

        <div class="input-group">
            <h3>Telefone:</h3>
            <input type="text" name="phone" id="phone" value="<?= $_SESSION['telefone'] ?? '' ?>">
        </div>

        <!--dropDown-->
        <div class="dropdown">
            <div class="select">
                <span class="selected"><?= $_SESSION['tipoConta'] ?? '' ?></span>
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
</div>
