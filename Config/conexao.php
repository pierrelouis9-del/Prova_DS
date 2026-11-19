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
}
catch (PDOException $erro) {
    echo "erro ao conectar:".$erro->getMessage();

}
?>