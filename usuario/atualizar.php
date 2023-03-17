<?php

include("../conexao.php");

if(!isset($_GET['id'])){
    die("usuario nao existe");
}

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];

if(isset($id) && isset($nome) && isset($email) && isset($cpf)){
    $sql = "UPDATE usuario SET nome = :nome, cpf = :cpf, email = :email
    WHERE id = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":id", $id);
    $stmt->bindValue(":nome", $nome);
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":cpf", $cpf);
    $stmt->execute();

    header("Location: telalistagem.php");
    exit();
}else{
    die("Dados do formulario nao prenchido");
}