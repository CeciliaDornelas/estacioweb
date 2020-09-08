<?php
$email = $_POST['email'];
$tel = $_POST['tel'];
$dat = $_POST['dat'];
$nome = $_POST['nome'];

$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastro";

$conexao = new mysqli($hostname, $user, $password, $database);

if($conexao->connect_error){
    header('location: 404.html');
}

$sql =" INSERT INTO usuarios (`codigo`, `email`, `telefone`, `nascimento`, `nome`) VALUES (NULL, '$email', '$tel', '$dat', '$nome')";
if (mysqli_query($conexao, $sql)){
    header('location: success.html');
}

$conexao->close();
?>