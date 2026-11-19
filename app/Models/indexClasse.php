<?php 
abstract class Funcionario{
    public $nome;
    public $email;
    public $salario = 1000;

    abstract public function CalcularBonus();
}

class funcionarioComum extends Funcionario{
    function __construct(){
        $this->nome = $nome;
        $this->email = $email;
        $this->salario = $salario;
    }
    function CalcularBonus (){
        $novasalario = $salario *5 / 100;
        return"calculando o bonus";
    }
}

class Gerente extends Funcionario{
    function __construct(){
        $this->nome = $nome;
        $this->email = $email;
        $this->salario = $salario;
        $novasalario = $salario *5 / 100;
    }
    function CalcularBonus (){
        return"calculando o bonus";
    }
}
?>