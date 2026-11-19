<?php 
$host = "localhost";
$banco = "mysql";
$usuario = "juvensky315";
$senha = "315!@#";


try{
    $pdo=new PDO("mysql:host= $host; dbname = $banco; charset=UTF8mba", $usuario,$senha);
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);

    echo"conectado com sucesso";

    $pdo->exec(create database if not exists Gerenciar_Funcionario);

    $pdo->exec(use Gerenciar_Funcionario);

    $pdo->exec(
        "create table if not exists funcionarios(
        id int primary key auto increment,
        nome varchar(100) not null,
        email varchar(200) not null, 
        salario decimal(10,3)");
}
catch (PDOException $erro) {
    echo "erro ao conectar:".$erro->getMessage();
}


    



?>