<?php

require_once 'Conexao/Conexao.php';

class FornecedorDAO {
    //put your code here
    public function Apagar(FornecedorDTO $FornecedorDTO) {
        $pdo = Conexao::getInstance();
        $sql = "delete from fornecedor where idfornecedor = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $FornecedorDTO->getIdfornecedor());
        return $execucao->execute();
    }
    
    public function Gravar(FornecedorDTO $FornecedorDTO) {
        $pdo = Conexao::getInstance();
        $sql = "insert into fornecedor (razao_social,nome_fantasia,nome_contato,email,telefone,cnpj,dt_cadastro,idusuario) values (?,?,?,?,?,?,?,?);";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $FornecedorDTO->getRazao_social());
        $execucao->bindValue(2, $FornecedorDTO->getNome_fantasia());
        $execucao->bindValue(3, $FornecedorDTO->getNome_contato());
        $execucao->bindValue(4, $FornecedorDTO->getEmail());
        $execucao->bindValue(5, $FornecedorDTO->getTelefone());
        $execucao->bindValue(6, $FornecedorDTO->getCnpj());
        $execucao->bindValue(7, $FornecedorDTO->getDt_cadastro());
        $execucao->bindValue(8, $FornecedorDTO->getIdusuario());
        return $execucao->execute();
        
    }
    
     public function Alterar(FornecedorDTO $FornecedorDTO) {
        $pdo = Conexao::getInstance();
        $sql = "update fornecedor set razao_social=?, nome_fantasia=?, nome_contato=?, email=?, telefone=?, cnpj=?, dt_cadastro=?, idusuario=? where idfornecedor = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $FornecedorDTO->getRazao_social());
        $execucao->bindValue(2, $FornecedorDTO->getNome_fantasia());
        $execucao->bindValue(3, $FornecedorDTO->getNome_contato());
        $execucao->bindValue(4, $FornecedorDTO->getEmail());
        $execucao->bindValue(5, $FornecedorDTO->getTelefone());
        $execucao->bindValue(6, $FornecedorDTO->getCnpj());
        $execucao->bindValue(7, $FornecedorDTO->getDt_cadastro());
        $execucao->bindValue(8, $FornecedorDTO->getIdusuario());
        $execucao->bindValue(9, $FornecedorDTO->getIdfornecedor());
        return $execucao->execute();
    }
    
        public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from fornecedor;";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $pesquisa = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
    
    public function PesquisarUmRegistro(FornecedorDTO $FornecedorDTO) {
        $pdo = Conexao::getInstance();
        $sql = "select * from fornecedor where idfornecedor=?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1,$FornecedorDTO->getIdfornecedor());
        $execucao->execute();
        $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
}

