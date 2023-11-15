<?php 



class Usuario{
    protected $idUsuario;
    protected $nomeUsuario;
    protected $emailUsuario;
    protected $senhaUsuario;
    protected $telefoneUsuario;
    protected $dataNascimentoUsuario;
    protected $apelidoUsuario;
    protected $fotoDePerfil;
    protected $tipoDePerfil;
    protected $nivelConta;

    protected $statusConta;

    public function getTipoDePerfil(){
        return $this->tipoDePerfil;
    }

    public function setTipoDePerfil($tipoDePerfil){
        $this->tipoDePerfil = $tipoDePerfil;
    }

    public function getFotoDePerfil(){
        return $this->fotoDePerfil;
    }

    public function setfotoDePerfil($fotoDePerfil){
        $this->fotoDePerfil = $fotoDePerfil;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function getNomeUsuario(){
        return $this->nomeUsuario;
    }
    
    public function setNomeUsuario($nomeUsuario){
        $this->nomeUsuario = $nomeUsuario;
    }

    public function getEmailUsuario(){
        return $this->emailUsuario;
    }

    public function setEmailUsuario($emailUsuario){
        $this->emailUsuario = $emailUsuario;
    }

    public function getSenhaUsuario(){
        return $this->senhaUsuario;
    }

    public function setSenhaUsuario($senhaUsuario){
        $this->senhaUsuario = $senhaUsuario;
    }

    public function getTelefoneUsuario(){
        return $this->telefoneUsuario;
    }

    public function setTelefoneUsuario($telefoneUsuario){
        $this->telefoneUsuario = $telefoneUsuario;
    }

    
    public function getDataNascimentoUsuario(){
        return $this->dataNascimentoUsuario;
    }

    public function setDataNascimentoUsuario($dataNascimentoUsuario){
        $this->dataNascimentoUsuario = $dataNascimentoUsuario;
    }

    public function getApelidoUsuario(){
        return $this->apelidoUsuario;
    }

    public function setApelidoUsuario($apelidoUsuario){
        $this->apelidoUsuario = $apelidoUsuario;
    }

    public function getStatusConta() {
        return $this->statusConta;
    }

    public function setStatusConta($statusConta) {
        $this->statusConta = $statusConta;
    }

    

}
?>