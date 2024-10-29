<?php


class ClienteDTO {
    //put your code here
    private $idcliente;
    private $nome;
    private $telefone;
    private $cpf;
    private $email;
    private $dt_nasc;
    private $usuario;
    private $genero;
    private $endereco;
    private $senha;
    private $dt_alteracao;
    
    public function getIdcliente() {
        return $this->idcliente;
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

    public function getDt_nasc() {
        return $this->dt_nasc;
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

    public function setIdcliente($idcliente): void {
        $this->idcliente = $idcliente;
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

    public function setDt_nasc($dt_nasc): void {
        $this->dt_nasc = $dt_nasc;
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


}
