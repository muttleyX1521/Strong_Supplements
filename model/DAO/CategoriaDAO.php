<?php

require_once 'Conexao/Conexao.php';

class CategoriaDAO {
    //put your code here
    public function Apagar(CategoriaDTO $CategoriaDTO) {
        $pdo = Conexao::getInstance();
        $sql = "delete from categoria where idcategoria = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $CategoriaDTO->getIdcategoria());
        return $execucao->execute();
    }
    
    public function Gravar(CategoriaDTO $CategoriaDTO) {
        $pdo = Conexao::getInstance();
        $sql = "insert into categoria (nome,descricao,dt_alteracao) values (?,?,?);";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $CategoriaDTO->getNome());
        $execucao->bindValue(2, $CategoriaDTO->getDescricao());
        $execucao->bindValue(3, $CategoriaDTO->getDt_alteracao());
        return $execucao->execute();
    }
    
    public function Alterar(CategoriaDTO $CategoriaDTO) {
        $pdo = Conexao::getInstance();
        $sql = "update categoria set nome=?, descricao=?, dt_alteracao=? where idcategoria = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $CategoriaDTO->getNome());
        $execucao->bindValue(2, $CategoriaDTO->getDescricao());
        $execucao->bindValue(3, $CategoriaDTO->getDt_alteracao());
        $execucao->bindValue(4, $CategoriaDTO->getIdcategoria());
        return $execucao->execute();
    }
    
    public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from categoria;";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $pesquisa = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
    
    public function PesquisarUmRegistro(CategoriaDTO $CategoriaDTO) {
        $pdo = Conexao::getInstance();
        $sql = "select * from categoria where idcategoria=?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1,$CategoriaDTO->getIdcategoria());
        $execucao->execute();
        $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
}
