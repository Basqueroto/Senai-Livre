<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "aplication";
$dsn = "mysql:host=$host;dbname=$banco;";

try{
    $conexao = new PDO($dsn, $usuario, $senha);
}catch(\PDOException $e){
    var_dump($e->getMessage());
}
