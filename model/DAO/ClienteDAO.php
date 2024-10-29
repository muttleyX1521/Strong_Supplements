<?php

require_once 'Conexao/Conexao.php';

class ClienteDAO {
    //put your code here
    public function Apagar(ClienteDTO $ClienteDTO) {
        $pdo = Conexao::getInstance();
        $sql = "delete from cliente where idcliente = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $ClienteDTO->getIdcliente());
        return $execucao->execute();
    }
    
     public function Gravar(ClienteDTO $ClienteDTO) {
        $pdo = Conexao::getInstance();
        $sql = "insert into cliente (nome,telefone,cpf,email,dt_nasc,usuario,genero,endereco,senha,dt_alteracao) values (?,?,?,?,?,?,?,?,?,?);";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $ClienteDTO->getNome());
        $execucao->bindValue(2, $ClienteDTO->getTelefone());
        $execucao->bindValue(3, $ClienteDTO->getCpf());
        $execucao->bindValue(4, $ClienteDTO->getEmail());
        $execucao->bindValue(5, $ClienteDTO->getDt_nasc());
        $execucao->bindValue(6, $ClienteDTO->getUsuario());
        $execucao->bindValue(7, $ClienteDTO->getGenero());
        $execucao->bindValue(8, $ClienteDTO->getEndereco());
        $execucao->bindValue(9, $ClienteDTO->getSenha());
        $execucao->bindValue(10, $ClienteDTO->getDt_alteracao());
        return $execucao->execute();
    }
    
    public function Alterar(ClienteDTO $ClienteDTO) {
        $pdo = Conexao::getInstance();
        $sql = "update cliente set nome=?, telefone=?, cpf=?, email=?, dt_nasc=?, usuario=?, genero=?, endereco=?, senha=?, dt_alteracao=? where idcliente = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $ClienteDTO->getNome());
        $execucao->bindValue(2, $ClienteDTO->getTelefone());
        $execucao->bindValue(3, $ClienteDTO->getCpf());
        $execucao->bindValue(4, $ClienteDTO->getEmail());
        $execucao->bindValue(5, $ClienteDTO->getDt_nasc());
        $execucao->bindValue(6, $ClienteDTO->getUsuario());
        $execucao->bindValue(7, $ClienteDTO->getGenero());
        $execucao->bindValue(8, $ClienteDTO->getEndereco());
        $execucao->bindValue(9, $ClienteDTO->getSenha());
        $execucao->bindValue(10, $ClienteDTO->getDt_alteracao());
        $execucao->bindValue(11, $ClienteDTO->getIdcliente());
        return $execucao->execute();
    }
    
        public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from cliente;";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $pesquisa = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
    
    public function PesquisarUmRegistro(ClienteDTO $ClienteDTO) {
        $pdo = Conexao::getInstance();
        $sql = "select * from cliente where idcliente=?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1,$ClienteDTO->getIdcliente());
        $execucao->execute();
        $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
}
