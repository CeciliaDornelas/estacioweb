<?php
    $salbruto=$_POST['salbruto'];
    $prestacao=$_POST['prestacao'];
    $descont=(30/100)*$salbruto;
    $saltotal = $salbruto - $descont;

    if($prestacao<$saltotal){
        echo'O Emprestimo pode ser concluido!';
    }
    else{
        echo'O Emprestimo não pode ser concluido!';
    }

?>