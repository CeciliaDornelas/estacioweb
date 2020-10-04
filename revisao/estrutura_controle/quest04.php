<?php
    $nome=$_POST['nome'];
    $dias=$_POST['dias'];

    $totaldiaria=$dias*40;
    
    echo $nome;
    echo"<br>";
    if($dias<10){
        $taxa=$dias*15;
        $result=$taxa+$totaldiaria;
        echo 'total:', $result;
    }
    else{
        $taxa=$dias*8;
        $result=$taxa+$totaldiaria;
        echo 'total:', $result;
    }
?>
<p><a href="quest04.html">>>voltar<<</a></p>