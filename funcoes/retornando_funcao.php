<div class="title">Retornando Função</div>

<?php
function soma($a) {
    // Algoritmo

     return function($b) use ($a) { // retorna uma função anônima, e diz que essa usa '$a'.
        return $a + $b; // retorna o resultado da soma.
     };
} // Isso é util para temporizar códigos e chamar quando necessário, quebrando
// o código em partes.

echo soma(3)(3);

$doisMais = soma(2);
echo '<br>', $doisMais(10);
echo '<br>', $doisMais(18);