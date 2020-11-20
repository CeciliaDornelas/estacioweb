<?php
    
    $valor= calculaCerveja(10,5);
    echo $valor;

    function calculaCerveja($qtd, $valor=5.0){
        return $qtd*$valor;
    }

    $valorAula;

    if(empty($valorAula)){
        $valorAula = 100.00;
    }
?>