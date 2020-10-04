<?php
    $nome=$_POST['nome'];
    $sal=$_POST['sal'];
    $aumento=$_POST['aumento'];

    $total_aumento=$sal*($aumento/100);
    $novosal=$sal+$total_aumento;

    echo'Olá ', $nome, ' seu salario foi alterado!';
    echo"<br>";
    echo'O valor do aumento percentual é de: R$', $total_aumento;
    echo"<br>";
    echo'O seu valor com o reajuste é de: R$', $novosal;
?>
<p><a href="quest01.html">>>voltar<<</a></p>