<?php

require_once 'Conexao/Conexao.php';

class ProdutoDAO {
    //put your code here
    public function Apagar(ProdutoDTO $ProdutoDTO) {
        $pdo = Conexao::getInstance();
        $sql = "delete from produto where idproduto = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $ProdutoDTO->getIdproduto());
        return $execucao->execute();
    }
    
    public function Gravar(ProdutoDTO $ProdutoDTO) {
        $pdo = Conexao::getInstance();
        $sql = "insert into produto (nome,descricao,quantidade,valor,dt_alteracao,idusuario,idcategoria) values (?,?,?,?,?,?,?);";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $ProdutoDTO->getNome());
        $execucao->bindValue(2, $ProdutoDTO->getDescricao());
        $execucao->bindValue(3, $ProdutoDTO->getQuantidade());
        $execucao->bindValue(4, $ProdutoDTO->getValor());
        $execucao->bindValue(5, $ProdutoDTO->getDt_alteracao());
        $execucao->bindValue(6, $ProdutoDTO->getIdusuario());
        $execucao->bindValue(7, $ProdutoDTO->getIdcategoria());
        return $execucao->execute();
    }
    
    public function Alterar(ProdutoDTO $ProdutoDTO) {
        $pdo = Conexao::getInstance();
        $sql = "update produto set nome=?, descricao=?, quantidade=?, valor=?, dt_alteracao=?, idusuario=?, idcategoria=? where idproduto = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $ProdutoDTO->getNome());
        $execucao->bindValue(2, $ProdutoDTO->getDescricao());
        $execucao->bindValue(3, $ProdutoDTO->getQuantidade());
        $execucao->bindValue(4, $ProdutoDTO->getValor());
        $execucao->bindValue(5, $ProdutoDTO->getDt_alteracao());
        $execucao->bindValue(6, $ProdutoDTO->getIdusuario());
        $execucao->bindValue(7, $ProdutoDTO->getIdcategoria());
        $execucao->bindValue(8, $ProdutoDTO->getIdproduto());
        return $execucao->execute();
    }
    
    public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from produto;";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $pesquisa = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
    
    public function PesquisarUmRegistro(ProdutoDTO $ProdutoDTO) {
        $pdo = Conexao::getInstance();
        $sql = "select * from produto where idproduto=?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1,$ProdutoDTO->getIdproduto());
        $execucao->execute();
        $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
}
