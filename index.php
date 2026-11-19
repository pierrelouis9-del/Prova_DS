<?php 
require_once __DIR__ . "/app/Models/indexClasse.php";
require_once __DIR__ . "/Config/conexao.php";

if($_SERVER["REQUEST_METHOD"]=== "POST"){
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $salario = $_POST["salario"];


    
}

?>