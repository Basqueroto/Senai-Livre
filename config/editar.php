<?php
include("header.php");
include("conexao.php");

if(!isset($_GET['id'])){
    die("ID usuario invalido");
}

$id = $_GET['id'];

$sql = "SELECT * FROM usuario WHERE id = :id";
$stmt = $connect->prepare($sql);
$stmt->bindValue(":id", $id);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$row){
    die("usuario nao encontrado");
}
?>

<div class="container">
    <h1>Edicao de usuario</h1>
    <form action="<?php echo "atualizar.php?id=($id)" ?>" method="POST">
        <input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>">


        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Informe seu nome" required value="<?php echo $row['nome'] ?>">

        <label for="email">E-Mail</label>
        <input type="email" name="email" id="email" placeholder="Informe seu email" required value="<?php echo $row['email'] ?>">

        <label for="Login">Cpf</label>
        <input type="text" name="cpf" id="cpf" placeholder="Informe seu cpf" required value="<?php echo $row['cpf'] ?>">

        <button type="submit">Atualizar</button>

    </form>
</div>

<?php
include("rodape.php")
?>