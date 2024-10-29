<?php


class UsuarioDTO {
    //put your code here
    private $idusuario;
    private $nome;
    private $telefone;
    private $cpf;
    private $email;
    private $usuario;
    private $genero;
    private $endereco;
    private $senha;
    private $dt_alteracao;
    private $idperfil;
    
    public function getIdusuario() {
        return $this->idusuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getDt_alteracao() {
        return $this->dt_alteracao;
    }

    public function getIdperfil() {
        return $this->idperfil;
    }

    public function setIdusuario($idusuario): void {
        $this->idusuario = $idusuario;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setTelefone($telefone): void {
        $this->telefone = $telefone;
    }

    public function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    public function setGenero($genero): void {
        $this->genero = $genero;
    }

    public function setEndereco($endereco): void {
        $this->endereco = $endereco;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function setDt_alteracao($dt_alteracao): void {
        $this->dt_alteracao = $dt_alteracao;
    }

    public function setIdperfil($idperfil): void {
        $this->idperfil = $idperfil;
    }


    
}
