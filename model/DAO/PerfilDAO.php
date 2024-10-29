<?php

require_once 'Conexao/Conexao.php';

class PerfilDAO {
    //put your code here
    public function Apagar(PerfilDTO $PerfilDTO){
       $pdo = Conexao::getInstance();
       $sql = "delete from perfil where idperfil = ?;";
       $execucao = $pdo->prepare($sql);
       $execucao->bindValue(1, $PerfilDTO->getIdperfil());
       return $execucao->execute();
    }
    
    public function Gravar(PerfilDTO $PerfilDTO) {
        $pdo = Conexao::getInstance();
        $sql = "insert into perfil (descricao) values (?);";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $PerfilDTO->getDescricao());
        return $execucao->execute();
    }
    
    public function Alterar(PerfilDTO $PerfilDTO) {
        $pdo = Conexao::getInstance();
        $sql = "update perfil set descricao=? where idperfil = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $PerfilDTO->getDescricao());
        $execucao->bindValue(2, $PerfilDTO->getIdperfil());
        return $execucao->execute();
    }
    
    public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from perfil;";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $pesquisa = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
    
    public function PesquisarUmRegistro(PerfilDTO $PerfilDTO) {
        $pdo = Conexao::getInstance();
        $sql = "select * from perfil where idperfil=?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1,$PerfilDTO->getIdperfil());
        $execucao->execute();
        $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
}
