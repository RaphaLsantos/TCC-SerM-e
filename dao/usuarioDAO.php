<?php
class usuarioDAO
{
    public function createUsuario(Usuario $usuario)
    {
        try {
            $sql = "INSERT INTO tbusuario (nomeUsuario, apelidoUsuario, telefoneUsuario, emailUsuario, nascUsuario, senhaUsuario) VALUES (:nome, :apelido, :phone, :email, :dataNasc, :senha); ";

            $query = conexao::getConexao()->prepare($sql);
            $query->bindValue(':nome', $usuario->getNomeUsuario());
            $query->bindValue(':apelido', $usuario->getApelidoUsuario());
            $query->bindValue(':phone', $usuario->getTelefoneUsuario());
            $query->bindValue(':email', $usuario->getEmailUsuario());
            $query->bindValue(':dataNasc', $usuario->getDataNascimentoUsuario());
            $query->bindValue(':senha', $usuario->getSenhaUsuario());

            $query->execute();
        } catch (PDOException $e) {
            echo "Erro na inserção: " . $e->getMessage();
        }
    }

    public function readUsuario()
    {
        try {
            $sql = "SELECT * FROM tbusuario";
            $query = conexao::getConexao()->query($sql);
            $lista = $query->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $I) {
                $f_lista[] = $this->listaUsuarios($I);
            }

            return $f_lista;
        } catch (PDOException $e) {
            echo "Erro na busca: " . $e->getMessage();
        }
    }

    public function updateUsuario(Usuario $usuario)
    {
        try {
            $nome = $usuario->getNomeUsuario();
            $id = $usuario->getIdUsuario();
            $email = $usuario->getEmailUsuario();
            $apelido = $usuario->getApelidoUsuario();
            $telefone = $usuario->getTelefoneUsuario();
            $nomeUsuario = $usuario->getNomeUsuario();
    
            $sql = "UPDATE tbusuario SET nomeUsuario = :nome, emailUsuario = :email, apelidoUsuario = :apelido, telefoneUsuario = :telefone WHERE idUsuario = :id";
    
            $updateSql = conexao::getConexao()->prepare($sql);
            $updateSql->bindValue(':nome', $nome);
            $updateSql->bindValue(':email', $email);
            $updateSql->bindValue(':apelido', $apelido);
            $updateSql->bindValue(':telefone', $telefone);
            $updateSql->bindValue(':id', $id);
    

            return $updateSql->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    
    
    public function listaCadastros($tipo)
    {
        if($tipo == "cadastrados"){
            try {
                $querySelect = "SELECT * FROM tbUsuario";
                $resultado = conexao::getConexao()->query($querySelect);
                $cadastros = $resultado->fetchAll();
                $qntd = count($cadastros);
                return $qntd;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }else if($tipo == "ativos"){
            try {
                $querySelect = "SELECT * FROM tbUsuario WHERE statusConta = 1";
                $resultado = conexao::getConexao()->query($querySelect);
                $cadastros = $resultado->fetchAll();
                $qntd = count($cadastros);
                if(empty($qntd)){
                    return 0;
                }else{
                    return $qntd;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }else if($tipo == "suspenso"){
            try {
                $querySelect = "SELECT * FROM tbUsuario WHERE statusConta = 2";
                $resultado = conexao::getConexao()->query($querySelect);
                $cadastros = $resultado->fetchAll();
                $qntd = count($cadastros);
                if(empty($qntd)){
                    return 0;
                }else{
                    return $qntd;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
     
    }

    public function informacoesAdicionais(Usuario $usuario)
    {
        try {

            $id = $_SESSION['ID_conta'];
            $foto = $usuario->getFotoDePerfil();


            $sql = "UPDATE tbusuario set fotoUsuario = :foto WHERE idUsuario = :id";
            $stmt = conexao::getConexao()->prepare($sql);
            $stmt->bindParam(':foto', $foto);
            $stmt->bindParam(':id', $id);



            if ($stmt->execute()) {
                echo "FOTO ATUALIZADA COM SUCESSO!";
            } else {
                echo "Erro ao salvar foto de perfil.";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function tipoDaConta(Usuario $usuario) 
    {
        try{ 
            
            $id = $_SESSION['ID_conta'];
            $tipoPerfil = $usuario->getTipoDePerfil();


            $sql = "UPDATE tbusuario set tipoConta = :perfil WHERE idUsuario = :id";
            $stmt = conexao::getConexao()->prepare($sql);
            $stmt->bindParam(':perfil', $tipoPerfil);
            $stmt->bindParam(':id', $id);



            if ($stmt->execute()) {
                echo "Tipo ATUALIZADO COM SUCESSO!";
            } else {
                echo "Erro ao alterar tipo de perfil.";
            }
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function read()
    {
        try {
            $sql = "SELECT * FROM tbusuario
            INNER JOIN tbTipoPerfil ON tbusuario.tipoConta = tbTipoPerfil.idTipo
            ";
            $query = conexao::getConexao()->query($sql);
            $lista = $query->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $I) {
                $f_lista[] = $this->listaUsuarios($I);
            }

            return $f_lista;
        } catch (PDOException $e) {
            echo "Erro na busca: " . $e->getMessage();
        }
    }


    public function listaUsuarios($row)
    {
        $usuario = new Usuario();
        $usuario->setIdUsuario($row['idUsuario']);
        $usuario->setNomeUsuario($row['nomeUsuario']);
        $usuario->setEmailUsuario($row['emailUsuario']);
        $usuario->setTelefoneUsuario($row['telefoneUsuario']);
        $usuario->setDataNascimentoUsuario($row['nascUsuario']);
        $usuario->setSenhaUsuario($row['senhaUsuario']);
        $usuario->setTipoDePerfil($row['tipoConta']);
        $usuario->setStatusConta($row['statusConta']);
        $usuario->setFotoDePerfil($row['fotoUsuario']);

        return $usuario;
    }

    public function buscarUsuarioPorId($id)
    {
        try {
            $sql = "SELECT * FROM tbusuario WHERE idUsuario = :id";
            $query = conexao::getConexao()->prepare($sql);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();

            if ($query->rowCount() > 0) {
                // Retorna o primeiro usuário encontrado (você pode adaptar para retornar uma lista se necessário)
                $row = $query->fetch(PDO::FETCH_ASSOC);
                return $this->listaUsuarios($row);
            } else {
                return null; // Retorna null se o usuário não for encontrado
            }
        } catch (PDOException $e) {
            echo "Erro na busca: " . $e->getMessage();
            return null;
        }
    }
}
