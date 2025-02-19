<?php
//Correspondência de Expressão:
$busca = 7;  

// Definindo a estrutura de decisão
switch ($busca) {
    case 9:
        $retorno = 'Encontrou o número 9';
        break;
    case 100:
    case 90:
    case 80:
        $retorno = 'Encontrou o número 100, 90 ou 80';
        break;
    case '7':
        $retorno = 'Encontrou o texto 7';
        break;
    default:
        $retorno = 'Retorno se nenhuma condição for satisfeita';
        break;
}

echo $retorno;

?>
