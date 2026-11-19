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
        $funcionario = new funcionarioComum($nome, $email, $salario);
    } elseif($tipo === "gerente"){
        $funcionario = new Gerente($nome, $email, $salario);
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
    <header>
        <h1>Sistema de Gerenciamento de funcionarios</h1>
    </header>
    <main>
        <div>
            <form method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
                <label for="salario">Salario:</label>
                <input type="number" name="salario" id="salario" required>
                <label for="tipo">Tipo:</label>
                <select name="tipo" id="tipo">
                    <option value="">Selecione</option>
                    <option value="funcionario comum">Funcionario</option>
                    <option value="gerente">Gerente</option>
                </select>
                <button type="submit">Cadastrar</button>
            </form>
        </div>  
    </main>

</body>
</html>

