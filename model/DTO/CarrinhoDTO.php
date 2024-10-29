<?php


class CarrinhoDTO {
    //put your code here
    private $quantidade;
    private $idproduto;
    private $idvenda;
    
    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getIdproduto() {
        return $this->idproduto;
    }

    public function getIdvenda() {
        return $this->idvenda;
    }

    public function setQuantidade($quantidade): void {
        $this->quantidade = $quantidade;
    }

    public function setIdproduto($idproduto): void {
        $this->idproduto = $idproduto;
    }

    public function setIdvenda($idvenda): void {
        $this->idvenda = $idvenda;
    }


}
