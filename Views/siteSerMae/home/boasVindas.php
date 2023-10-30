<?php   
include_once("../../../dao/atualizarSessão.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/siteSerMae/home/boasVindas.css">
    <link rel="stylesheet" href="../../../css/siteSerMae/select.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Seja Bem-vinda!</title>
</head>

<body>



    <main class="main-1">
        <section class="corpo">

            <div class="div-user">
                <img class="imagem" src="../../../img/siteSerMae/bemvinda/serMãe.png" width="500px" height="400px" alt="">
            </div>

            <form action="../../Controller/usuarioController.php" method="post">
                <div class="perfil-user">
                    <h1 class="text-1">Está quase lá!</h1>
                    <!--dropDown-->
                    <div class="custom-select" style="width:250px;">
                        <select name="tipoPerfil">
                            <option value="0">Selecione seu tipo de perfil:</option>
                            <option value="1">Mãe convencional</option>
                            <option value="2">Gestante</option>
                            <option value="3">Tentante</option>
                            <option value="4">Mãe solo</option>
                            <option value="5">Nenhuma das anteriores</option>
                        </select>
                    </div>
                    <button class="button-ok" type="submit" name="tipoDePerfil">Próximo</button>
                </div>
            </form>

        </section>
    </main>
    <script src="../../../js/siteSerMae/home/bemVinda.js"></script>
    <script src="../../../js/siteSerMae/select.js"></script>
</body>

</html>