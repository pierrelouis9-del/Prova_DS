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

    if ($nome !== "" && $email !== "" && $salario > 0 && $funcionario !== null) {

        $sql = "INSERT INTO funcionarios (nome, email, salario, tipo) VALUES(:nome, :email, :salario, :tipo)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":nome" => $funcionario->nome,
            ":email" => $funcionario->email,
            ":salario" => $funcionario->salario,
            ":tipo" => $tipo
        ]);

        $mensagem = "Funcionário registrado com sucesso!";

    }else{
        $mensagem="preenche todos os campos!";
    }

    if(!isset($_GET["excluir"])){
        $id = filter_var($_GET["excluir"],
        FILTER_VALIDATE_INT) ;
        
    }
    
}
?>

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

