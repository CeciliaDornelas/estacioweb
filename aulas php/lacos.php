<?php
$cont = $_GET['cont'];
    
    while ($cont <= 6) {
        echo"<h$cont> texto </h$cont>";
        $cont++;
    }
?>