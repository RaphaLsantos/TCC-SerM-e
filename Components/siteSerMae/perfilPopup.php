<!--inicio perfil-popUp-->
  <div class="popup profile-popup">
        <div>
            <div class="popup-box profile-popup-box">
                <h1></h1>
                <p></p>
                <div id="my-profile-picture">
                    <img src="../../img/Perfis/<?= $_SESSION['fotoPerfil'] ?>">
                </div>
                <label for="profile-upload" class="btn btn-primary btn-lg">Escolha uma foto</label>
                <input type="file" accept="image/jpg, image/png, image/jpeg" id="profile-upload">
                <a href="../../dao/logoff.php" class="btn btn-primary btn-lg">Sair</a>
            </div>
            <span class="close"><i class="fa fa-close"></i></span>
        </div>
    </div>
    <!--Final perfil-popUp-->