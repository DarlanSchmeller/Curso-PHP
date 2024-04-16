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

echo '<br>';
echo strftime('%A, %d de %B de %Y', time()) . '<br>'; // Função que também formata o tempo, não é mais atualizada pelo Php.