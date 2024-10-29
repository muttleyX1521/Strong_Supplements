<?php

class PerfilDTO {
    //put your code here
    private $idperfil;
    private $descricao;
    
    public function getIdperfil() {
        return $this->idperfil;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setIdperfil($idperfil): void {
        $this->idperfil = $idperfil;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }


}
