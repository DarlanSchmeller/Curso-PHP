<div class="title">Desafio PI</div>

<?php
$pi = 3.14;
echo 'pi(): ' . pi() . '<br>';
echo '$pi =' . $pi . "<br>";

if($pi - pi() <> 0.01) {
    echo "<br>Iguais!";
} else {
    echo "<br>Diferentes!";
}

// Operador Relacional

$piErrado = 2.8;  