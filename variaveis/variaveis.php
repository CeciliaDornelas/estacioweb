<?php
$acesa = FALSE;
if($acesa){
    print("primeiro if, acesa");
}

$acesa = TRUE;
if($acesa){
    print("segundo if, acesa");
}

    echo "<br>";
    
    $valint=1234;
    echo $valint;

    echo "<br>";
    
    $valint=-1234;
    echo $valint;

    echo "<br>";
    
    #tipo de ponto flutuante
    $notaavum=4.5;
    $notaavdois=9.5;
    echo $notaavum+$notaavdois;   
    echo "<br>";

    $listacpf= array("fuji"=>"013046", "kaio"=>"754858");

    echo $listacpf["fuji"];
    echo "<br>";

    echo $listacpf["kaio"];
    
?>