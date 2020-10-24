<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
//    $op = $_GET['op'];
/*
    if ($op == '+') {
        $result = $num1+$num2;
        echo $result;
    }
    if ($op == '-') {
        $result = $num1-$num2;
        echo $result;
    }
    if ($op == '*') {
        $result = $num1*$num2;
        echo $result;
    }
    if ($op == '/') {
        $result = $num1/$num2;
        echo $result;
    }
*/   
    if (isset($_GET["somar"])) {
        $result = $num1+$num2;
        echo $result;
    }
    if (isset($_GET["subitrair"])) {
        $result = $num1-$num2;
        echo $result;
    }
    if (isset($_GET["multiplicar"])) {
        $result = $num1*$num2;
        echo $result;
    }
    if (isset($_GET["dividir"])) {
        $result = $num1/$num2;
        echo $result;
    }
?>