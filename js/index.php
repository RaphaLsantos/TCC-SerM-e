<?php
include_once "Dao/conexãoDAO.php";
include_once "Model/usuario.php";
include_once "Dao/usuarioDAO.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/logincadastro/index.css">
    <link rel="stylesheet" href="css/ADMIN/style.css">
    <link rel="stylesheet" href="css/ADMIN/Análise.css">


    <title>serMãe</title>
    <style>
        .text-danger {
            color: red;
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="Controller/usuarioController.php" method="post" class="sign-in-form">
                    <h2 class="title">Logar</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" name="loginEmail" id="" placeholder="Email">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="*****" name="loginSenha">
                    </div>

                    <div>
                    </div>
                    <?php
                    if (isset($_GET['login']) && $_GET['login'] == "erro") {
                    ?>
                        <div style="text-align: center; font-weight:bold">
                            <p class="text-danger">Usuário ou senha inválido(s)</p>
                        </div>
                    <?php
                    }
                    ?>

                    <input type="submit" class="btn solid" name="login">
                    <p class="social-text">Esqueci a senha</p>
                </form>
            </div>


            <div class="signup-signup">
                <form action="Controller/usuarioController.php" method="post" class="sign-up-form" id="myForm">
                    <h1 class="text-registro">Cadastro</h1>
                    <span id="msg"></span>
                    <!--progress bar-->
                    <div class="progressbar">
                        <div class="progress" id="progress"></div>
                        <div class="progress-step progress-step-active" data-title="Nome"></div>
                        <div class="progress-step" data-title="Contato"></div>
                        <div class="progress-step" data-title="Idade"></div>
                        <div class="progress-step" data-title="Senha"></div>
                    </div>
                    <!--steps-->
                    <div class="form-step form-step-active">
                        <div class="input-group">
                            <input type="text" class="input-nome input-form-validate"  name="nome" id="input-nome" placeholder="Nome" autocomplete="on">
                        </div>
                        <div class="input-group">
                            <input type="text" class="input-sobrenome input-form-validate" name="sobrenome" id="input-sobrenome" placeholder="Sobrenome">
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-next width-50 ml-auto" id="open-modal">Próximo</a>
                        </div>

                    </div>
                    <div class="form-step">
                        <div class="input-group">
                            <input type="tel" class="input-telefone input-form-validate" name="phone" id="input-telefone" placeholder="Telefone" autocomplete="on">
                        </div>
                        <div class="input-group">
                            <input type="email" class="input-email input-form-validate" name="email" id="input-email" placeholder="E-mail" autocomplete="on">
                        </div>
                        <div class="btns-group">
                            <a href="#" class="btn btn-prev">Anterior</a>
                            <a href="#" class="btn btn-next">Próximo</a>
                        </div>
                    </div>

                    <div class="form-step">
                        <div class="input-group">
                            <input type="date" class="input-data input-form-validate" name="dataNasc" id="input-data" placeholder="Data nascimento">
                        </div>
                        <div class="btns-group">
                            <a href="#" class="btn btn-prev">Anterior</a>
                            <a href="#" class="btn btn-next">Próximo</a>
                        </div>
                    </div>

                    <div class="form-step">
                        <div class="input-group">
                            <input type="password" class="input-senha input-form-validate" name="password" id="input-senha" placeholder="Senha">
                        </div>
                        <div class="input-group">
                            <input type="password" class="input-confirma input-form-validate" name="confirmPassword" id="input-confirma" placeholder="Confirmar senha">
                        </div>
                        <div class="btns-group">
                            <a href="#" class="btn btn-prev">Anterior</a>
                            <button type="submit" class="btn" name="registrar">Pronta</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Nova aqui?</h3>
                    <p>
                        Crie sua conta agora!
                    </p>
                    <button class="btn transparent" id="sign-up-button">Criar conta</button>
                </div>
                <img src="img/loginCadastro/serMãe.png" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Venha fazer parte<br>desse mundo</h3>
                    <p>A melhor rede social de apoio<br>para mulheres
                    </p>
                    <button class="btn transparent" id="sign-in-button">Logar</button>
                </div>
                <img src="img/loginCadastro/serMãe.png" class="image" alt="">
            </div>
        </div>
    </div>

    <?php if (isset($_GET['acesso']) && $_GET['acesso'] == "erro" || isset($_GET['cadastro']) && $_GET['cadastro'] == "erro" || isset($_GET['login']) && $_GET['login'] == "suspenso") { ?>
        <?php if(($_GET['acesso'])) { ?>
        <div class="modal-containerBanir">
            <div class="modal">
                <h2>Erro de acesso</h2>
                <?php if($_GET['acesso'] == "erro") {
                    echo "<p>Você precisa logar para acessar essa página!</p>";
                 } ?>
                <hr />
                <div class="btns">
                    <button class="btnOK" onclick="closeModal(0)">OK</button>
                </div>
            </div>
        </div>
        <?php }else if (($_GET['cadastro']))  { ?>
        <div class="modal-containerBanir">
            <div class="modal">
                <h2>Erro de cadastro</h2>
                <p>Informações já cadastradas para outro usuário!</p>
                <hr />
                <div class="btns">
                    <button class="btnOK" onclick="closeModal(0)">OK</button>
                </div>
            </div>
        </div>
        <?php }else if (($_GET['login'])) { ?>
            <div class="modal-containerBanir">
            <div class="modal">
                <h2>Erro de acesso</h2>
                <?php if($_GET['login'] == "suspenso") {
                    echo "<p>Você está suspenso do site!</p>";
                 } ?>
                <hr />
                <div class="btns">
                    <button class="btnOK" onclick="closeModal(0)">OK</button>
                </div>
            </div>
        </div>
        <?php } ?>

        <script>
            const modalErro = document.querySelector('.modal-containerBanir')
            const opcaoModal = [modalErro]

            function openModal(a) {
                opcaoModal[a].classList.add('active')
            }

            function closeModal(b) {
                opcaoModal[b].classList.remove('active');
                window.location.href = "index.php"
            }

            openModal(0);
        </script>
    <?php } ?>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <script>
        $('#phone_with_ddd').mask('(00) 00000-0000');
    </script>


    <script src="js/loginCadastro/app.js"></script>
    <script src="js/loginCadastro/validacao.js"></script>
</body>

</html>