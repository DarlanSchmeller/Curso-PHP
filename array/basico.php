<div class="title">Array</div>

<?php
$lista = array(1, 2 , 3.4, "texto");
    // INDICE  0, 1,   2,     3
    // O índice de array sempre começa do 0.
//var_dump($lista);
echo '<br>';
print_r($lista);
echo '<br>';

echo '<br>' . $lista[3];
echo '<br>' . $lista[2];
echo '<br>';
var_dump($lista[4]);

$texto1 = 'Esse é um textp de teste';
echo '<br>' . $texto1[0]; // Pode ser usado para pegar letras de uma string.
// porém com acentuação conta como dois caracteres então use mb_string