<?php


class NfcDTO {
    //put your code here
    private $idnfc;
    private $dt_emissao;
    private $dt_saida;
    private $hr_saida;
    private $nome_produto;
    private $modelo_produto;
    private $categoria_produto;
    private $valor_produto;
    private $quantidade_produto;
    private $valor_total;
    private $idvenda;
    
    public function getIdnfc() {
        return $this->idnfc;
    }

    public function getDt_emissao() {
        return $this->dt_emissao;
    }

    public function getDt_saida() {
        return $this->dt_saida;
    }

    public function getHr_saida() {
        return $this->hr_saida;
    }

    public function getNome_produto() {
        return $this->nome_produto;
    }

    public function getModelo_produto() {
        return $this->modelo_produto;
    }

    public function getCategoria_produto() {
        return $this->categoria_produto;
    }

    public function getValor_produto() {
        return $this->valor_produto;
    }

    public function getQuantidade_produto() {
        return $this->quantidade_produto;
    }

    public function getValor_total() {
        return $this->valor_total;
    }

    public function getIdvenda() {
        return $this->idvenda;
    }

    public function setIdnfc($idnfc): void {
        $this->idnfc = $idnfc;
    }

    public function setDt_emissao($dt_emissao): void {
        $this->dt_emissao = $dt_emissao;
    }

    public function setDt_saida($dt_saida): void {
        $this->dt_saida = $dt_saida;
    }

    public function setHr_saida($hr_saida): void {
        $this->hr_saida = $hr_saida;
    }

    public function setNome_produto($nome_produto): void {
        $this->nome_produto = $nome_produto;
    }

    public function setModelo_produto($modelo_produto): void {
        $this->modelo_produto = $modelo_produto;
    }

    public function setCategoria_produto($categoria_produto): void {
        $this->categoria_produto = $categoria_produto;
    }

    public function setValor_produto($valor_produto): void {
        $this->valor_produto = $valor_produto;
    }

    public function setQuantidade_produto($quantidade_produto): void {
        $this->quantidade_produto = $quantidade_produto;
    }

    public function setValor_total($valor_total): void {
        $this->valor_total = $valor_total;
    }

    public function setIdvenda($idvenda): void {
        $this->idvenda = $idvenda;
    }


}
