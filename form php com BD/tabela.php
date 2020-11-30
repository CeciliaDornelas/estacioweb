<?php

    include_once("conexao.php");
    $select = "SELECT * FROM users";

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Tabela de Users</title>

</head>
<body>
    <h4>Usuários Cadastrados</h4>
          
    <table class="table" style=" position: absolute; top: 20%; font-size: 20px; color: rgb(49, 48, 48); border-radius: 5px; text-align: center;" >
        
        <tr class="titulos alert alert-secondary">
            <th scope="col">Código</th>
            <th scope="col">Nome do Usuário</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col" colspan="2">Ações</th>
        </tr>
<?php
    $result = $conexao->query($select);
    while($tbl = mysqli_fetch_array($result)):
        $cod = $tbl['codigo'];
        $nome = $tbl['nome'];
        $email = $tbl['email'];
        $tel = $tbl ['tel'];

        echo "<tr>";
        echo "<td>$cod</td>";
        echo "<td>$nome</td>";
        echo "<td>$email</td>";
        echo "<td>$tel</td>";
?>
    <td> <icon><a href='alteracao.php?id=<?php echo $cod; ?>' class='alt btn btn-primary'>editar</a></td></icon>
    <td> <icon><a href='exclusao.php?id=<?php echo $cod; ?>' class='alt btn btn-danger'>remover</a></td></button>
    </tr>
<?php endwhile; ?>
    <div class="div-cad">
        <button type="button" class="btn btn-primary cad-usuario"><a class="cad-link" href="cadastro.html" >Cadastrar Novo Usuário</a></button>
    </div>
</body>
</html>