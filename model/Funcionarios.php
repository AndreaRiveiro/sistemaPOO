<?php


class Funcionarios extends Usuarios{
    private $salario;

    function __construct($nome, $idade, $cpf, $login, $senha, $salario){
        parent::__construct($nome, $idade, $cpf, $login, $senha);
        $this->salario = $salario;
    }

    public function getSalario (){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

       public function cadastrarPessoa($con, $funcionario, $tipoPessoa){
        try{
            $query = $con->prepare("Insert Into usuarios (nome, idade, cpf, usuario, senha, salario, tipo_pessoa) Values(:nome, :idade, :cpf, :login, :senha, :salario,:tipo_pessoa)");
            $query->execute([
                "nome"=>$funcionario->getNome(),
                "idade"=>$funcionario->getIdade(),
                "cpf"=>$funcionario->getCpf(),
                "login"=>$funcionario->getLogin(),
                "senha"=>$funcionario->getSenha(),
                "salario"=>$funcionario->getSalario(),
                "tipo_pessoa"=>$tipoPessoa
            ]);
            return $query;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    } 
}
 
