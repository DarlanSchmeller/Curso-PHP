<div class="title">Tipo Inteiro</div>
<p>Números inteiros, ou seja possuem valores absolutos sem variações.</p>

<style>
    p {
        font-size: 18px;
        padding-bottom: 10px;
        border-bottom: solid 1px black;
    }
</style>

<?php   
echo 11;
echo '<br>';

var_dump(11);
echo '<br>';
?>

<p>Valor máximo e minimo do tipo INTEIRO:</p>

<?php
echo PHP_INT_MAX, '<br>'; /* é possivel usar separação virgula
para concatenar varias strings dentro do echo */
echo PHP_INT_MIN, '<br>';

?>

<p>Diversas representações de bases, 
    respectivamente: Base Octal, Base Binária e Base Hexadecimal.</p>

<?php

echo 017, '<br>'; /* O '0' antes de um número inteiro usa
a base octal, que vai de 0 a 7. */

echo 0b11000101, '<br>'; /* Base Binária */
echo 0x117acf0, 'br'; /* Base Hexadecimal */