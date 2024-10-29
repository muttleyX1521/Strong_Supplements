<?php


class CategoriaDTO {
    //put your code here
    private $idcategoria;
    private $nome;
    private $descricao;
    private $dt_alteracao;
    
    public function getIdcategoria() {
        return $this->idcategoria;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getDt_alteracao() {
        return $this->dt_alteracao;
    }

    public function setIdcategoria($idcategoria): void {
        $this->idcategoria = $idcategoria;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    public function setDt_alteracao($dt_alteracao): void {
        $this->dt_alteracao = $dt_alteracao;
    }


}
