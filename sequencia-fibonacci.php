<?php

$numeroInformado = (int)readline("Informe um número para descobrir se ele está na sequência Fibonacci: ");
$numeroAtual = 0;
$numeroAnterior = 1;

if ($numeroInformado === 0 || $numeroInformado === 1) {
    echo "O número $numeroInformado pertence à sequência de Fibonacci.\n";
} else {
    while ($numeroAtual < $numeroInformado) {
        $numeroTemp = $numeroAtual;      
        $numeroAtual += $numeroAnterior;  
        $numeroAnterior = $numeroTemp;
    }

    if ($numeroAtual === $numeroInformado) {
        echo "O número $numeroInformado pertence a sequência Fibonacci.\n";
    } else {
        echo "O número $numeroInformado não pertence a sequência Fibonacci.\n";
    }
}
?>
