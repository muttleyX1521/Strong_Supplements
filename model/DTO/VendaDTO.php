<?php


class VendaDTO {
    //put your code here
    private $idvenda;
    private $dt_venda;
    private $valor_total;
    private $forma_pg;
    private $email;
    private $status;
    private $observacoes;
    private $dt_cadastro;
    private $idcliente;
    
    public function getIdvenda() {
        return $this->idvenda;
    }

    public function getDt_venda() {
        return $this->dt_venda;
    }

    public function getValor_total() {
        return $this->valor_total;
    }

    public function getForma_pg() {
        return $this->forma_pg;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getObservacoes() {
        return $this->observacoes;
    }

    public function getDt_cadastro() {
        return $this->dt_cadastro;
    }

    public function getIdcliente() {
        return $this->idcliente;
    }

    public function setIdvenda($idvenda): void {
        $this->idvenda = $idvenda;
    }

    public function setDt_venda($dt_venda): void {
        $this->dt_venda = $dt_venda;
    }

    public function setValor_total($valor_total): void {
        $this->valor_total = $valor_total;
    }

    public function setForma_pg($forma_pg): void {
        $this->forma_pg = $forma_pg;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }

    public function setObservacoes($observacoes): void {
        $this->observacoes = $observacoes;
    }

    public function setDt_cadastro($dt_cadastro): void {
        $this->dt_cadastro = $dt_cadastro;
    }

    public function setIdcliente($idcliente): void {
        $this->idcliente = $idcliente;
    }


}
