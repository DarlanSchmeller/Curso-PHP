<div class="title">Tipo Float</div>
<p>Ponto Flutuante: Números não exatos que possuem expansão decimal infinita. ex: o Pi (π)
</br>
</br>  
    Números que possuem ponto flutuante, sendo estes números RACIONAIS ou
     IRRACIONAIS, ou seja números depois da virgula, 
     o PHP considera números RACIONAIS que possuem valor depois da virgula 
     exato como PONTO FLUTUANTE também assim como inteiros com decimal 0. (ex: 1.0) 
</p>

<style>
    p {
        font-size: 18px;
        padding-bottom: 10px;
        border-bottom: solid 1px black;
    }
</style>

<?php

echo 1.1, '</br>';

echo var_dump(1.0), '</br>';

echo var_dump(1.1), '</br>';
?>

<p>Valor máximo e minimo do Float:</p>

<?php
echo PHP_FLOAT_MAX, '<br>';

echo PHP_FLOAT_MIN, '<br>';

echo 1.2e3, '<br>'; /* 1.2 elevado por 3 zeros. */

echo 13e-3, '<br>'; /* multiplica por zero elevado a -13 */