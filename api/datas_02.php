<div class="title">Datas #02</div>

<?php
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime(); // Cria novo objeto tempo, as funcoes que trabalham com tempo sao todas
// Afetadas e irão seguir este tempo criado até outro ser criado.
setlocale(LC_TIME, 'pt_BR');

print_r($agora);
echo '<br>';
echo '<hr>';

echo $agora->format($formatoData1) . '<br>'; // 'Format' é usado para formatar baseando
// em um parâmetro fornecido.
echo strftime($formatoData2, $agora->getTimestamp()) . '<br>';
echo '<hr>';

$amanha = new DateTime('+2 day'); // Podemos criar um novo DateTime e inserir parametros.
echo strftime($formatoData2, $amanha->getTimestamp()) . '<br>';
echo '<hr>';

$dataFixa = new DateTime('1975-01-25 15:30:50');
echo strftime($formatoDataHora, $dataFixa->getTimestamp()) . '<br>';
// Acima estamos apenas formatando uma data criada com Datetime e exibindo ela com strftime.

echo '<hr>';
$amanha->modify('+1 day'); // modify modifica.
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';
// Modificado para exibir mais um dia 

echo '<hr>';
$amanha->setDate(2000, 5, 20);
echo strftime($formatoDataHora, $amanha->getTimestamp()) . '<br>';


// ======= Comparação de Datas =======
// no php podemos comparar objetos datas com outros objetos data.

$dataPassada = new DateTime('2005-05-14');
$dataFutura = new DateTime('2077-11-24');
$outraFutura = new DateTime('2077-11-24');

echo '<hr>';
echo ($amanha > $dataPassada ? 'Maior' : 'Menor'); // Comparando objetos que são armazenados
// na variavel
echo '<br>';
echo ($dataFutura > $dataPassada ? 'Maior' : 'Menor');

echo '<br>';
echo ($dataFutura == $outraFutura ? 'Igual' : 'Diferente');
// Se usar igualdade estrita aponta como diferente pois são dois objetos diferentes

echo '<br>';
echo '<hr>';
$tz = new DateTimeZone('America/Sao_Paulo'); // Define novo Timezone na variável.
$agora = new DateTime(null, $tz);

echo $agora->format('d/M/Y H:i:s');