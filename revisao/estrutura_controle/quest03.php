<?php
    $nome=$_POST['nome'];
    $nota1=$_POST['nota1'];
    $nota2=$_POST['nota2'];

    $media=($nota1+$nota2)/2;

    echo $nome, '.';

    echo' Sua media é: ', $media;

    echo"<br>";

    if($media>7.0){
        echo'Situação: Aprovado!';
    }
    elseif(($media>=3.0)&&($media<=7.0)){
        echo'Situação: Exame';
    }
    else{
        echo'Situação: Reprovado';
    }
?>
<p><a href="quest03.html">>>voltar<<</a></p>