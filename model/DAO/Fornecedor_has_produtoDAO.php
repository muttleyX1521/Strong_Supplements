<?php


class Fornecedor_has_produtoDAO {
    //put your code here
    public function Gravar(Fornecedor_has_produtoDTO $Fornecedor_has_produtoDTO) {
    $pdo = Conexao::getInstance();
        $sql = "insert into fornecedor_has_produto (idfornecedor,idproduto) values (?,?);";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $Fornecedor_has_produtoDTO->getIdfornecedor());
        $execucao->bindValue(2, $Fornecedor_has_produtoDTO->getIdproduto());
        return $execucao->execute();
    }
    
    public function Apagar(Fornecedor_has_produtoDTO $Fornecedor_has_produtoDTO) {
        $pdo = Conexao::getInstance();
        $sql = "delete from fornecedor_has_produto where idfornecedor =? and idproduto =?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $Fornecedor_has_produtoDTO->getIdfornecedor());
        $execucao->bindValue(2, $Fornecedor_has_produtoDTO->getIdproduto());
        return $execucao->execute();
    }
    
    public function Alterar(Fornecedor_has_produtoDTO $Fornecedor_has_produtoDTO) {
        $pdo = Conexao::getInstance();
        $sql = "update fornecedor_has_produto where idfornecedor =? and idproduto =?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $Fornecedor_has_produtoDTO->getIdfornecedor());
        $execucao->bindValue(2, $Fornecedor_has_produtoDTO->getIdproduto());
        return $execucao->execute();
    }
    
    public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from fornecedor_has_produto;";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $pesquisa = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
    
    public function PesquisarUmRegistro(Fornecedor_has_produtoDTO $Fornecedor_has_produtoDTO) {
        $pdo = Conexao::getInstance();
        $sql = "select * from fornecedor_has_produto where idfornecedor =? and idproduto =?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $Fornecedor_has_produtoDTO->getIdfornecedor());
        $execucao->bindValue(2, $Fornecedor_has_produtoDTO->getIdproduto());
        $execucao->execute();
        $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
}
