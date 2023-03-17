<?php

include ("conexao.php");

if(!isset($_GET['id'])){
    die("id do usuario nao fornecido");
}else{
    $id = $_GET['id'];
    $sql="DELETE FROM usuarios WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindValue(":id",$id);
    $stmt->execute();
}

header("Location: TelaListagem.php");
exit;