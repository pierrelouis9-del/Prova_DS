<?php 
abstract class Funcionario{
    public $nome;
    public $email;
    public $salario;
    public function __construct($nome, $email, $salario)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->salario = $salario;
    }

    abstract public function CalcularBonus();
}

class funcionarioComum extends Funcionario{
    function __construct($nome, $email,$salario){
        $this->nome = $nome;
        $this->email = $email;
        $this->salario = $salario;
    }
    function CalcularBonus (){
        return $this->salario *5/100;
    }
}

class Gerente extends Funcionario{
    function __construct($nome, $email,$salario){
        $this->nome = $nome;
        $this->email = $email;
        $this->salario = $salario;
    }
    function CalcularBonus (){
        return $this->salario *15/100;
    }
}    

?>