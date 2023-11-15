<?php

class publicacaoDAO
{

    public function createPublicacao(Publicacao $publicacao)
    {
        try {
            $sql = "INSERT INTO tbpublicacao (idPublicacao, legendaPublicacao ,imgPublicacao, dataPublicacao, idUsuario ) VALUES (:idPublicacao, :legenda,:img,:dataPublicacao, :idUsuario ); ";

            $query = conexao::getConexao()->prepare($sql);
            $query->bindValue(':idPublicacao', $publicacao->getIdPublicacao());
            $query->bindValue(':legenda', $publicacao->getLegendaPublicacao());
            $query->bindValue(':img', $publicacao->getImgPublicacao());
            $query->bindValue(':dataPublicacao', $publicacao->getDataPublicacao());
            $query->bindValue(':idUsuario', $publicacao->getIdUser());

            $query->execute();
        } catch (PDOException $e) {
            echo "Erro na inserção: " . $e->getMessage();
        }
    }

    public function readPublicacao()
    {
        try {
            $sql = "SELECT * FROM tbpublicacao";
            $query = conexao::getConexao()->query($sql);
            $lista = $query->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $I) {
                $f_lista[] = $this->listaPublicacao($I);
            }

            return $f_lista;
        } catch (PDOException $e) {
            echo "Erro na busca: " . $e->getMessage();
        }
    }


    function excluirPublicacao($id) {
        try {
            $sql = "DELETE FROM tbpublicacao WHERE idPublicacao = :idPublicacao";
            $query = conexao::getConexao()->prepare($sql);
            $query->bindValue(':idPublicacao', $id, PDO::PARAM_INT);
    
            // Executar a declaração
            if ($query->execute()) {
                return true; 
            } else {
                return false; 
            }        
        } catch (PDOException $e) {
            echo "Erro na exclusão: " . $e->getMessage();
        }
    }
    


    public function readPublicacaoByUsuario($idUsuario) {
        $publicacoes = array(); 
    
        $sql = "SELECT * FROM tbpublicacao WHERE idUsuario = :idUsuario";
        try {
            $query = conexao::getConexao()->prepare($sql);
            $query->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
            $query->execute();
            
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $publicacao = $this->listaPublicacao($row);
                $publicacoes[] = $publicacao;
            }
        } catch (PDOException $e) {
            echo "Erro na busca: " . $e->getMessage();
        }
        
        return $publicacoes;
    }
    


    public function listaPublicacao($row)
{
    $publicacao = new Publicacao();
    $publicacao->setIdPublicacao($row['idPublicacao']);
    $publicacao->setLegendaPublicacao($row['legendaPublicacao']);
    $publicacao->setImgPublicacao($row['imgPublicacao']); 
    $publicacao->setDataPublicacao($row['dataPublicacao']);
    $publicacao->setIdUser($row['idUsuario']);
    return $publicacao;
}

public function readTodasPublicacoes()
{
    $publicacoes = array();

    $sql = "SELECT p.legendaPublicacao, p.imgPublicacao, p.dataPublicacao, u.nomeUsuario AS nomeUsuario, u.fotoUsuario AS fotoPerfil, u.idUsuario AS idUsuario
        FROM tbpublicacao AS p
        INNER JOIN tbusuario AS u ON p.idUsuario = u.idUsuario";

    try {
        $query = conexao::getConexao()->prepare($sql);
        $query->execute();

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $publicacao = new Publicacao();
            $publicacao->setLegendaPublicacao($row['legendaPublicacao']);
            $publicacao->setImgPublicacao($row['imgPublicacao']);
            $publicacao->setDataPublicacao($row['dataPublicacao']);
            $usuario = new Usuario();
            $usuario->setIdUsuario(isset($row['idUsuario']) ? $row['idUsuario'] : null);
            $usuario->setNomeUsuario(isset($row['nomeUsuario']) ? $row['nomeUsuario'] : null);
            $usuario->setFotoDePerfil(isset($row['fotoPerfil']) ? $row['fotoPerfil'] : null); // Defina a foto de perfil aqui
            $publicacao->setUsuario($usuario);
            $publicacoes[] = $publicacao;
        }
    } catch (PDOException $e) {
        echo "Erro na busca: " . $e->getMessage();
    }

    return $publicacoes;
}



}
