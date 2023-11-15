<?php

include_once "../../Dao/conexãoDAO.php";
include_once "../../Model/administrador.php";

?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <form action="../../Controller/administradorController.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Endereço de email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailadmin" required>
                <div id="emailHelp" class="form-text">Nunca compartilhe seu e-mail com mais ninguém.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" >Senha</label>
                <input type="password" class="form-control" name="senhaadmin" id="exampleInputPassword1" required>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Logar</button>
        </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>