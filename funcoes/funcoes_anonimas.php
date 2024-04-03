<div class="title">Funções Anónimas</div>

<?php
print('<p class="title">
<b>$multiplicacao</b> = function($a, $b) { } <br>
    <br>
    // <b>Função Anónima</b> é aquela que não possui nome e está armazenada dentro de uma 
    <b>variável</b> como visto no exemplo acima.
</p>');

$soma = function ($a, $b) {
    return $a + $b;
}; // Função anónima é aquela sem nome declarada dentro de uma variável.

echo $soma(1,2) . '<br>';

function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
} // Basicamente é uma função que chama outra função anónima

echo executar(2, 3, '+', $soma);

$multiplicacao = function($a, $b) {
    return $a * $b;
};

echo executar(2, 3, '*', $multiplicacao);

 function divisao($a, $b) {
    return $a / $b;
};

echo executar(9, 3, '/', divisao); // Também funciona pois a função busca a outra função
// via nome e adiciona os parâmetros $a e $b então apenas o nome funciona.