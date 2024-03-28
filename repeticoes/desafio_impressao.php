<div class="title">Desafio Impressão</div>

<!-- 
     Enunciado:
        Imprima somente os valores do array que contém índice par.
        Desafio Adicional: Resolver com For e Foreach.
        Valores: AAA, CCC, EEE.
 -->

<?php
$array = array(
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
);

for ($indice = 0; $indice <= 6 ; $indice++) {
    if ($indice % 2 === 1) {
        continue;
    }
    if ($indice % 2 !== 0) {
        break;
    }
    echo $array[$indice];
    echo '<br>';
}

echo '<hr>';

foreach ($array as $chave => $valor) {
    if ($chave % 2 !== 0) { // se for ímpar continua
        continue;
    }
    if ($chave % 2 === 0) { // se for par imprime
        echo $array[$chave];
        echo '<br>';
    }
}