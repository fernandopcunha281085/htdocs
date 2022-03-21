<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8" />
        <title>Omega Informática e Copiadora</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="projetocurso.css" />
    </head>
    <body>
<?php

$door = 5;
switch($door) {
    case '1': 
        echo "Você está entrando pela porta errada.";
    break;
    case '2': 
        echo "Você está entrando por uma porta certa.";
        break;
    case '3': 
            echo "Você está entrando por uma porta certa.";
            break;
        default: 
       echo "Você não escolheu nenhuma porta válida."; 
        break;
    }
?>
</body>
</html> 