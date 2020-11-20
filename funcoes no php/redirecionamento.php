<?php
    $age = $_GET['age'];

    if ($age<18) {
        header('location: https://www.clickjogos.com.br/');
    }
    else {
        header('location: https://tatame.com.br/');
    }

?>