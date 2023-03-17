<?php
include("conexao.php");

if(!isset($_GET['id'])){
    die("usuario nao existe");
}

$id = $_POST['id'];
$nome = $_POST['email'];
$email = $_POST['nome'];
$cpf = $_POST['cpf'];

if(isset($id) && isset($email) && isset($nome) && isset($cpf)){
    $sql = "UPDATE usuarios SET email = :email, nome = :nome, cpf = :cpf WHERE id = :id";

    $stmt = $connect->prepare($sql);
    $stmt->bindValue(":id", $id);
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":nome", $nome);
    $stmt->bindValue(":cpf", $cpf);
    $stmt->execute();

    header("Location: TelaListagem.php");
    exit();
}else{
    die("Dados do formulario nao prenchido");
}