<?php

require_once "usuario.php";

class Administrador extends Usuario 
{

    private $idAdm;
    private $nomeAdm;
    private $emailAdm;
    private $senhaAdm;

    public function getIdAdm(){
        return $this->idAdm;
    }

    public function setidAdm($idAdm){
        $this->idAdm = $idAdm;
    }

    public function getnomeAdm(){
        return $this->nomeAdm;
    }

    public function setnomeAdm($nomeAdm){
        $this->nomeAdm = $nomeAdm;
    }

    public function getemailAdm(){
        return $this->emailAdm;
    }

    public function setemailAdm($emailAdm){
        $this->emailAdm = $emailAdm;
    }

    public function getsenhaAdm(){
        return $this->senhaAdm;
    }

    public function setsenhaAdm($senhaAdm){
        $this->senhaAdm = $senhaAdm;
    }


    


}
