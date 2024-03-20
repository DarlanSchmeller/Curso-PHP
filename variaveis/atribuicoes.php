<div class="title">Atribuições</div>

<?php 
echo 
'<p class="title">
<b> $numero--; </b> // Operador de Decremento, sempre remove uma UNIDADE!
<br> <br>
<b> $numero++; </b> // Operador de Incremento, sempre adiciona uma UNIDADE!
<br> <br>
<b>$numero += 5; </b> // Adiciona 5 ao valor definido dentro da variável
<br>
<b>$numero *= 5; </b> // multiplica por 5 o valor definido dentro da variável
<br>
Ainda podem ser usado diversos sinais para encurtar estas
operações como: 
<br>
<b> | += | -= | *= | /= | **= | %= | .= |</b>
</p>';



$title = 'Atribuições';
echo 
'<p class="title">
Experimentando com ' . $title . '</p>';

$numero = 10;
print('Imprimindo o valor: ' . $numero . '<br>');


$numero = $numero -1; // É possível modificar o valor de forma
// dinâmica após declarar uma variável.
print('Veja, modifiquei este número: ' . $numero . '<br>');


$numero = $numero - 3;
print('Modifiquei ele novamente: ' . $numero . '<br>');


$numero = $numero + 1.5;
echo 'Transformei em float: ' . $numero . '<br>';

$numero2 = 15;


$numero2--; // Operador de Decremento, sempre remove uma UNIDADE!
print($numero2 . '<br>');

$numero2++; // Operador de Incremento, sempre adiciona uma UNIDADE!
print($numero2 . '<br>');

$numero2 += 3; // Operador de Decremento, sempre remove uma UNIDADE!
print($numero2 . '<br>');

$numero2 -= 3; // Operador de Incremento, sempre adiciona uma UNIDADE!
print($numero2 . '<br>');

$numero2 *= 2; // Operador de Decremento, sempre remove uma UNIDADE!
print($numero2 . '<br>');

$numero2 /= 2; // Operador de Incremento, sempre adiciona uma UNIDADE!
print($numero2 . '<br>');

