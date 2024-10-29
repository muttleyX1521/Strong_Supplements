<?php


class Fornecedor_has_produtoDTO {
    //put your code here
    private $idfornecedor;
    private $idproduto;
    
    public function getIdfornecedor() {
        return $this->idfornecedor;
    }

    public function getIdproduto() {
        return $this->idproduto;
    }

    public function setIdfornecedor($idfornecedor): void {
        $this->idfornecedor = $idfornecedor;
    }

    public function setIdproduto($idproduto): void {
        $this->idproduto = $idproduto;
    }


}
