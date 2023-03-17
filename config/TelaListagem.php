<?php
include("cabecalho.php");
include("conexao.php");

$sql = "SELECT id, email, nome, cpf FROM usuarios";

$result = $conexao->query($sql);

if($result->rowCount() > 0){
    echo "<table border=1>";
    echo" 
    <tr>
        <th>id</th>
        <th>email</th>
        <th>nome</th>
        <th>cpf</th>
        <th>editar</th>
        <th>deletar</th>
    </tr> ";

    foreach($result as $row){
    echo"<tr>";
    echo"<td>" .$row["id"] ."</td>";
    echo"<td>" .$row["email"] ."</td>";
    echo"<td>" .$row["nome"] ."</td>";
    echo"<td>" .$row["cpf"] ."</td>";
    echo'<td><a href="editar.php?id='.$row['id'].'">editar</a></td>';
    echo'<td><a href="deletar.php?id='.$row['id'].'">excluir</a></td>';
    echo"</tr>";

    }
    echo"</table>";
}else{
    echo"nenhum dado encontrado";
}

include("rodape.php");