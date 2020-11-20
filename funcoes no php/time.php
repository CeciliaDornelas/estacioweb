<?php
    echo time();
    echo '<br>';
    echo strftime("%c<br>\n");
    
    $ts = mktime(20,46,12, 13,11,2020);
    $data = getdate($ts);
    echo "$data[hours] horas e $data[minutes] minutos, ano $data[year].";
    echo '<br>';
    echo strftime('o timestamp equivale a %d/%b/%y, %t', $ts);
?>