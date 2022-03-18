<?php
$bolo1 = [
    'açucar',
    'farinha de trigo', 
    'ovo', 
    'leite', 
    'fermento em pó'
];

$bolo2 = [
    ...$bolo1,
    'corante'
];

echo $bolo2[3];