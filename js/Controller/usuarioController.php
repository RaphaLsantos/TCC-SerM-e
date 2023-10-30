<?php

include_once "../Dao/conexãoDAO.php";
include_once "../Model/usuario.php";
include_once "../Dao/usuarioDAO.php";

$usuario = new Usuario();
$usuariodao = new usuarioDAO();

$d = filter_input_array(INPUT_POST);

if (isset($_POST['registrar'])) {

    $email = $d['email'];

    $usuario->setNomeUsuario($d['nome'] . ' ' . $d['sobrenome']);
    $usuario->setTelefoneUsuario($d['phone']);
    $usuario->setEmailUsuario($d['email']);
    $usuario->setDataNascimentoUsuario($d['dataNasc']);

    $sql = "SELECT emailUsuario FROM tbusuario WHERE emailUsuario = '$email'";
    $resultado = conexao::getConexao()->query($sql);
    $stmt = $resultado->fetch(PDO::FETCH_ASSOC);

    if ($resultado->rowCount() == 1) {
        header('Location: ../index.php?cadastro=erro');
    } else {
        if ($d['password'] == $d['confirmPassword']) {
            $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $usuario->setSenhaUsuario($hash);

            $usuariodao->create($usuario);
            $id = conexao::getConexao()->lastInsertId();

            session_start();

            $_SESSION['ID_conta'] = $id;
            $_SESSION['nomeUsuario'] = $usuario->getNomeUsuario();

            header('Location: ../Views/siteSerMae/adicionarFoto.php');
        } else {
            header('Location: /index.php?login=erro');
        }
    }
} else if (isset($_POST['login'])) {
    session_start();

    $email = filter_input(INPUT_POST, 'loginEmail', FILTER_SANITIZE_EMAIL);
    $senha = trim(($_POST['loginSenha']));


    try {
        $sql = "SELECT * FROM tbusuario WHERE emailUsuario = '$email'";

        $resultado = conexao::getConexao()->query($sql);
        $logado = $resultado->fetchAll();
        $n = count($logado);


        if ($n == 1) {
            if ($logado[0]['statusConta'] == 1) {

                $id =  $logado[0]['idUsuario'];
                $hash = $logado[0]['senhaUsuario'];
                $email = $logado[0]['emailUsuario'];

                $stmt = conexao::getConexao()->prepare($sql);
                $stmt->bindParam("s", $email);

                $stmt->bindValue($id, $hash);
                $stmt->fetch();

                if (password_verify($senha, $hash)) {
                    $_SESSION['ID_conta'] = $logado[0]['idUsuario'];
                    $_SESSION['Usuarioautenticado'] = 'SIM';

                    header('Location: ../Views/siteSerMae/home.php');
                    exit();
                } else {
                    header('Location: ../index.php?login=erro');
                    exit();
                }//outros status abaixo
            } else if ($logado[0]['statusConta'] == 2) {
                header('Location: ../index.php?login=suspenso');
                exit();
            } else {
                header('Location: ../index.php?login=banido');
                exit();
            }
        } else {
            header('Location: ../index.php?login=erro');
            exit();
        }
    } catch (PDOException $e) {
        echo "ERRO: " . $e->getMessage();
    }
} else if (isset($_POST['atualizaPerfil'])) {
    session_start();

    $id = $_SESSION['ID_conta'];


    if (isset($_FILES["fotoUsuario"]) && $_FILES["fotoUsuario"]["error"] == 0) {

        $diretoriodasfotos = "../img/Perfis/";

        $nomeDaFoto = uniqid() . "" . $_FILES["fotoUsuario"]["name"];

        if (move_uploaded_file($_FILES["fotoUsuario"]["tmp_name"], $diretoriodasfotos . $nomeDaFoto)) {

            $caminho_arquivo = $diretoriodasfotos . $nomeDaFoto;

            $usuario->setfotoDePerfil($nomeDaFoto);

            $_SESSION['fotoUsuario'] = $usuario->getFotoDePerfil();

            header("Location: ../Views/siteSerMae/boasVindas.php");

            $usuariodao->informacoesAdicionais($usuario);
        }
    }
} else if (isset($_POST['tipoDePerfil'])) {
    session_start();

    $id = $_SESSION['ID_conta'];

    $usuario->setTipoDePerfil($d['tipoPerfil']);

    header("Location: ../Views/siteSerMae/home.php");

    $usuariodao->tipoDaConta($usuario);
}
