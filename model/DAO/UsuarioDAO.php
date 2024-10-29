<?php

require_once 'Conexao/Conexao.php';

class UsuarioDAO {
    //put your code here
    public function Apagar(UsuarioDTO $UsuarioDTO) {
        $pdo = Conexao::getInstance();
        $sql = "delete from usuario where idusuario = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $UsuarioDTO->getIdusuario());
        return $execucao->execute();
    }
    
    public function Gravar(UsuarioDTO $UsuarioDTO) {
        $pdo = Conexao::getInstance();
        $sql = "insert into usuario (nome,telefone,cpf,email,usuario,genero,endereco,senha,dt_alteracao,idperfil) values (?,?,?,?,?,?,?,?,?,?);";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $UsuarioDTO->getNome());
        $execucao->bindValue(2, $UsuarioDTO->getTelefone());
        $execucao->bindValue(3, $UsuarioDTO->getCpf());
        $execucao->bindValue(4, $UsuarioDTO->getEmail());
        $execucao->bindValue(5, $UsuarioDTO->getUsuario());
        $execucao->bindValue(6, $UsuarioDTO->getGenero());
        $execucao->bindValue(7, $UsuarioDTO->getEndereco());
        $execucao->bindValue(8, $UsuarioDTO->getSenha());
        $execucao->bindValue(9, $UsuarioDTO->getDt_alteracao());
        $execucao->bindValue(10, $UsuarioDTO->getIdperfil());
        return $execucao->execute();
    }
    
    public function Alterar(UsuarioDTO $UsuarioDTO) {
        $pdo = Conexao::getInstance();
        $sql = "update usuario set nome=?, telefone=?, cpf=?, email=?, usuario=?, genero=?, endereco=?, senha=?, dt_alteracao=?, idperfil=? where idusuario = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1, $UsuarioDTO->getNome());
        $execucao->bindValue(2, $UsuarioDTO->getTelefone());
        $execucao->bindValue(3, $UsuarioDTO->getCpf());
        $execucao->bindValue(4, $UsuarioDTO->getEmail());
        $execucao->bindValue(5, $UsuarioDTO->getUsuario());
        $execucao->bindValue(6, $UsuarioDTO->getGenero());
        $execucao->bindValue(7, $UsuarioDTO->getEndereco());
        $execucao->bindValue(8, $UsuarioDTO->getSenha());
        $execucao->bindValue(9, $UsuarioDTO->getDt_alteracao());
        $execucao->bindValue(10, $UsuarioDTO->getIdperfil());
        $execucao->bindValue(11, $UsuarioDTO->getIdusuario());
        return $execucao->execute();
    }
    
    public function Pesquisar() {
        $pdo = Conexao::getInstance();
        $sql = "select * from usuario;";
        $execucao = $pdo->prepare($sql);
        $execucao->execute();
        $pesquisa = $execucao->fetchAll(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
    
    public function PesquisarUmRegistro(UsuarioDTO $UsuarioDTO) {
        $pdo = Conexao::getInstance();
        $sql = "select * from usuario where idusuario = ?;";
        $execucao = $pdo->prepare($sql);
        $execucao->bindValue(1,$UsuarioDTO->getIdusuario());
        $execucao->execute();
        $pesquisa = $execucao->fetch(PDO::FETCH_ASSOC);
        return $pesquisa;
    }
}
