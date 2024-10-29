<?php

require_once 'Conexao/Conexao.php';

class VendaDAO {
    //put your code here
    public function Apagar(VendaDTO $VendaDTO) {
        $pdo = Conexao::getInstance();
        $sql = "delete from venda where idvenda = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $VendaDTO->getIdvenda());
        return $execucao->execute();
    }
    
    public function Gravar(VendaDTO $VendaDTO) {
        $pdo = Conexao::getInstance();
        $sql = "insert into venda (dt_venda,valor_total,forma_pg,status,observacoes,dt_cadastro,idcliente) values (?,?,?,?,?,?,?);";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $VendaDTO->getDt_venda());
        $execucao->bindValue(2, $VendaDTO->getValor_total());
        $execucao->bindValue(3, $VendaDTO->getForma_pg());
        $execucao->bindValue(4, $VendaDTO->getStatus());
        $execucao->bindValue(5, $VendaDTO->getObservacoes());
        $execucao->bindValue(6, $VendaDTO->getDt_cadastro());
        $execucao->bindValue(7, $VendaDTO->getIdcliente());
        return $execucao->execute();
    }
    
    public function Alterar(VendaDTO $VendaDTO) {
        $pdo = Conexao::getInstance();
        $sql = "update venda set dt_venda=?, valor_total=?, forma_pg=?, status=?, observacoes=?, dt_cadastro=?, idcliente=? where idvenda = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $VendaDTO->getDt_venda());
        $execucao->bindValue(2, $VendaDTO->getValor_total());
        $execucao->bindValue(3, $VendaDTO->getForma_pg());
        $execucao->bindValue(4, $VendaDTO->getStatus());
        $execucao->bindValue(5, $VendaDTO->getObservacoes());
        $execucao->bindValue(6, $VendaDTO->getDt_cadastro());
        $execucao->bindValue(7, $VendaDTO->getIdcliente());
        $execucao->bindValue(8, $VendaDTO->getIdvenda());
        return $execucao->execute();
    }
    
    public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from venda;";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $pesquisa = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
    
    public function PesquisarUmRegistro(VendaDTO $VendaDTO) {
        $pdo = Conexao::getInstance();
        $sql = "select * from venda where idvenda=?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1,$VendaDTO->getIdvenda());
        $execucao->execute();
        $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
}
