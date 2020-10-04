<?php

#quest 04
    $valorint=10;
    if($valorint<15){
        echo $valorint, ' ::este valor e menor q 15::';
    }
    elseif($valorint>100){
        echo $valorint, ' ::este valor e maior q 100::'; 
    }
    echo"</br>";

#quest 05
    $valoreal=2.8;
    if(($valoreal>1.99)&&($valoreal<5.99)){
        echo $valoreal, ' ::este valor esta entre 1.99 e 5.99::';
    }
    else{
        echo $valoreal, ' ::este valor não esta entre 1.99 e 5.99::'; 
    }
    echo"<br>";

#quest 06
    if($valorint==$valoreal){
        echo'os valores são iguais';
    }
    else{
        echo'os valores não são iguais';
    }

?>