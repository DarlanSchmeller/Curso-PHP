<div class="title">Desafio Recursividade</div>

<?php

/* 
    $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];
     > 1
     > 2
     >> 3
     >> 4
     >> 5
     > 6
     >> 87
     >>> 8 
     >>> 9 
     > 10

     Desafio: Imprimir todos os números dentro do array de forma
     recursiva, e sempre imprimindo um símbolo antes do valor.
*/ 
$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function imprimirArray($array, $nivel = '>') {
    foreach($array as $elemento) {
        if (is_array($elemento)) {
            imprimirArray($elemento, $nivel. $nivel[0]);
        } else {
            echo "$nivel $elemento <br>";
        }
    }
}

imprimirArray($array);
echo '<br>';
echo '<hr>';
print_r($array);