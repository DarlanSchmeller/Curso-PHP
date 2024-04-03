<div class="title">Closure & Callable</div>

<?php
print('<p class="title">
    Callable: Qualquer função/bloco de código que pode ser
    chamado para ser executado no código, sendo o comando para verificar
    este estado: is_callable 
    <br>
    Closure: Tipo de classe em PHP usado para armazenar funções
    anónimas.
</p>');
$soma1 = function ($a, $b) {
    return $a + $b;
};

function soma2($a, $b) {
    return $a + $b;
};

echo $soma1(1,2) . '<br>';
echo is_callable($soma1) ? 'Sim. <br>' : 'Não. <br>'; // Ternário

echo is_callable(soma2) ? 'Sim. <br>' : 'Não. <br>'; // Ternário

var_dump($soma1);

function executar($a, $b, $op, callable $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
} 
echo '<hr>';
echo executar(2, 3, '+', $soma1);
echo executar(2, 3, '+', soma2);


function executar2($a, $b, $op, closure $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
} 
echo '<hr>';
echo executar2(100, 100, '+', $soma1);
echo executar2(3000, 3000, '+', soma2);