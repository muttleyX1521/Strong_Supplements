<?php


class ProdutoDTO {
    //put your code here
    private $idproduto;
    private $nome;
    private $descricao;
    private $quantidade;
    private $valor;
    private $dt_alteracao;
    private $idusuario;
    private $idcategoria;
    
    public function getIdproduto() {
        return $this->idproduto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getDt_alteracao() {
        return $this->dt_alteracao;
    }

    public function getIdusuario() {
        return $this->idusuario;
    }

    public function getIdcategoria() {
        return $this->idcategoria;
    }

    public function setIdproduto($idproduto): void {
        $this->idproduto = $idproduto;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    public function setQuantidade($quantidade): void {
        $this->quantidade = $quantidade;
    }

    public function setValor($valor): void {
        $this->valor = $valor;
    }

    public function setDt_alteracao($dt_alteracao): void {
        $this->dt_alteracao = $dt_alteracao;
    }

    public function setIdusuario($idusuario): void {
        $this->idusuario = $idusuario;
    }

    public function setIdcategoria($idcategoria): void {
        $this->idcategoria = $idcategoria;
    }


}
