<?php

include('../../components/ADMIN/navbar.php');

include('../../components/ADMIN/navbar/navSuperior.php');

include_once "../../Dao/validador_acesso.php";


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../../css/ADMIN/cadastrar-adm.css">

    <link rel="stylesheet" href="../../components/ADMIN/navbar/navSuperior.css">
    <!-- CSS Navbar -->
    <link rel="stylesheet" href="../../components/ADMIN/style.css">
    <!-- Imports -->
    <!-- BoxIcons CDN links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="home-section">
        <div class="conteudo-adm">
            <!--<div class="infoAdms">
            <div class="admsCadastrados">
                    <p>Administradores Cadastrados</p>
                    <div class="numCadastrados">
                        <i class='bx bxs-user'></i>
                        <span>0</span>
                    </div>
                </div>  Fim AdmsCadastrados 

                <div class="admsCadastrados">
                    <p>Administradores Suspensos</p>
                    <div class="numCadastrados">
                        <i class='bx bxs-user'></i>
                        <span>0</span>
</div>
                </div>  Fim AdmsCadastrados 
            </div><Fim InfoAdms -->

            
            <div class="cadastrarAdm">
                <div class="formImage">
                    <img src="../../img/ADMIN/cadastrarAdmFoto.svg" alt="">
                </div><!-- Fim FormImage -->
                <div class="form"> 
                    <form action="#">
                        <div class="formHeader">
                            <h2>Cadastrar Administrador</h2>
                        </div><!-- Fim FormHeader -->
                        <div class="inputGroups">
                            <div class="inputBox">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" required>
                            </div><!-- Fim InputBox -->

                            <div class="inputBox">
                                <label for="email">Email</label>
                                <input type="email" id="email" required>
                            </div><!-- Fim InputBox -->

                            <div class="inputBox">
                                <label for="telefone">Telefone</label>
                                <input type="tel" id="telefone" required>
                            </div><!-- Fim InputBox -->

                            <div class="inputBox">
                                <label for="cpf">CPF</label>
                                <input type="text" id="cpf" required>
                            </div><!-- Fim InputBox -->

                            <div class="inputBox">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" required>
                            </div><!-- Fim InputBox -->

                            <div class="inputBox">
                                <label for="confirmSenha">Confirmar Senha</label>
                                <input type="password" id="confirmSenha" required>
                            </div><!-- Fim InputBox -->
                        </div><!-- Fim InputBox -->
                        <div class="btnCadastro">
                            <button type="submit">Cadastrar     </button>
                        </div>
                    </form>
                </div><!-- Fim Form -->
            </div><!-- Fim CadastrarAdm -->
            <!--<div class="tabelaAdm">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Situação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Joao</td>
                                <td>Joao@gmail.com</td>
                                <td>Ativo</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div> Fim Tabela Adm -->
        </div><!-- Fim Conteudo Adm-->
    </section>

    <script src="../../js/ADMIN/menu-lateral.js"></script>
</body>
</html>