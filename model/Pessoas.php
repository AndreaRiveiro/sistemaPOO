<?php

class Pessoas{
    private $nome;
    private $idade;
    private $cpf;

    function __construct($nome, $idade, $cpf){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome; //this = a prorpia classe
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($idade){
        $this->idade = $idade; //this = a prorpia classe
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf; //this = a prorpia classe
    }

    public function cadastrarPessoa($con, $pessoa){
        try{
            $query = $con->prepare("Insert Into usuarios (nome, idaade, cpf) Values(?,?,?)");
            $query->execute([
                $pessoa->getNome(),
                $pessoa->getIdade(),
                $pessoa->getCpf()
            ]);
            return $query;
        }catch(PDOException $e){
            return false;
        }
    } 
}
 