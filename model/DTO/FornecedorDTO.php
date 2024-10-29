<?php


class FornecedorDTO {
    //put your code here
    private $idfornecedor;
    private $razao_social;
    private $nome_fantasia;
    private $nome_contato;
    private $email;
    private $telefone;
    private $cnpj;
    private $dt_cadastro;
    private $idusuario;
    
    public function getIdfornecedor() {
        return $this->idfornecedor;
    }

    public function getRazao_social() {
        return $this->razao_social;
    }

    public function getNome_fantasia() {
        return $this->nome_fantasia;
    }

    public function getNome_contato() {
        return $this->nome_contato;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function getDt_cadastro() {
        return $this->dt_cadastro;
    }

    public function getIdusuario() {
        return $this->idusuario;
    }

    public function setIdfornecedor($idfornecedor): void {
        $this->idfornecedor = $idfornecedor;
    }

    public function setRazao_social($razao_social): void {
        $this->razao_social = $razao_social;
    }

    public function setNome_fantasia($nome_fantasia): void {
        $this->nome_fantasia = $nome_fantasia;
    }

    public function setNome_contato($nome_contato): void {
        $this->nome_contato = $nome_contato;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setTelefone($telefone): void {
        $this->telefone = $telefone;
    }

    public function setCnpj($cnpj): void {
        $this->cnpj = $cnpj;
    }

    public function setDt_cadastro($dt_cadastro): void {
        $this->dt_cadastro = $dt_cadastro;
    }

    public function setIdusuario($idusuario): void {
        $this->idusuario = $idusuario;
    }


}
