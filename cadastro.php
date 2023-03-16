<?php

include("../Senai-Livre/config/cabecalho.php");
?>

<div class="container">
    <h1>Registro de usuario</h1>
    <input type="checkbox" id="chk" aria-hidden="true">
    <form action="" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="informe seu nome" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="informe seu email" required>

        <label for="cpf">Cpf</label>
        <input type="text" name="cpf" id="cpf" placeholder="informe seu cpf" required>

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="informe seu senha" required>

        <button type="submit">Enviar</button>
    </form>
    <?php
        include("../Senai-Livre/config/conexao.php");
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $cpf = $_POST["cpf"];
            $senha = $_POST["senha"];

            $sql ="INSERT INTO usuario(nome, email, cpf, senha) VALUES (:nome, :email, :cpf, :senha) ";
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
<?php
    include("../Senai-Livre/config/cabecalho.php")
?>

<div class="container">
    <h1>Login do usuario</h1>
    <form action="" method="POST">
        <label for="login">Login</label>
        <input type="text" name="login" id="login" placeholder="informe seu login" required>

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="informe sua senha" required>

        <button type="submit">Enviar</button>
    </form>
    <?php
        //conectar com o banco de dados
        include("../Senai-Livre/config/conexao.php");

        //formulário foi enviado?
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $login = $_POST["login"];
            $senha = $_POST["senha"];

            $sql = "SELECT * FROM usuario WHERE login = :login and senha = :senha";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":login", $login);
            $stmt->bindValue(":senha", $senha);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if($result){
               header("Location: TelaListagem.php");
            }
            else {
                echo"<div class = 'error'>falha em logar o usuário</div>";
            }
        // fechar conexão
        $conexao = null;
        }
    ?>
</div>


</div>

<?php
    include("../Senai-Livre/config/rodape.php");
?>
