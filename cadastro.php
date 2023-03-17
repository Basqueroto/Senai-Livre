<?php

include("../Senai-Livre/config/cabecalho.php");
?>
<div id="cad">
        <nav id="cad-nav">
            <a href="index.php">Voltar</a>
        </nav>
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class="signup">
        <form class="imp" method="POST">
            <label for="chk" aria-hidden="true">Cadastre-se</label>
            <input type="text" name="nome" id="nome" placeholder="Nome" required="">
            <input type="number" name="cpf" id="cpf" placeholder="CPF" required="">
            <input type="email" name="email" id="email" placeholder="Email" required="">
            <input type="password" name="senha" id="senha" placeholder="Senha" required="">
            <button class="cads">Sign up</button>
        </form>
    <?php
        include("../Senai-Livre/config/conexao.php");
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $senha = $_POST["senha"];

            $sql ="INSERT INTO usuarios (nome, email, cpf, senha) VALUES (:nome, :email, :cpf, :senha) ";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":cpf", $cpf);
            $stmt->bindValue(":senha", $senha);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                echo"<div class='sucess'>usuario cadastrado com sucesso</div>";
            }else{
                echo"<div class='error'> falha ao registrar o usuario</div>";
            }

            $conexao = null;
        }
    ?>
</div>

<div class="login">
    <div class="menu">
        <form class="imp" method="POST">
            <label for="chk" aria-hidden="true">Login</label>
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="senha" placeholder="Senha" required="">
            <button class="cads">Login</button>
            </form>
    </div>
    <?php
        //conectar com o banco de dados
        include("config/conexao.php");

        //formulário foi enviado?
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $sql = "SELECT * FROM usuarios   WHERE email = :email and senha = :senha";
            $stmt = $conexao->prepare($sql);
        
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":senha", $senha);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result){
               header("Location: config/TelaListagem.php");
            }
            else {
                echo"<div class = 'error'>falha em logar o usuário</div>";
            }$conexao = null;
        }
    ?>
</div>

</body>
</html>