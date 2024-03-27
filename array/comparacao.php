<div class="title">Comparação entre Arrays</div>

<p class="title">
    <b>var_dump($arr1 == $arr2);</b>
        <br>
       // Compara dois Arrays, e retorna verdadeiro se forem iguais
       e retorna falso se tiverem elementos/valores diferentes.
</p>

<?php
$arr1 = array(
    'nome' => 'Maria',
    'idade' => 20
);
$arr2 = array(
    'nome' => 'João',
    'idade' => 20
);
var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);