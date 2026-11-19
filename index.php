<?php 
require_once __DIR__ . "/app/Models/indexClasse.php";
require_once __DIR__ . "/Config/conexao.php";

$mensagem="";

if($_SERVER["REQUEST_METHOD"]=== "POST"){
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $salario = $_POST["salario"];
    $tipo = $_POST["tipo"] ?? "";
    $funcionario = null;

    if($tipo === "funcionario comum"){
        $funcionario = new funcionarioComum();
    } elseif($tipo === "gerente"){
        $funcionario = new Gerente();
    }
    if($funcionario !== null && $nome !==""){
        $funcionario->nome =$nome;
        $sql="insert into funcionarios(nome, email,salario) values(:nome,:email,:salario)";

        $stmt->execute ([
            ":nome" =>$funcionario->nome,
            ":email" =>$funcionario->email,
            ":salario" =>$funcionario->salario]);
        $mensagem="funcionario registrado com successo!";
    }else{
        $mensagem="preenche todos os campos!";
    }

    
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

?>