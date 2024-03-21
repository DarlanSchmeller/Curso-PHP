<div class="title">Valor VS Referência</div>

<?php   
echo '<p class="title"><b>$variavelreferencia = &$variavel;</b> // Para atribuir uma variável via referência,
use "&"" antes da variável original.</p>';


echo '<p class="title"><b>Atribuição por Valor:</b></p>';
$variavel = '<p class="title">"valor inicial"';
echo $variavel;
echo ' // Esta é a <b>Variável|A|</b>.', '<br>';

//      ATRIBUIÇÂO POR VALOR!

$variavelvalor = $variavel; 
/* Apenas cria uma cópia do valor com endereço de memória diferente
logo os valores não são conectados, ambas podem ter valores diferentes 
sem alterar a outra variável. */
echo $variavelvalor . " // este é o valor da <b>Variável|B|</b> que copiou o valor da 
<b>Variável|A|</b>. <br>";

$variavelvalor = '"novo valor"' . ' // Essa <b>VariávelB</b> pode ser alterada de forma 
independente.';
echo $variavelvalor;

//     ATRIBUIÇÂO POR REFERÊNCIA

echo '<p class="title"><b>Atribuição por Referência:</b></p>';
$variavelreferencia = &$variavel; /* Para atribuir uma variável via referência,
use '&' antes da variável original. */
$variavelreferencia = 'mesma referencia';

echo "$variavelreferencia: Esta é a <b>Variável|C|</b> e fez sua atribuição da Variável|A|" 
. '<p class="title">// Ao alterar a <b>Variável|C|</b> que sofreu atribuição por referência, o
conteúdo da variável que foi copiada também é alterado, pois ambas compartilham o mesmo
espaço de memória e endereço do computador. <br> <br>';

echo $variavel . ' // Está é a <b>Variável|A|</b> agora, veja como ela tem o mesmo valor da <b>Variavel|C|</b>,
mesmo sem altera-la diretamente, apenas modificando a <b>Variável|C|</b>.';