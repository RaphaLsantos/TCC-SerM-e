<?php 


class Publicacao {
    protected $idPublicacao;
    protected $legendaPublicacao;
    protected $imgPublicacao;
    protected $dataPublicacao;
    protected $numCurtidasPublicacao;
    protected $numCompartPublicacao;
    protected $idUser;

    public function getIdPublicacao() {
        return $this->idPublicacao;
    }

    public function setIdPublicacao($idPublicacao) {
        $this->idPublicacao = $idPublicacao;
    }

    public function getLegendaPublicacao() {
        return $this->legendaPublicacao;
    }

    public function setLegendaPublicacao($legendaPublicacao) {
        $this->legendaPublicacao = $legendaPublicacao;
    }

    public function getImgPublicacao() {
        return $this->imgPublicacao;
    }

    public function setImgPublicacao($imgPublicacao) {
        $this->imgPublicacao = $imgPublicacao;
    }

    public function getDataPublicacao() {
        return $this->dataPublicacao;
    }

    public function getIdUser(){
        return $this->idUser;
    }

    public function setIdUser($idUser){
        $this->idUser = $idUser;
    }

    public function setDataPublicacao($dataPublicacao) {
        $this->dataPublicacao = $dataPublicacao;
    }

    public function getNumCurtidasPublicacao() {
        return $this->numCurtidasPublicacao;
    }

    public function setNumCurtidasPublicacao($numCurtidasPublicacao) {
        $this->numCurtidasPublicacao = $numCurtidasPublicacao;
    }

    public function getNumCompartPublicacao() {
        return $this->numCompartPublicacao;
    }

    public function setNumCompartPublicacao($numCompartPublicacao) {
        $this->numCompartPublicacao = $numCompartPublicacao;
    }
}


?>