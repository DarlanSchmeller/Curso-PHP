<div class="title">Definindo Tipos</div>

<?php
print('<p class="title">
    <b>Tipo de Entrada</b> 
    <br>
    function somar2(<b>int $a, int $b</b>) {
    <br>
    <br>
    // Colocar um tipo de valor antes do parâmetro <b>define</b> o valor de <b>entrada</b> 
    dos parâmetros e o <b>converte</b> quando recebido, desta forma, se o parâmetro 5.4 for 
    enviado para a função, o mesmo será convertido para 5.
</p>');

print('<p class="title">
    <b>Tipo de Saida</b>
    <br>
    function somar3($a, $b) <b>: int</b> {
    <br>
    <br>
    // Colocar dois pontos e um tipo de valor após a declaração de parâmetros define o 
    valor de <b>saída</b>, ou seja, o valor é convertido após o final do código da função,
    e ao ser retornado estará no tipo definido.
</p>');

function somar1($a, $b) {
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(1,2) . '<br>';
echo somar1(1.7, 2.5) . '<br>';
echo somar1(1, '4dois') . '<br>';

// --------------------------------------
echo '<hr>';
function somar2(int $a, int $b) { // Define o tipo dos parâmetros, declarar os converte.
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo somar2(1,2) . '<br>';
echo somar2(1.7, 2.5) . '<br>';
echo somar2(1, '4dois') . '<br>';

// --------------------------------------
echo '<hr>';

function somar3($a, $b) : int { // Define o tipo do valor de saída/retorno, e o converte.
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo somar3(1,2) . '<br>';
echo somar3(1.7, 2.5) . '<br>';
echo somar3(1, '4dois') . '<br>';