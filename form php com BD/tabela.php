<?php

    include_once("conexao.php");
    $select = "SELECT * FROM users";

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilos/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela de users</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <table>
        <tr class="titulos">
            <td>código</td>
            <td>nome do usuário</td>
            <td>email</td>
            <td>telefone</td>
            <td colspan="2">mudanças</td>
        </tr>
        
<?php
    $result = $conexao->query($select);
    while($tbl = mysqli_fetch_array($result)){
        $cod = $tbl['codigo'];
        $nome = $tbl['nome'];
        $email = $tbl['email'];
        $tel = $tbl ['tel'];

        echo "<tr>";
        echo "<td>$cod</td>";
        echo "<td>$nome</td>";
        echo "<td>$email</td>";
        echo "<td>$tel</td>";
        echo "<td><a href='alteracao.php?id=$cod' class='alt'>editar</a></td>";
        echo "<td><a href='exclusao.php?id=$cod' class='alt'>remover</a></td>";
        echo"</tr>";
    }
?>
    <tr class="cad">
        <td><a href="cadastro.html">Cadastro</a></td></td>
    </tr>
</body>
</html>