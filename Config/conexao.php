<?php 
$host = "localhost";
$banco = "mysql";
$usuario = "juvensky315";
$senha = "315!@#";


try {

    $pdo = new PDO(
        "mysql:host=$host;charset=utf8mb4",
        $usuario,
        $senha
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $banco");
    $pdo->exec("USE $banco");
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS funcionarios (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(100) NOT NULL,
            email VARCHAR(200) NOT NULL,
            salario DECIMAL(10,2) NOT NULL,
            tipo VARCHAR(50) NOT NULL)");

}
catch (PDOException $erro) {

    die("Erro na conexão: " . $erro->getMessage());

}

?>
