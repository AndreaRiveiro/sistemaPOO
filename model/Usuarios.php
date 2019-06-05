<?php


class Usuarios extends Pessoas{
    private $login;
    private $senha;

    function __construct($nome, $idade, $cpf, $login, $senha){
        parent::__construct($nome, $idade, $cpf);
        $this->login = $login;
        $this->senha = $senha;
    }

    public function getLogin (){
        return $this->login;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getSenha (){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function cadastrarPessoa($con, $pessoa){
        try{
            $query = $con->prepare("Insert Into usuarios (nome, idaade, cpf, usuario, senha) Values(?,?,?,?,?)");
            $query->execute([
                $pessoa->getNome(),
                $pessoa->getIdade(),
                $pessoa->getCpf(),
                $pessoa->getLogin(),
                $pessoa->getSenha()
            ]);
            return $query;
        }catch(PDOException $e){
            return false;
        }
    } 
}
 