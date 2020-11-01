<?php
    $semana = $_GET['semana'];

    switch ($semana) {
        case 'segunda':
            echo "voce digitou segunda feira!";
            break;
        case 'terça':
            echo "voce digitou terça feira!";
            break;
        case 'quarta':
            echo "voce digitou quarta feira!";
            break;
        case 'quinta':
            echo "voce digitou quinta feira!";
            break;
        case 'sexta':
            echo "voce digitou sexta feira!";
            break;
        default:
            echo "dia da semana nao existe...";
            break;
    }