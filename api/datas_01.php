<div class="title">Datas #01</div>

<?php
echo time() . '<br>';
echo 'Foi passada essa quantidade de segundos desde 1° de janeiro de 1970. <br>';

echo date('D, d \d\e M \d\e Y H:i A' ); 
// Conectivo 'de'.
// D = Dia da Semana
// d = dia do mes
// M = Mes em letras.
// m = Mes em numero
// Y = Ano completo.
// y = ultima dezena do ano.
// H = Horario GMT
// H:i = Horario GMT formatado com minutos.
// A = Manhã ou tarde.

setlocale(LC_TIME, 'pt_BR'); // Não funcionou, suspeito que seja o MAC
echo '<br>';
echo strftime('%A, %d de %B de %Y', time()) . '<br>'; // Função que também formata o tempo, não é mais atualizada pelo Php.
echo date('D, d \d\e M \d\e Y H:i A' ); 

echo '<br>';
$amanha = time() + (24 * 60 * 60); // 24 vezes 60 minutos e 60 segundos que resulta em um dia.
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>';

$proximaSemana = strtotime('+1 week'); // método simples de lidar com tempo
echo strtotime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

$dataFixa = mktime(15, 30, 50, 1, 25, 1975);
echo strtotime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa) . '<br>';