<?php

require_once 'Conexao/Conexao.php';

class NfcDAO {
    //put your code here
    public function Apagar(NfcDTO $NfcDTO) {
        $pdo = Conexao::getInstance();
        $sql = "delete from nfc where idnfc = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $NfcDTO->getIdnfc());
        return $execucao->execute();
    }
    
    public function Gravar(NfcDTO $NfcDTO) {
        $pdo = Conexao::getInstance();
        $sql = "insert into nfc (dt_emissao,dt_saida,hr_saida,nome_produto,modelo_produto,categoria_produto,valor_produto,quantidade_produto,valor_total,idvenda) values (?,?,?,?,?,?,?,?,?,?);";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $NfcDTO->getDt_emissao());
        $execucao->bindValue(2, $NfcDTO->getDt_saida());
        $execucao->bindValue(3, $NfcDTO->getHr_saida());
        $execucao->bindValue(4, $NfcDTO->getNome_produto());
        $execucao->bindValue(5, $NfcDTO->getModelo_produto());
        $execucao->bindValue(6, $NfcDTO->getCategoria_produto());
        $execucao->bindValue(7, $NfcDTO->getValor_produto());
        $execucao->bindValue(8, $NfcDTO->getQuantidade_produto());
        $execucao->bindValue(9, $NfcDTO->getValor_total());
        $execucao->bindValue(10, $NfcDTO->getIdvenda());
        return $execucao->execute();
    }
    
    public function Alterar(NfcDTO $NfcDTO) {
        $pdo = Conexao::getInstance();
        $sql = "update nfc set dt_emissao=?, dt_saida=?, hr_saida=?, nome_produto=?, modelo_produto=?, categoria_produto=?, valor_produto=?, quantidade_produto=?, valor_total=?, idvenda=? where idnfc = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $NfcDTO->getDt_emissao());
        $execucao->bindValue(2, $NfcDTO->getDt_saida());
        $execucao->bindValue(3, $NfcDTO->getHr_saida());
        $execucao->bindValue(4, $NfcDTO->getNome_produto());
        $execucao->bindValue(5, $NfcDTO->getModelo_produto());
        $execucao->bindValue(6, $NfcDTO->getCategoria_produto());
        $execucao->bindValue(7, $NfcDTO->getValor_produto());
        $execucao->bindValue(8, $NfcDTO->getQuantidade_produto());
        $execucao->bindValue(9, $NfcDTO->getValor_total());
        $execucao->bindValue(10, $NfcDTO->getIdvenda());
        $execucao->bindValue(11, $NfcDTO->getIdnfc());
        return $execucao->execute();
    }
    
    public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from nfc;";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $pesquisa = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
    
    public function PesquisarUmRegistro(NfcDTO $NfcDTO) {
        $pdo = Conexao::getInstance();
        $sql = "select * from nfc where idnfc=?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1,$NfcDTO->getIdnfc());
        $execucao->execute();
        $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
}
