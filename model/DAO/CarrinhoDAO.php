<?php


class CarrinhoDAO {
    //put your code here
    public function Gravar(CarrinhoDTO $CarrinhoDTO) {
    $pdo = Conexao::getInstance();
        $sql = "insert into carrinho (quantidade,idproduto,idvenda) values (?,?,?);";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $CarrinhoDTO->getQuantidade());
        $execucao->bindValue(2, $CarrinhoDTO->getIdproduto());
        $execucao->bindValue(3, $CarrinhoDTO->getIdvenda());
        return $execucao->execute();
    }
    
    public function Apagar(CarrinhoDTO $CarrinhoDTO) {
        $pdo = Conexao::getInstance();
        $sql = "delete from carrinho where idproduto =? and idvenda =?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $CarrinhoDTO->getIdproduto());
        $execucao->bindValue(2, $CarrinhoDTO->getIdvenda());
        return $execucao->execute();
    }
    
    public function Alterar(CarrinhoDTO $CarrinhoDTO) {
        $pdo = Conexao::getInstance();
        $sql = "update carrinho quantidade =? where idproduto =? and idvenda =?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $CarrinhoDTO->getQuantidade());
        $execucao->bindValue(2, $CarrinhoDTO->getIdproduto());
        $execucao->bindValue(3, $CarrinhoDTO->getIdvenda());
        return $execucao->execute();
    }
    
    public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from carrinho;";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $pesquisa = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
    
    public function PesquisarUmRegistro(CarrinhoDTO $CarrinhoDTO) {
        $pdo = Conexao::getInstance();
        $sql = "select * from carrinho where idproduto =? and idvenda =?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1,$CarrinhoDTO->getIdproduto());
        $execucao->bindValue(2,$CarrinhoDTO->getIdvenda());
        $execucao->execute();
        $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
}
